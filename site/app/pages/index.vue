<script setup lang="ts">
import { heroRoles, YEARS_EXPERIENCE, PROJECTS_DONE, CERTIFICATIONS } from '~/data/profile'

usePageSeo(
  'Anne Lorraine Ramos - Full Stack Developer',
  'Anne Lorraine Ramos is a passionate Full Stack Developer based in Manila, Philippines, creating responsive web applications and mobile apps with exceptional user experiences.'
)

const NuxtLink = resolveComponent('NuxtLink')
const projectUrl = useProjectUrl()
const CV = '/assets/RAMOS_ANNE LORRAINE F._CV.pdf'

const roles = heroRoles
const roleText = ref(roles[0] as string)
const typing = ref(false)

const socials = [
  { label: 'GitHub', href: 'https://github.com/p0laris09', icon: 'pi-github', external: true },
  { label: 'LinkedIn', href: 'https://www.linkedin.com/in/anne-lorraine-ramos-596b5b330/', icon: 'pi-linkedin', external: true },
  { label: 'Email', href: 'mailto:annelorraineframos@gmail.com', icon: 'pi-envelope', external: false }
]

const stats = [
  { icon: 'pi-briefcase', target: YEARS_EXPERIENCE, label: 'Years Experience' },
  { icon: 'pi-folder-open', target: PROJECTS_DONE, label: 'Projects Done' },
  { icon: 'pi-verified', target: CERTIFICATIONS, label: 'Certifications' }
]
const statValues = ref<string[]>(stats.map(s => `${s.target}+`))
const statsEl = ref<HTMLElement | null>(null)

const projects = [
  {
    title: 'Ravel Solutions',
    desc: 'A comprehensive job search platform connecting job seekers with employers.',
    tags: ['Laravel', 'Vue.js', 'MySQL'],
    url: 'ravelsolutions.com',
    icon: 'pi-desktop',
    demo: '/projects/ravel/index.php',
    github: 'https://github.com/p0laris09/Ravel',
    study: {
      problem: 'Job seekers and employers need one place to post openings, apply and track applications.',
      role: 'Full Stack Developer',
      outcome: 'Built separate applicant, contractor and admin dashboards with job listings, job details and application tracking using Laravel, Vue and MySQL.'
    }
  },
  {
    title: 'Lifeline',
    desc: 'Emergency response app with real-time alerts and quick access to help.',
    tags: ['Flutter', 'Firebase', 'Dart'],
    icon: 'pi-mobile',
    image: { src: '/assets/Lifeline/13_Container-5.png', alt: 'Lifeline app home screen showing health overview, daily medications and upcoming appointments', width: 406, height: 1204 },
    gallery: '/projects#lifeline',
    study: {
      problem: 'People in an emergency need to ask for help quickly and let others know where they are.',
      role: 'Full Stack Developer',
      outcome: 'A personal project still in active development: a Flutter and Firebase app that I am building end to end.'
    }
  },
  {
    title: 'Mellow',
    desc: 'Smart task management with intelligent reminders and automation.',
    tags: ['React', 'Node.js', 'Flutter', 'Dart', 'Firebase'],
    url: 'mellow.app',
    icon: 'pi-check-circle',
    image: { src: '/assets/Mellow/14_Dashboard.png', alt: 'Mellow dashboard showing task analytics, recent spaces and task list', width: 618, height: 1353 },
    demo: '/projects/mellow/index.html',
    github: 'https://github.com/p0laris09/mellow-admin',
    study: {
      problem: 'Students need a single place to organise tasks, goals and shared work.',
      role: 'Full Stack Developer',
      outcome: 'Built a task manager with personal and shared tasks, task history, scheduling and an analytics dashboard.'
    }
  }
]

const jobs = [
  {
    company: 'Ortadel Technologies Corporation',
    role: 'IT Intern',
    date: 'Feb 2025 – May 2025',
    desc: 'Collaborated on enterprise web applications using modern development workflows and best practices.',
    tags: ['Web Development', 'Agile', 'Teamwork']
  },
  {
    company: 'Barangay 781 Zone 85',
    role: 'Backend Developer',
    date: 'Sep 2023 – Jun 2024',
    desc: 'Developed backend systems for community management with secure APIs and database solutions.',
    tags: ['PHP', 'MySQL', 'API Development']
  }
]

let timers: ReturnType<typeof setTimeout>[] = []
let observer: IntersectionObserver | null = null

onMounted(() => {
  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches
  if (reduced) return

  // Typing animation
  typing.value = true
  let roleIndex = 0
  let charIndex = 0
  let deleting = false
  const type = () => {
    const current = roles[roleIndex] as string
    roleText.value = current.substring(0, charIndex)
    let delay = deleting ? 50 : 100
    if (!deleting && charIndex === current.length) {
      deleting = true
      delay = 2000
    }
    else if (deleting && charIndex === 0) {
      deleting = false
      roleIndex = (roleIndex + 1) % roles.length
    }
    else {
      charIndex += deleting ? -1 : 1
    }
    timers.push(setTimeout(type, delay))
  }
  type()

  // Stats counter, runs once when the section is half visible
  if (statsEl.value && 'IntersectionObserver' in window) {
    statValues.value = stats.map(() => '0')
    observer = new IntersectionObserver((entries) => {
      if (!entries[0]?.isIntersecting) return
      observer?.disconnect()
      stats.forEach((s, i) => {
        let current = 0
        const inc = s.target / 50
        const update = () => {
          current += inc
          statValues.value[i] = current < s.target ? String(Math.floor(current)) : `${s.target}+`
          if (current < s.target) requestAnimationFrame(update)
        }
        update()
      })
    }, { threshold: 0.5 })
    observer.observe(statsEl.value)
  }
})

onBeforeUnmount(() => {
  timers.forEach(clearTimeout)
  timers = []
  observer?.disconnect()
})
</script>

<template>
  <div class="home">
    <!-- Hero -->
    <section class="hero" aria-labelledby="hero-title">
      <div class="container hero-grid">
        <div class="hero-content">
          <p v-reveal class="badge"><span class="pulse-dot" aria-hidden="true" /> Open for projects</p>
          <h1 id="hero-title" v-reveal="80">
            Hello, I'm<br>
            <span class="gradient-text">Anne Lorraine</span>
          </h1>
          <p v-reveal="120" class="role">
            <span class="role-text">{{ roleText }}</span><span v-if="typing" class="cursor" aria-hidden="true">|</span>
          </p>
          <p v-reveal="140" class="positioning">
            I build full-stack apps, cloud deployments and AI tools, from API to production.
          </p>
          <p v-reveal="160" class="muted lead">
            I design and build beautiful digital products that solve real problems.
            Passionate about creating seamless user experiences through clean code
            and thoughtful design.
          </p>
          <div v-reveal="200" class="cluster">
            <Button :as="NuxtLink" to="/projects" label="View Projects" icon="pi pi-th-large" />
            <Button :as="NuxtLink" to="/contact" label="Say Hello" icon="pi pi-comments" severity="secondary" outlined />
          </div>
          <ul v-reveal="240" class="socials" aria-label="Social links">
            <li v-for="s in socials" :key="s.label">
              <Button
                as="a"
                :href="s.href"
                :aria-label="s.label"
                :icon="`pi ${s.icon}`"
                severity="secondary"
                rounded
                text
                v-bind="s.external ? { target: '_blank', rel: 'noopener' } : {}"
              />
            </li>
          </ul>
        </div>

        <div v-reveal="120" class="hero-visual">
          <div class="frame-glow" aria-hidden="true" />
          <figure class="profile-frame">
            <img
              src="/images/girl-in-phone.png"
              alt="Anne Lorraine Ramos"
              width="480"
              height="480"
              fetchpriority="high"
            >
          </figure>
          <div class="chip chip-top float">
            <i class="pi pi-code" aria-hidden="true" />
            <div><strong>{{ PROJECTS_DONE }}+</strong><span>Projects</span></div>
          </div>
          <div class="chip chip-bottom float">
            <i class="pi pi-mobile" aria-hidden="true" />
            <div><strong>Cloud &amp; AI</strong><span>Docker · AWS · Ollama</span></div>
          </div>
        </div>
      </div>
    </section>

    <!-- About preview -->
    <section class="section section--alt" aria-labelledby="about-title">
      <div class="container about-grid">
        <div v-reveal class="about-image">
          <figure>
            <img
              src="/images/361_RAMOS_ANN_LORAINE22233.JPG"
              alt="About Anne"
              width="560"
              height="640"
              loading="lazy"
            >
          </figure>
          <div class="exp-badge">
            <span class="exp-num">{{ YEARS_EXPERIENCE }}+</span>
            <span>Years<br>Experience</span>
          </div>
        </div>
        <div v-reveal="100" class="stack">
          <Tag value="About Me" severity="secondary" rounded />
          <h2 id="about-title">
            Crafting Digital<br>
            <span class="gradient-text">Experiences</span>
          </h2>
          <p class="muted">
            I'm a passionate Full Stack Developer based in Manila, Philippines.
            I specialize in creating responsive web applications and mobile apps
            that not only look great but provide exceptional user experiences.
          </p>
          <p class="muted">
            With expertise in modern frameworks and a keen eye for design,
            I transform ideas into functional, beautiful digital solutions.
          </p>
          <Button :as="NuxtLink" to="/about" label="More about me" icon="pi pi-arrow-right" icon-pos="right" variant="link" />
        </div>
      </div>
    </section>

    <!-- Stats -->
    <section class="section stats" aria-label="Highlights">
      <div class="container">
        <ul ref="statsEl" class="grid grid--3 stats-list">
          <li v-for="(s, i) in stats" :key="s.label" v-reveal="i * 100" class="card-surface lift stat">
            <i :class="`pi ${s.icon}`" aria-hidden="true" />
            <span class="stat-num">{{ statValues[i] }}</span>
            <span class="muted">{{ s.label }}</span>
          </li>
        </ul>
      </div>
    </section>

    <!-- Tech stack -->
    <section class="section section--alt" aria-labelledby="skills-title">
      <div class="container">
        <div v-reveal class="heading center">
          <Tag value="What I Do" severity="secondary" rounded />
          <h2 id="skills-title">My <span class="gradient-text">Tech Stack</span></h2>
          <p class="muted lead">From interface to API to cloud deployment, plus self-hosted AI</p>
        </div>
        <TechStack />
      </div>
    </section>

    <!-- Featured projects -->
    <section class="section" aria-labelledby="projects-title">
      <div class="container">
        <div v-reveal class="heading row">
          <div>
            <Tag value="Portfolio" severity="secondary" rounded />
            <h2 id="projects-title">Featured <span class="gradient-text">Projects</span></h2>
          </div>
          <Button :as="NuxtLink" to="/projects" label="View all" icon="pi pi-arrow-right" icon-pos="right" variant="link" />
        </div>
        <ul class="grid grid--3 plain">
          <li v-for="(p, i) in projects" :key="p.title" v-reveal="i * 100">
            <Card class="lift full project">
              <template #header>
                <div class="preview" :aria-hidden="p.image ? undefined : 'true'">
                  <div v-if="p.url" class="browser-bar" aria-hidden="true"><span class="dots"><i /><i /><i /></span><span class="url">{{ p.url }}</span></div>
                  <img
                    v-if="p.image"
                    class="preview-img"
                    :class="{ 'has-bar': p.url }"
                    :src="p.image.src"
                    :alt="p.image.alt"
                    :width="p.image.width"
                    :height="p.image.height"
                    loading="lazy"
                    decoding="async"
                  >
                  <i v-else :class="`pi ${p.icon} preview-icon`" aria-hidden="true" />
                </div>
              </template>
              <template #content>
                <div class="stack">
                  <ul class="cluster plain tags">
                    <li v-for="t in p.tags" :key="t"><Tag :value="t" severity="secondary" /></li>
                  </ul>
                  <h3>{{ p.title }}</h3>
                  <p class="muted">{{ p.desc }}</p>
                  <dl class="study">
                    <div>
                      <dt>Problem</dt>
                      <dd>{{ p.study.problem }}</dd>
                    </div>
                    <div v-if="p.study.role">
                      <dt>My role</dt>
                      <dd>{{ p.study.role }}</dd>
                    </div>
                    <div>
                      <dt>Outcome</dt>
                      <dd>{{ p.study.outcome }}</dd>
                    </div>
                  </dl>
                </div>
              </template>
              <template #footer>
                <div class="cluster">
                  <Button
                    v-if="p.demo"
                    as="a"
                    :href="projectUrl(p.demo)"
                    target="_blank"
                    rel="noopener"
                    :aria-label="`Open ${p.title} demo`"
                    icon="pi pi-external-link"
                    label="Demo"
                    size="small"
                  />
                  <Button
                    v-if="p.github"
                    as="a"
                    :href="p.github"
                    target="_blank"
                    rel="noopener"
                    :aria-label="`${p.title} on GitHub`"
                    icon="pi pi-github"
                    label="GitHub"
                    size="small"
                    severity="secondary"
                    outlined
                  />
                  <Button
                    v-if="p.gallery"
                    :as="NuxtLink"
                    :to="p.gallery"
                    :aria-label="`${p.title} screenshots`"
                    icon="pi pi-images"
                    label="Screenshots"
                    size="small"
                  />
                </div>
              </template>
            </Card>
          </li>
        </ul>
      </div>
    </section>

    <!-- Experience -->
    <section class="section section--alt" aria-labelledby="exp-title">
      <div class="container">
        <div v-reveal class="heading center">
          <Tag value="Journey" severity="secondary" rounded />
          <h2 id="exp-title">Work <span class="gradient-text">Experience</span></h2>
        </div>
        <Timeline :value="jobs" class="jobs">
          <template #opposite>
            <span />
          </template>
          <template #content="{ item }">
            <div v-reveal class="card-surface job">
              <div class="job-head">
                <div>
                  <h3>{{ item.company }}</h3>
                  <p class="role-line">{{ item.role }}</p>
                </div>
                <span class="muted date"><i class="pi pi-calendar" aria-hidden="true" /> {{ item.date }}</span>
              </div>
              <p class="muted">{{ item.desc }}</p>
              <ul class="cluster plain tags">
                <li v-for="t in item.tags" :key="t"><Tag :value="t" severity="secondary" /></li>
              </ul>
            </div>
          </template>
        </Timeline>
        <div class="center-row">
          <Button :as="NuxtLink" to="/experience" label="View Full Experience" icon="pi pi-arrow-right" severity="secondary" outlined />
        </div>
      </div>
    </section>

    <!-- CTA -->
    <CtaBanner
      title="Let's Work Together"
      text="Have a project in mind? I'm available for freelance work and exciting opportunities."
    >
      <Button :as="NuxtLink" to="/contact" label="Get In Touch" icon="pi pi-send" />
      <Button as="a" :href="CV" target="_blank" rel="noopener" label="Download CV" icon="pi pi-download" severity="secondary" outlined />
    </CtaBanner>
  </div>
</template>

<style scoped>
.plain { list-style: none; padding: 0; margin: 0; }
.full { height: 100%; }
.tags { gap: var(--space-2); }

/* Hero */
.hero {
  position: relative; padding-block: var(--space-7) var(--space-8); overflow: hidden; isolation: isolate;
  background:
    radial-gradient(60rem 32rem at 85% 10%, color-mix(in srgb, var(--primary) 16%, transparent), transparent 70%),
    radial-gradient(40rem 26rem at 0% 100%, color-mix(in srgb, var(--accent-gold) 9%, transparent), transparent 70%);
}
.hero::before {
  content: ''; position: absolute; inset: 0; z-index: -1; pointer-events: none;
  background-image:
    linear-gradient(to right, color-mix(in srgb, var(--text) 6%, transparent) 1px, transparent 1px),
    linear-gradient(to bottom, color-mix(in srgb, var(--text) 6%, transparent) 1px, transparent 1px);
  background-size: 48px 48px;
  mask-image: radial-gradient(ellipse at 70% 30%, #000 0%, transparent 70%);
  -webkit-mask-image: radial-gradient(ellipse at 70% 30%, #000 0%, transparent 70%);
}
.hero-grid { display: grid; gap: var(--space-7); align-items: center; }
@media (min-width: 992px) {
  .hero-grid { grid-template-columns: 7fr 5fr; }
  .hero { padding-block: var(--space-8); min-height: calc(100vh - var(--header-h)); display: flex; align-items: center; }
  .hero > .container { width: 100%; }
}
.hero-content > * + * { margin-top: var(--space-4); }
.badge {
  display: inline-flex; align-items: center; gap: var(--space-2); margin: 0;
  padding: var(--space-1) var(--space-4); border-radius: 999px; font-weight: 600; font-size: var(--fs-sm);
  background: var(--surface); border: 1px solid var(--border); color: var(--text);
}
.pulse-dot { width: 0.6rem; height: 0.6rem; border-radius: 50%; background: var(--primary); animation: pulse 1.6s ease-out infinite; }
.role { font-size: var(--fs-xl); font-weight: 600; color: var(--primary); min-height: 1.7em; margin: 0; }
.cursor { margin-left: 2px; animation: blink 1s steps(1) infinite; }
@keyframes blink { 50% { opacity: 0; } }
.positioning { font-size: var(--fs-lg); font-weight: 500; color: var(--text); max-width: 36rem; margin: 0; }
.lead { font-size: var(--fs-lg); max-width: 38rem; }
.socials { display: flex; gap: var(--space-2); list-style: none; padding: 0; }

.hero-visual { position: relative; max-width: 26rem; margin-inline: auto; width: 100%; padding: var(--space-4); }
.profile-frame {
  position: relative; margin: 0; border-radius: 2rem; overflow: hidden; aspect-ratio: 1;
  background: var(--surface-2); border: 1px solid var(--border); box-shadow: var(--shadow);
  outline: 6px solid color-mix(in srgb, var(--primary) 18%, transparent); outline-offset: 6px;
}
.frame-glow {
  position: absolute; inset: 10% 6% 6%; border-radius: 2rem; z-index: 0; pointer-events: none;
  background: color-mix(in srgb, var(--primary) 35%, transparent); filter: blur(48px);
}
.profile-frame { z-index: 1; }
.profile-frame img { width: 100%; height: 100%; object-fit: cover; display: block; }
.chip {
  position: absolute; z-index: 2; display: flex; align-items: center; gap: var(--space-3);
  padding: var(--space-2) var(--space-4); border-radius: var(--radius);
  background: var(--surface); border: 1px solid var(--border); box-shadow: var(--shadow); color: var(--text);
}
.chip i { font-size: 1.25rem; color: var(--primary); }
.chip div { display: flex; flex-direction: column; line-height: 1.2; }
.chip span { font-size: var(--fs-sm); color: var(--text-muted); }
.chip-top { top: 0; right: 0; }
.chip-bottom { bottom: 0; left: 0; animation-delay: -3s; }

/* About */
.about-grid { display: grid; gap: var(--space-7); align-items: center; }
@media (min-width: 992px) { .about-grid { grid-template-columns: 1fr 1fr; } }
.about-image { position: relative; max-width: 28rem; margin-inline: auto; width: 100%; }
.about-image figure { margin: 0; border-radius: var(--radius); overflow: hidden; border: 1px solid var(--border); box-shadow: var(--shadow); }
.about-image img { display: block; width: 100%; aspect-ratio: 7 / 8; object-fit: cover; }
.exp-badge {
  position: absolute; right: var(--space-3); bottom: var(--space-3); display: flex; align-items: center; gap: var(--space-3);
  padding: var(--space-3) var(--space-4); border-radius: var(--radius);
  background: var(--primary); color: var(--on-primary); font-size: var(--fs-sm); line-height: 1.3; box-shadow: var(--shadow);
}
.exp-num { font-family: var(--font-num); font-variant-numeric: lining-nums tabular-nums; letter-spacing: -0.02em; font-size: var(--fs-2xl); font-weight: 700; }

/* Stats */
.stats { padding-block: var(--space-7); }
.stat { display: flex; flex-direction: column; align-items: center; text-align: center; gap: var(--space-1); }
.stat i { font-size: 1.5rem; color: var(--primary); }
.stat-num { font-family: var(--font-num); font-variant-numeric: lining-nums tabular-nums; letter-spacing: -0.02em; font-size: var(--fs-3xl); font-weight: 800; color: var(--text); line-height: 1.1; }

/* Headings */
.heading { margin-bottom: var(--space-6); }
.heading.center { text-align: center; margin-inline: auto; max-width: 46rem; }
.heading :deep(.p-tag), .heading > div > :deep(.p-tag) { margin-bottom: var(--space-3); }
.heading h2 { margin-top: var(--space-3); }
.heading.row { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-end; gap: var(--space-3); }
.heading.row h2 { margin-bottom: 0; }

/* Skills / projects */
.icon-badge {
  display: inline-grid; place-items: center; width: 3rem; height: 3rem; border-radius: var(--radius-sm);
  background: var(--surface-2); color: var(--primary); font-size: 1.25rem;
}
.project :deep(.p-card-header) { padding: 0; }
.preview {
  position: relative; aspect-ratio: 16 / 9; display: grid; place-items: center; overflow: hidden;
  background: var(--surface-2); border-bottom: 1px solid var(--border);
  border-radius: var(--radius) var(--radius) 0 0;
}
.preview-icon { font-size: 3rem; color: var(--primary); }
.preview-img { width: 100%; height: 100%; object-fit: cover; object-position: top center; display: block; }
.preview-img.has-bar { padding-top: 2.25rem; box-sizing: border-box; }
.browser-bar {
  position: absolute; inset: 0 0 auto 0; display: flex; align-items: center; gap: var(--space-3);
  padding: var(--space-2) var(--space-3); background: var(--surface); border-bottom: 1px solid var(--border);
  font-size: var(--fs-sm); color: var(--text-muted);
}
.dots { display: inline-flex; gap: 4px; }
.dots i { width: 8px; height: 8px; border-radius: 50%; background: var(--border); display: block; }

.study { margin: 0; padding-top: var(--space-3); border-top: 1px solid var(--border); display: grid; gap: var(--space-3); }
.study dt { font-size: var(--fs-sm); font-weight: 700; color: var(--primary); text-transform: uppercase; letter-spacing: 0.04em; }
.study dd { margin: 0; font-size: var(--fs-sm); color: var(--text-muted); line-height: 1.5; }

/* Experience */
.jobs :deep(.p-timeline-event-opposite) { flex: 0; padding: 0; display: none; }
.jobs :deep(.p-timeline-event-content) { padding-bottom: var(--space-5); padding-left: var(--space-4); }
.job h3 { margin-bottom: var(--space-1); }
.job-head { display: flex; flex-wrap: wrap; justify-content: space-between; gap: var(--space-2); margin-bottom: var(--space-3); }
.role-line { margin: 0; font-weight: 600; color: var(--primary); }
.date { font-size: var(--fs-sm); }
.center-row { display: flex; justify-content: center; margin-top: var(--space-6); }
</style>
