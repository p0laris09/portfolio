<script setup lang="ts">
usePageSeo(
  'Experience - Anne Lorraine Ramos',
  'A timeline of my professional growth and contributions in the tech industry: IT Intern at ORTADEL Technologies Corporation and Backend Developer at Barangay 781 Zone 85.'
)

const stats = [
  { icon: 'pi-briefcase', num: '2+', label: 'Work Experiences' },
  { icon: 'pi-building', num: '2', label: 'Companies' },
  { icon: 'pi-calendar', num: '1+', label: 'Years Experience' },
  { icon: 'pi-globe', num: '5+', label: 'Projects Delivered' }
]

const jobs = [
  {
    company: 'ORTADEL Technologies Corporation',
    role: 'IT Intern',
    date: 'Feb 2025 - May 2025',
    logo: '/images/ORTADEL_logo.png',
    logoAlt: 'Ortadel',
    desc: 'Contributed to enterprise-level web development projects, gaining hands-on experience with document management systems and modern CMS platforms in a professional setting.',
    responsibilities: [
      'Developed and maintained multiple websites using SeedDMS and Drupal CMS platforms',
      'Implemented content management workflows and document organization systems',
      'Collaborated with senior developers on client projects and feature implementations',
      'Participated in code reviews and agile development practices',
      'Created technical documentation for implemented features and systems'
    ],
    tags: ['SeedDMS', 'Drupal', 'PHP', 'MySQL', 'Git']
  },
  {
    company: 'Barangay 781 Zone 85',
    role: 'Backend Developer',
    date: 'Sep 2023 - Jun 2024',
    logo: '/images/brgy781.jpg',
    logoAlt: 'Barangay 781',
    desc: 'Led the backend development for a comprehensive barangay management system, designing scalable database architectures and implementing secure authentication mechanisms.',
    responsibilities: [
      'Architected and implemented the complete database schema for resident management',
      'Developed RESTful APIs for frontend integration and data processing',
      'Built secure authentication system with role-based access control',
      'Optimized database queries for improved system performance',
      'Implemented data validation and sanitization for enhanced security'
    ],
    tags: ['PHP', 'Laravel', 'MySQL', 'REST API', 'Bootstrap']
  }
]

const skills = [
  { icon: 'pi-code', title: 'Backend Development', text: 'Building robust server-side applications with PHP, Laravel, and MySQL', level: 90 },
  { icon: 'pi-database', title: 'Database Design', text: 'Creating efficient database schemas and optimizing queries', level: 85 },
  { icon: 'pi-shield', title: 'Security Implementation', text: 'Authentication systems, data validation, and secure coding practices', level: 80 },
  { icon: 'pi-users', title: 'Team Collaboration', text: 'Working with cross-functional teams and participating in agile workflows', level: 95 }
]

const logoFailed = reactive<Record<string, boolean>>({})
</script>

<template>
  <div>
    <PageHero
      eyebrow="Professional Journey"
      title="Work"
      accent="Experience"
      subtitle="A timeline of my professional growth and contributions in the tech industry"
    />

    <section class="section stats-section" aria-label="Experience summary">
      <div class="container">
        <ul class="grid grid--4 plain">
          <li v-for="(s, i) in stats" :key="s.label" v-reveal="i * 80" class="card-surface lift stat">
            <span class="stat-icon"><i :class="['pi', s.icon]" aria-hidden="true" /></span>
            <span>
              <span class="stat-num">{{ s.num }}</span>
              <span class="stat-label muted">{{ s.label }}</span>
            </span>
          </li>
        </ul>
      </div>
    </section>

    <section class="section section--alt" aria-label="Professional timeline">
      <div class="container">
        <SectionHeading eyebrow="Career Path" title="My Professional" accent="Timeline" center />
        <Timeline :value="jobs" align="left" class="exp-timeline">
          <template #opposite><span /></template>
          <template #marker>
            <span class="marker" aria-hidden="true"><i class="pi pi-briefcase" /></span>
          </template>
          <template #content="{ item }">
            <article v-reveal class="card-surface lift job">
              <header class="job-head">
                <div class="job-id">
                  <img
                    v-if="!logoFailed[item.company]"
                    :src="item.logo"
                    :alt="item.logoAlt"
                    class="logo"
                    width="56"
                    height="56"
                    loading="lazy"
                    @error="logoFailed[item.company] = true"
                  >
                  <div>
                    <h3>{{ item.company }}</h3>
                    <span class="role">{{ item.role }}</span>
                  </div>
                </div>
                <Tag severity="secondary" class="date">
                  <i class="pi pi-calendar" aria-hidden="true" /> {{ item.date }}
                </Tag>
              </header>
              <p class="muted">{{ item.desc }}</p>
              <h4 class="resp-title"><i class="pi pi-list-check" aria-hidden="true" /> Key Responsibilities</h4>
              <ul class="resp">
                <li v-for="r in item.responsibilities" :key="r">{{ r }}</li>
              </ul>
              <ul class="tags plain" aria-label="Technologies">
                <li v-for="t in item.tags" :key="t"><Tag :value="t" severity="secondary" rounded /></li>
              </ul>
            </article>
          </template>
        </Timeline>
      </div>
    </section>

    <section class="section" aria-label="Skills developed">
      <div class="container">
        <SectionHeading

          eyebrow="Growth"
          title="Skills"
          accent="Developed"
          subtitle="Technical and soft skills I've honed through professional experience"
          center
        />
        <ul class="grid grid--4 plain">
          <li v-for="(s, i) in skills" :key="s.title" v-reveal="i * 80" class="card-surface lift skill">
            <span class="stat-icon"><i :class="['pi', s.icon]" aria-hidden="true" /></span>
            <h3>{{ s.title }}</h3>
            <p class="muted">{{ s.text }}</p>
            <div
              class="bar"
              role="progressbar"
              :aria-label="`${s.title} proficiency`"
              aria-valuemin="0"
              aria-valuemax="100"
              :aria-valuenow="s.level"
            >
              <span class="bar-fill" :style="{ width: s.level + '%' }" />
            </div>
          </li>
        </ul>
      </div>
    </section>

    <CtaBanner
      title="Interested in"
      accent="Working Together?"
      text="I'm always open to discussing new opportunities and exciting projects. Let's connect and see how I can contribute to your team."
    >
      <Button as="router-link" to="/contact" label="Contact Me" icon="pi pi-envelope" />
      <Button as="router-link" to="/projects" label="See My Work" icon="pi pi-folder" severity="secondary" outlined />
    </CtaBanner>
  </div>
</template>

<style scoped>
.plain { list-style: none; padding: 0; margin: 0; }
.stat { display: flex; align-items: center; gap: var(--space-4); }
.stat-icon {
  display: inline-grid; place-items: center; flex: none; width: 3rem; height: 3rem; border-radius: var(--radius-sm);
  background: var(--surface-2); color: var(--primary); font-size: 1.25rem;
}
.stat-num { display: block; font-family: var(--font-serif); font-size: var(--fs-2xl); font-weight: 700; line-height: 1.1; color: var(--text); }
.stat-label { display: block; font-size: var(--fs-sm); }

.exp-timeline { --gap: var(--space-5); }
.exp-timeline :deep(.p-timeline-event-opposite) { display: none; flex: 0; padding: 0; }
.exp-timeline :deep(.p-timeline-event-content) { padding-bottom: var(--space-5); min-width: 0; }
.exp-timeline :deep(.p-timeline-event-connector) { background: var(--border); }
.marker {
  display: inline-grid; place-items: center; width: 2.25rem; height: 2.25rem; border-radius: 50%;
  background: var(--primary); color: var(--on-primary); font-size: 1rem;
}

.job-head { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start; gap: var(--space-3); margin-bottom: var(--space-3); }
.job-id { display: flex; align-items: center; gap: var(--space-4); min-width: 0; }
.job-id h3 { margin: 0 0 var(--space-1); }
.logo { width: 56px; height: 56px; object-fit: cover; border-radius: var(--radius-sm); border: 1px solid var(--border); background: var(--surface); flex: none; }
.role { color: var(--accent-gold); font-weight: 600; }
.date { white-space: normal; }
.resp-title { font-family: var(--font-sans); font-size: var(--fs-base); margin: var(--space-4) 0 var(--space-2); }
.resp-title .pi { color: var(--primary); margin-right: var(--space-1); }
.resp { margin: 0 0 var(--space-4); }
.resp li + li { margin-top: var(--space-1); }
.tags { display: flex; flex-wrap: wrap; gap: var(--space-2); }

.skill h3 { margin: var(--space-3) 0 var(--space-2); }
.bar { height: 0.5rem; border-radius: 999px; background: var(--surface-2); border: 1px solid var(--border); overflow: hidden; }
.bar-fill { display: block; height: 100%; background: var(--primary); border-radius: 999px; }

@media (min-width: 768px) {
  .exp-timeline :deep(.p-timeline-event-content) { padding-left: var(--space-5); }
}
</style>
