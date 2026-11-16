<script setup lang="ts">
import { YEARS_EXPERIENCE, PROJECTS_DONE, CERTIFICATIONS, technologyCount } from '~/data/profile'

usePageSeo(
  'About - Anne Lorraine Ramos',
  'Passionate developer crafting digital experiences with code and creativity. Full Stack Developer based in the Philippines, BS Computer Science graduate and Dean\'s Lister from the University of Makati.'
)

const highlights = [
  { icon: 'pi-graduation-cap', label: 'BS Computer Science' },
  { icon: 'pi-star', label: 'Dean\'s Lister' },
  { icon: 'pi-code', label: 'Full Stack Developer' }
]

const stats = [
  { icon: 'pi-folder', value: PROJECTS_DONE, label: 'Projects Completed' },
  { icon: 'pi-code', value: technologyCount, label: 'Technologies Used' },
  { icon: 'pi-trophy', value: CERTIFICATIONS, label: 'Certificates Earned' }
]

const softSkills = [
  { icon: 'pi-lightbulb', title: 'Problem Solving', text: 'Breaking down complex challenges into manageable solutions' },
  { icon: 'pi-comments', title: 'Communication', text: 'Clear and effective exchange of ideas with teams and clients' },
  { icon: 'pi-users', title: 'Teamwork', text: 'Collaborating seamlessly with diverse teams to achieve goals' },
  { icon: 'pi-clock', title: 'Time Management', text: 'Prioritizing tasks and meeting deadlines consistently' },
  { icon: 'pi-sync', title: 'Adaptability', text: 'Quickly learning new technologies and adjusting to changes' },
  { icon: 'pi-eye', title: 'Attention to Detail', text: 'Ensuring quality and precision in every line of code' }
]

const interests = [
  { icon: 'pi-code', label: 'Building Web Applications' },
  { icon: 'pi-mobile', label: 'Mobile App Development' },
  { icon: 'pi-palette', label: 'UI/UX Design' },
  { icon: 'pi-book', label: 'Learning New Technologies' },
  { icon: 'pi-th-large', label: 'Solving Complex Problems' },
  { icon: 'pi-heart', label: 'Coffee & Coding Sessions' }
]

// Counter animation: SSR/static fallback shows the final values; animates client-side only.
const counts = ref(stats.map(s => s.value))
const statsEl = ref<HTMLElement | null>(null)
let observer: IntersectionObserver | undefined
let raf = 0

function animate() {
  const start = performance.now()
  const duration = 1200
  const tick = (now: number) => {
    const t = Math.min((now - start) / duration, 1)
    const eased = 1 - Math.pow(1 - t, 3)
    counts.value = stats.map(s => Math.round(s.value * eased))
    if (t < 1) raf = requestAnimationFrame(tick)
  }
  raf = requestAnimationFrame(tick)
}

onMounted(() => {
  if (!statsEl.value || window.matchMedia('(prefers-reduced-motion: reduce)').matches || !('IntersectionObserver' in window)) return
  observer = new IntersectionObserver((entries) => {
    if (entries.some(e => e.isIntersecting)) {
      observer?.disconnect()
      counts.value = stats.map(() => 0)
      animate()
    }
  }, { threshold: 0.4 })
  observer.observe(statsEl.value)
})

onBeforeUnmount(() => {
  observer?.disconnect()
  cancelAnimationFrame(raf)
})
</script>

<template>
  <div>
    <PageHero
      eyebrow="Get to Know Me"
      title="About"
      accent="Me"
      subtitle="Passionate developer crafting digital experiences with code and creativity"
    />

    <!-- My Story -->
    <section class="section" aria-labelledby="story-heading">
      <div class="container story">
        <div v-reveal class="story-media">
          <figure class="photo">
            <img
              src="/images/361_RAMOS_ANN_LORAINE22233.JPG"
              alt="Anne Lorraine Ramos"
              width="800"
              height="1000"
            >
          </figure>
          <div class="exp-badge float">
            <span class="exp-num">{{ YEARS_EXPERIENCE }}+</span>
            <span class="exp-text">Years of<br>Experience</span>
          </div>
        </div>

        <div class="story-content">
          <div v-reveal class="heading">
            <Tag value="My Journey" severity="secondary" rounded class="eyebrow" />
            <h2 id="story-heading">Building the Future, <span class="gradient-text">One Line at a Time</span></h2>
          </div>
          <div v-reveal class="stack">
            <p>
              Hi, I'm <strong>Anne Lorraine F. Ramos</strong>, a passionate Full Stack Developer based in the
              Philippines.
              My journey into the world of technology began with curiosity and evolved into a genuine passion for
              creating digital solutions that make a real impact.
            </p>
            <p>
              As a consistent <strong>Dean's Lister</strong> throughout my Bachelor of Science in Computer Science at
              the University of Makati, I've developed a strong foundation in both theoretical
              concepts and practical applications. I've had the privilege of serving as the <strong>main
                programmer</strong>
              on numerous academic and professional projects.
            </p>
            <p>
              What drives me is the challenge of transforming complex problems into elegant, user-friendly solutions.
              Whether it's building responsive web applications, developing mobile apps, or architecting robust
              backend systems, I approach each project with dedication and attention to detail.
            </p>
          </div>
          <ul v-reveal class="highlights">
            <li v-for="h in highlights" :key="h.label">
              <i :class="['pi', h.icon]" aria-hidden="true" />
              <span>{{ h.label }}</span>
            </li>
          </ul>
          <Button as="NuxtLink" to="/contact" label="Let's Connect" icon="pi pi-comments" />
        </div>
      </div>
    </section>

    <!-- Stats -->
    <section ref="statsEl" class="stats" aria-label="Highlights in numbers">
      <div class="container">
        <ul class="grid grid--3 stats-list">
          <li v-for="(s, i) in stats" :key="s.label" v-reveal="i * 100" class="stat">
            <span class="stat-icon"><i :class="['pi', s.icon]" aria-hidden="true" /></span>
            <span class="stat-num">{{ counts[i] }}+</span>
            <span class="stat-label">{{ s.label }}</span>
          </li>
        </ul>
      </div>
    </section>

    <!-- Technical Skills -->
    <section class="section" aria-labelledby="tech-heading">
      <div class="container">
        <div v-reveal class="heading center">
          <Tag value="My Expertise" severity="secondary" rounded class="eyebrow" />
          <h2 id="tech-heading">Technical <span class="gradient-text">Skills</span></h2>
          <p class="muted">A comprehensive toolkit of technologies I use to bring ideas to life</p>
        </div>

        <TechStack />
      </div>
    </section>

    <!-- Soft Skills -->
    <section class="section section--alt" aria-labelledby="soft-heading">
      <div class="container">
        <div v-reveal class="heading center">
          <Tag value="Beyond Code" severity="secondary" rounded class="eyebrow" />
          <h2 id="soft-heading">Soft <span class="gradient-text">Skills</span></h2>
          <p class="muted">
            Technical expertise is important, but these skills help me collaborate effectively and deliver exceptional
            results
          </p>
        </div>

        <ul class="grid grid--3 plain">
          <li v-for="(s, i) in softSkills" :key="s.title" v-reveal="i * 80" class="card-surface lift soft-card">
            <span class="icon-badge"><i :class="['pi', s.icon]" aria-hidden="true" /></span>
            <h3>{{ s.title }}</h3>
            <p class="muted">{{ s.text }}</p>
          </li>
        </ul>
      </div>
    </section>

    <!-- Education -->
    <section class="section" aria-labelledby="edu-heading">
      <div class="container grid grid--2 edu-grid">
        <div>
          <div v-reveal class="heading">
            <Tag value="Education" severity="secondary" rounded class="eyebrow" />
            <h2 id="edu-heading">Academic <span class="gradient-text">Background</span></h2>
            <p class="muted">
              My formal education has provided me with a strong foundation in computer science principles,
              algorithms, and software engineering best practices.
            </p>
          </div>

          <div v-reveal class="card-surface edu-item">
            <span class="icon-badge"><i class="pi pi-graduation-cap" aria-hidden="true" /></span>
            <div>
              <Tag value="2021 - 2025" severity="secondary" rounded />
              <h3 class="edu-title">Bachelor of Science in Computer Science</h3>
              <p class="muted">University of Makati</p>
              <ul class="edu-highlights">
                <li><i class="pi pi-star-fill" aria-hidden="true" /> Dean's Lister</li>
                <li><i class="pi pi-code" aria-hidden="true" /> Main Programmer</li>
              </ul>
            </div>
          </div>
        </div>

        <div v-reveal="100" class="card-surface interests">
          <h3><i class="pi pi-heart-fill" aria-hidden="true" /> What I Love</h3>
          <ul class="interest-list">
            <li v-for="it in interests" :key="it.label">
              <i :class="['pi', it.icon]" aria-hidden="true" />
              <span>{{ it.label }}</span>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <CtaBanner
      title="Ready to Work"
      accent="Together?"
      text="Let's turn your ideas into reality. I'm always excited to take on new challenges and create amazing digital experiences."
    >
      <Button as="NuxtLink" to="/contact" label="Get In Touch" icon="pi pi-envelope" />
      <Button as="NuxtLink" to="/projects" label="View Projects" icon="pi pi-folder" severity="secondary" outlined />
    </CtaBanner>
  </div>
</template>

<style scoped>
.heading { margin-bottom: var(--space-6); max-width: 46rem; }
.heading.center { margin-inline: auto; text-align: center; }
.heading p { font-size: var(--fs-lg); }
.eyebrow { margin-bottom: var(--space-3); }
.plain, .highlights, .stats-list, .edu-highlights, .interest-list { list-style: none; padding: 0; margin: 0; }

/* Story */
.story { display: grid; gap: var(--space-7); align-items: center; }
@media (min-width: 992px) { .story { grid-template-columns: 5fr 7fr; gap: var(--space-8); } }
.story-media { position: relative; max-width: 26rem; margin-inline: auto; width: 100%; }
.photo { margin: 0; border-radius: var(--radius); overflow: hidden; border: 1px solid var(--border); box-shadow: var(--shadow); background: var(--surface-2); }
.photo img { display: block; width: 100%; height: auto; aspect-ratio: 4 / 5; object-fit: cover; }
.exp-badge {
  position: absolute; right: var(--space-3); bottom: calc(var(--space-5) * -1);
  display: flex; align-items: center; gap: var(--space-3);
  padding: var(--space-3) var(--space-4); border-radius: var(--radius);
  background: var(--primary); color: var(--on-primary); box-shadow: var(--shadow);
}
.exp-num { font-family: var(--font-num); font-variant-numeric: lining-nums tabular-nums; letter-spacing: -0.02em; font-size: var(--fs-2xl); font-weight: 700; line-height: 1; }
.exp-text { font-size: var(--fs-sm); line-height: 1.3; font-weight: 600; }
.story-content .stack { margin-bottom: var(--space-5); }
.highlights { display: flex; flex-wrap: wrap; gap: var(--space-3); margin-bottom: var(--space-5); }
.highlights li {
  display: inline-flex; align-items: center; gap: var(--space-2);
  padding: var(--space-2) var(--space-4); border-radius: 999px;
  background: var(--surface); border: 1px solid var(--border); font-weight: 500;
}
.highlights i { color: var(--primary); }

/* Stats */
.stats { background: var(--primary-strong); color: var(--on-primary); padding-block: var(--space-7); }
:global(:root.app-dark) .stats { background: var(--surface); color: var(--text); }
.stat { display: flex; flex-direction: column; align-items: center; text-align: center; gap: var(--space-1); }
.stat-icon { font-size: var(--fs-2xl); margin-bottom: var(--space-2); }
.stat-num { font-family: var(--font-num); font-variant-numeric: lining-nums tabular-nums; letter-spacing: -0.02em; font-size: var(--fs-4xl); font-weight: 800; line-height: 1.1; font-variant-numeric: tabular-nums; }
.stat-label { font-size: var(--fs-lg); font-weight: 500; }

/* Skills */
.icon-badge {
  display: inline-flex; align-items: center; justify-content: center; flex: none;
  width: 3rem; height: 3rem; border-radius: var(--radius-sm); font-size: 1.25rem;
  background: var(--surface-2); color: var(--primary); border: 1px solid var(--border);
}
.soft-card h3 { margin-top: var(--space-4); }
.soft-card p { margin: 0; }

/* Education */
.edu-grid { align-items: start; gap: var(--space-7); }
.edu-item { display: flex; gap: var(--space-4); align-items: flex-start; }
.edu-title { margin: var(--space-3) 0 var(--space-1); }
.edu-item p { margin-bottom: var(--space-3); }
.edu-highlights { display: flex; flex-wrap: wrap; gap: var(--space-4); font-weight: 500; }
.edu-highlights i { color: var(--accent-gold); margin-right: var(--space-1); }
.interests h3 i { color: var(--primary); margin-right: var(--space-2); }
.interest-list { display: grid; gap: var(--space-3); }
.interest-list li {
  display: flex; align-items: center; gap: var(--space-3);
  padding: var(--space-3) var(--space-4); border-radius: var(--radius-sm);
  background: var(--surface-2); border: 1px solid var(--border);
}
.interest-list i { color: var(--primary); }
@media (min-width: 576px) { .interest-list { grid-template-columns: 1fr 1fr; } }
</style>
