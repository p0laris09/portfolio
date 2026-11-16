<script setup lang="ts">
usePageSeo(
  'Projects - Anne Lorraine Ramos',
  'A showcase of innovative solutions built with passion and technical excellence'
)

const NuxtLink = resolveComponent('NuxtLink')
const projectUrl = useProjectUrl()

interface Project {
  type: string
  title: string
  icon: string
  description: string
  tech: string[]
  href?: string
  gallery?: string
}
interface Year { year: string, projects: Project[] }

const stats = [
  { icon: 'pi-folder', num: '10+', label: 'Total Projects' },
  { icon: 'pi-globe', num: '8+', label: 'Web Applications' },
  { icon: 'pi-mobile', num: '4+', label: 'Mobile Apps' }
]

const years: Year[] = [
  {
    year: '2026',
    projects: [
      {
        type: 'Mobile App', title: 'Lifeline', icon: 'pi-mobile', gallery: 'lifeline',
        description: 'Personal safety and emergency assistance application with one-tap SOS activation, real-time location sharing, and emergency contact system. Personal project, currently in development.',
        tech: ['Flutter', 'Dart', 'Firebase', 'Google Maps API']
      }
    ]
  },
  {
    year: '2025',
    projects: [
      {
        type: 'Website', title: 'Ravel', icon: 'pi-globe', href: '/projects/ravel/index.php',
        description: 'Dynamic job search platform connecting job seekers with employers. Features advanced filtering, application tracking, and employer analytics dashboard.',
        tech: ['Laravel', 'Vue.js', 'MySQL']
      },
      {
        type: 'Mobile App', title: 'Caffeinate Me', icon: 'pi-shopping-bag', gallery: 'caffeinate',
        description: 'Coffee shop mobile application with menu browsing, order placement, loyalty rewards, and store locator features.',
        tech: ['Flutter', 'Dart', 'Firebase', 'Stripe API']
      }
    ]
  },
  {
    year: '2024',
    projects: [
      {
        type: 'Website', title: 'Hotel Reservation', icon: 'pi-building', href: '/projects/hotel/index.html',
        description: 'Comprehensive hotel booking system with room availability, reservation management, payment processing, and admin dashboard.',
        tech: ['PHP', 'Laravel', 'MySQL', 'Bootstrap']
      },
      {
        type: 'Mobile App', title: 'Mellow', icon: 'pi-th-large', href: '/projects/mellow/index.html', gallery: 'mellow',
        description: 'Task management application with Kanban boards, smart reminders, team collaboration tools, and progress analytics.',
        tech: ['React.js', 'Node.js', 'Flutter', 'Dart', 'Firebase']
      }
    ]
  },
  {
    year: '2023',
    projects: [
      {
        type: 'Website', title: 'Barangay 781 Zone 85', icon: 'pi-building-columns',
        description: 'Local government management system with resident database, permit processing, event scheduling, and administrative reporting.',
        tech: ['PHP', 'Laravel', 'MySQL', 'Chart.js']
      }
    ]
  },
  {
    year: '2022',
    projects: [
      {
        type: 'Website', title: 'Quiz Me', icon: 'pi-question-circle', href: '/projects/quiz%20me/index.php',
        description: 'Interactive quiz platform with multiple question types, timed assessments, score tracking, and leaderboard functionality.',
        tech: ['PHP', 'MySQL', 'JavaScript', 'Bootstrap']
      }
    ]
  },
  {
    year: '2021',
    projects: [
      {
        type: 'Website', title: 'AK & Co', icon: 'pi-shopping-cart', href: '/projects/ak/php/home.php',
        description: 'Professional e-commerce website with responsive design, product catalog, shopping cart, and checkout system.',
        tech: ['HTML/CSS', 'JavaScript', 'PHP', 'MySQL']
      }
    ]
  }
]

const galleries: Record<string, { name: string, folder: string, files: string[] }> = {
  lifeline: {
    name: 'Lifeline',
    folder: 'Lifeline',
    files: [
      '01_Splash Screen.png', '02_Onboarding 1.png', '03_Onboarding 2.png', '04_Onboarding 3.png',
      '05_Sign Up.png', '06_Log In.png', '07_Container-6.png', '08_Container.png', '09_Container-1.png',
      '10_Container-2.png', '11_Container-3.png', '12_Container-4.png', '13_Container-5.png'
    ]
  },
  caffeinate: {
    name: 'Caffeinate Me',
    folder: 'Caffeinate Me',
    files: [
      '01_Onboarding 1.png', '02_Sign in.png', '03_Sign Up.png', '04_Sweetness Level.png',
      '05_Taste Preference.png', '06_Allergies.png', '07_Coffee Preference.png', '08_Home.png',
      '09_Profile - Taste Preference.png', '10_Profile - Reviews.png', '11_Profile - Visits.png',
      '12_Serach Results.png', '13_Detail Item.png', '14_Integrated Map.png', '15_Bookmarks.png',
      '16_Community.png'
    ]
  },
  mellow: {
    name: 'Mellow',
    folder: 'Mellow',
    files: [
      '01_ONBOARDING PAGE.png', '02_SIGN UP PAGE PERSONAL DETAILS.png', '03_SIGN UP COLLEGE DETAILS.png',
      '04_Sign Up Contact Details v2.png', '05_Sign Up Review Details v2.png', '06_Privacy Policy v2.png',
      '07_Terms of Service v2.png', '08_Sign In v2.png', '09_Forgot Password v2.png', '10_Password Reset.png',
      '11_Email Verification.png', '12_Settings Drawer v2.png', '13_Notifications v2.png', '14_Dashboard.png',
      '15_Task Management.png', '16_Task Management.png', '17_Task History.png', '19_Task History.png',
      '20_Task History.png', '21_Task History.png', '22_Frame 2615.png', '23_Frame 2616.png',
      '24_Task Creation (Personal).png', '25_Task Creation (Shared Task).png',
      '26_Task Creation (Collaboration Space).png', '27_Share Space v2.png', '28_Share Space v2.png',
      '29_Space Creation.png', '30_View Space.png', '31_View Space.png', '32_Task Preference.png',
      '33_Task Preference.png', '34_Task Preference.png'
    ]
  }
}

const openKey = ref<string | null>(null)
function setOpen(key: string, v: boolean) {
  if (v) openKey.value = key
  else if (openKey.value === key) openKey.value = null
}
</script>

<template>
  <div>
    <PageHero
      eyebrow="My Work"
      title="Featured"
      accent="Projects"
      subtitle="A showcase of innovative solutions built with passion and technical excellence"
    />

    <section class="section" aria-label="Project statistics">
      <div class="container">
        <ul class="grid grid--3 stats">
          <li v-for="(s, i) in stats" :key="s.label" v-reveal class="card-surface stat lift" :style="{ '--reveal-delay': `${i * 80}ms` }">
            <span class="stat-icon"><i class="pi" :class="s.icon" aria-hidden="true" /></span>
            <span class="stat-info">
              <span class="stat-num">{{ s.num }}</span>
              <span class="muted">{{ s.label }}</span>
            </span>
          </li>
        </ul>
      </div>
    </section>

    <section class="section section--alt">
      <div class="container">
        <SectionHeading eyebrow="My Journey" title="Project" accent="Timeline" center />

        <Timeline :value="years" align="left" class="timeline">
          <template #opposite><span /></template>
          <template #content="{ item: yr }">
            <div class="year-block">
              <h3 class="year">{{ (yr as Year).year }}</h3>
              <div class="grid grid--2">
                <Card v-for="p in (yr as Year).projects" :id="p.gallery || undefined" :key="p.title" v-reveal class="project lift">
                  <template #title>
                    <span class="icon-wrap"><i class="pi" :class="p.icon" aria-hidden="true" /></span>
                    <Tag :value="p.type" severity="secondary" rounded />
                    <h4>{{ p.title }}</h4>
                  </template>
                  <template #content>
                    <p class="muted">{{ p.description }}</p>
                    <ul class="tech" :aria-label="`${p.title} technologies`">
                      <li v-for="t in p.tech" :key="t"><Chip :label="t" /></li>
                    </ul>
                    <div v-if="p.gallery || p.href" class="cluster actions">
                      <Button
                        v-if="p.gallery"
                        type="button"
                        label="View Images"
                        icon="pi pi-images"
                        severity="secondary"
                        size="small"
                        aria-haspopup="dialog"
                        :aria-label="`View Images: ${p.title}`"
                        @click="setOpen(p.gallery, true)"
                      />
                      <Button
                        v-if="p.href"
                        as="a"
                        :href="projectUrl(p.href)"
                        target="_blank"
                        rel="noopener"
                        label="View Project"
                        icon="pi pi-external-link"
                        size="small"
                        :aria-label="`View Project: ${p.title}`"
                      />
                    </div>
                  </template>
                </Card>
              </div>
            </div>
          </template>
        </Timeline>
      </div>
    </section>

    <ProjectsGallery
      v-for="(g, key) in galleries"
      :key="key"
      :visible="openKey === key"
      :name="g.name"
      :folder="g.folder"
      :files="g.files"
      @update:visible="setOpen(key as string, $event)"
    />

    <CtaBanner
      title="Have a Project"
      accent="in Mind?"
      text="I'm always excited to work on new challenges. Let's discuss how I can help bring your ideas to life."
    >
      <Button :as="NuxtLink" to="/contact" label="Start a Conversation" icon="pi pi-envelope" />
      <Button
        as="a"
        href="https://github.com/p0laris09"
        target="_blank"
        rel="noopener"
        label="View GitHub"
        icon="pi pi-github"
        severity="secondary"
        outlined
      />
    </CtaBanner>
  </div>
</template>

<style scoped>
.stats { list-style: none; padding: 0; margin: 0; }
.stat { display: flex; align-items: center; gap: var(--space-4); }
.stat-icon {
  display: inline-grid; place-items: center; width: 3rem; height: 3rem; border-radius: var(--radius-sm);
  background: var(--surface-2); color: var(--primary); font-size: 1.25rem; flex: none;
}
.stat-info { display: flex; flex-direction: column; }
.stat-num { font-family: var(--font-num); font-variant-numeric: lining-nums tabular-nums; letter-spacing: -0.02em; font-size: var(--fs-2xl); font-weight: 800; color: var(--text); line-height: 1.1; }

.timeline { max-width: 60rem; margin-inline: auto; }
.timeline :deep(.p-timeline-event-opposite) { display: none; }
.timeline :deep(.p-timeline-event-content) { min-width: 0; padding-bottom: var(--space-6); }
.timeline :deep(.p-timeline-event-separator) { padding-inline: var(--space-1); }
.timeline :deep(.p-timeline-event-marker) { border-color: var(--primary); background: var(--primary); }
.timeline :deep(.p-timeline-event-connector) { background: var(--border); }
@media (min-width: 640px) {
  .timeline :deep(.p-timeline-event-content) { padding-left: var(--space-4); }
}
.year { font-size: var(--fs-2xl); color: var(--primary); margin-bottom: var(--space-4); }
.project { height: 100%; }
.project :deep(.p-card-title) { display: flex; flex-wrap: wrap; align-items: center; gap: var(--space-3); }
.project h4 { flex-basis: 100%; margin: 0; font-size: var(--fs-xl); }
.icon-wrap {
  display: inline-grid; place-items: center; width: 2.5rem; height: 2.5rem; border-radius: var(--radius-sm);
  background: var(--surface-2); color: var(--primary);
}
.tech { list-style: none; padding: 0; margin: 0 0 var(--space-4); display: flex; flex-wrap: wrap; gap: var(--space-2); }
.actions { margin-top: var(--space-2); }
</style>
