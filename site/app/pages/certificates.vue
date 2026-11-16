<script setup lang="ts">
usePageSeo(
  'Certificates - Anne Lorraine Ramos',
  'A journey of continuous learning, professional development, and academic excellence'
)

interface Certificate {
  provider: string
  providerIcon: string
  date: string
  title: string
  description: string
  skills: string[]
  href: string
  featured?: boolean
}

interface Category {
  name: string
  description: string
  icon: string
  certificates: Certificate[]
}

const stats = [
  { icon: 'pi-verified', num: '8', label: 'Certifications' },
  { icon: 'pi-graduation-cap', num: 'BS', label: 'Computer Science' },
  { icon: 'pi-star-fill', num: '8x', label: 'Dean\'s Lister' },
  { icon: 'pi-chart-line', num: '3+', label: 'Years Learning' }
]

const achievements = [
  { icon: 'pi-trophy', label: 'Dean\'s Lister' },
  { icon: 'pi-star', label: 'With Honors' },
  { icon: 'pi-code', label: 'Capstone Excellence' }
]

const categories: Category[] = [
  {
    name: 'Analytics & Data',
    description: 'Data analytics and machine learning certifications',
    icon: 'pi-chart-line',
    certificates: [
      {
        provider: 'Skillshop',
        providerIcon: 'pi-google',
        date: 'Sep 2025',
        title: 'Google Analytics Certification',
        description: 'Comprehensive training on Google Analytics 4, data analysis, reporting, and measuring digital marketing performance.',
        skills: ['GA4', 'Analytics', 'Data', 'Reporting'],
        href: 'https://skillshop.credential.net/0921ddeb-5458-4991-8ae3-b96ede439c1c#acc.Lqa9bVfJ',
        featured: true
      },
      {
        provider: 'Great Learning',
        providerIcon: 'pi-graduation-cap',
        date: 'Oct 2024',
        title: 'Machine Learning with Python',
        description: 'Fundamentals of machine learning algorithms, Python libraries, data preprocessing, and model training techniques.',
        skills: ['Python', 'ML', 'Scikit-learn', 'Data Science'],
        href: 'https://www.mygreatlearning.com/certificate/FGPAKEFJ'
      }
    ]
  },
  {
    name: 'Mobile Development',
    description: 'Cross-platform mobile app development',
    icon: 'pi-mobile',
    certificates: [
      {
        provider: 'Udemy',
        providerIcon: 'pi-play-circle',
        date: 'Jan 2025',
        title: 'Flutter & Dart - The Complete Guide [2024 Edition]',
        description: 'Comprehensive course on Flutter framework and Dart language for building beautiful, natively compiled mobile applications.',
        skills: ['Flutter', 'Dart', 'Mobile', 'Cross-Platform'],
        href: '/assets/Flutter Certificate.pdf',
        featured: true
      }
    ]
  },
  {
    name: 'Web Development',
    description: 'Full-stack web development technologies',
    icon: 'pi-code',
    certificates: [
      {
        provider: 'LinkedIn Learning',
        providerIcon: 'pi-linkedin',
        date: 'Jan 2026',
        title: 'Back-End Web Development with .NET',
        description: 'Comprehensive training on building robust back-end applications using .NET framework, C#, and modern web development practices.',
        skills: ['.NET', 'C#', 'Backend', 'API'],
        href: 'https://www.linkedin.com/learning/certificates/9331f173b1e66cecabc7c6f706da0a8c2efb2992f539001302ba42719b23221c?trk=share_certificate&lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_certifications_details%3BIO1fWH1AQSqw0X9SBL7xxw%3D%3D',
        featured: true
      },
      {
        provider: 'LinkedIn Learning',
        providerIcon: 'pi-linkedin',
        date: 'Jan 2026',
        title: 'React: Creating and Hosting a Full-Stack Site',
        description: 'Building and deploying full-stack applications with React, covering frontend development, backend integration, and hosting solutions.',
        skills: ['React', 'Full-Stack', 'JavaScript', 'Hosting'],
        href: 'https://www.linkedin.com/learning/certificates/f1994d12b573d292d0d417bf21225f8c1a218f02b6ae207f7a601dad7bc8c9f0?trk=share_certificate&lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_certifications_details%3BIO1fWH1AQSqw0X9SBL7xxw%3D%3D',
        featured: true
      }
    ]
  },
  {
    name: 'DevOps',
    description: 'Development operations and CI/CD practices',
    icon: 'pi-cog',
    certificates: [
      {
        provider: 'LinkedIn Learning',
        providerIcon: 'pi-linkedin',
        date: 'Oct 2024',
        title: 'DevOps Foundations',
        description: 'Core DevOps principles, practices, and culture including collaboration, automation, and continuous improvement.',
        skills: ['DevOps', 'Agile', 'Automation', 'Culture'],
        href: 'https://www.linkedin.com/learning/certificates/7464b37be53cdd35e93b7c0a760892fa6c9a86588cfee280311d7aed83cca51b?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_certifications_details%3BIO1fWH1AQSqw0X9SBL7xxw%3D%3D'
      },
      {
        provider: 'LinkedIn Learning',
        providerIcon: 'pi-linkedin',
        date: 'Oct 2024',
        title: 'DevOps Foundations: Infrastructure as Code',
        description: 'Infrastructure automation using code, configuration management, and provisioning tools for scalable deployments.',
        skills: ['IaC', 'Terraform', 'Ansible', 'Automation'],
        href: 'https://www.linkedin.com/learning/certificates/2faefe600b2132c00765c7b7fb52cb1bc36aba473e4df79b5d0b57fd70aea1f5?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_certifications_details%3BIO1fWH1AQSqw0X9SBL7xxw%3D%3D'
      },
      {
        provider: 'LinkedIn Learning',
        providerIcon: 'pi-linkedin',
        date: 'Oct 2024',
        title: 'DevOps Foundations: Continuous Delivery/Continuous Integration',
        description: 'CI/CD pipelines, automated testing, continuous deployment strategies, and delivery best practices.',
        skills: ['CI/CD', 'Jenkins', 'Pipelines', 'Testing'],
        href: 'https://www.linkedin.com/learning/certificates/3155a2f37f34e0ebeb6af6c702d502a740987e9a93df865b7693703bd5ab40e1?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_certifications_details%3BIO1fWH1AQSqw0X9SBL7xxw%3D%3D'
      }
    ]
  }
]

const highlights = [
  'Regular upskilling in emerging technologies',
  'Active participation in developer communities',
  'Hands-on project-based learning approach'
]

const learning = [
  { icon: 'pi-book', title: 'Currently Learning', text: 'Advanced TypeScript, System Design, AWS Services' },
  { icon: 'pi-bullseye', title: 'Next Goals', text: 'AWS Solutions Architect, Docker & Kubernetes' },
  { icon: 'pi-calendar', title: 'Average', text: '20+ hours weekly dedicated to learning' }
]
</script>

<template>
  <div>
    <PageHero
      eyebrow="Achievements"
      title="Certificates &"
      accent="Credentials"
      subtitle="A journey of continuous learning, professional development, and academic excellence"
    />

    <!-- Stats -->
    <section class="section section--alt" aria-label="Certificate statistics">
      <div class="container">
        <ul class="grid grid--4 plain">
          <li v-for="(s, i) in stats" :key="s.label" v-reveal :style="{ '--reveal-delay': `${i * 80}ms` }">
            <div class="card-surface lift stat">
              <span class="stat-icon"><i :class="['pi', s.icon]" aria-hidden="true" /></span>
              <div>
                <span class="stat-num">{{ s.num }}</span>
                <span class="stat-label muted">{{ s.label }}</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- Education -->
    <section class="section">
      <div class="container edu">
        <SectionHeading
          eyebrow="Education"
          title="Academic"
          accent="Foundation"
          subtitle="My formal education provided the strong foundation needed for my career in software development."
        />
        <div v-reveal class="card-surface degree">
          <span class="degree-badge"><i class="pi pi-graduation-cap" aria-hidden="true" /></span>
          <div class="stack">
            <div class="degree-header">
              <h3>Bachelor of Science in Computer Science</h3>
              <Tag value="2021 - 2025" severity="secondary" rounded />
            </div>
            <p class="muted school"><i class="pi pi-building" aria-hidden="true" /> University of Makati</p>
            <p class="muted">
              Completed a comprehensive 4-year program focusing on software development, database management,
              mobile app development, and web technologies. Graduated with honors as a consistent Dean's Lister
              with a focus on full-stack development and mobile applications.
            </p>
            <ul class="cluster plain">
              <li v-for="a in achievements" :key="a.label">
                <Tag severity="secondary" rounded>
                  <i :class="['pi', a.icon]" aria-hidden="true" /> {{ a.label }}
                </Tag>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Certificates by category -->
    <section class="section section--alt" aria-label="Certificates by category">
      <div class="container categories">
        <div v-for="cat in categories" :key="cat.name" class="category">
          <div v-reveal class="category-header">
            <span class="category-icon"><i :class="['pi', cat.icon]" aria-hidden="true" /></span>
            <div>
              <h2 class="category-title">{{ cat.name }}</h2>
              <p class="muted">{{ cat.description }}</p>
            </div>
          </div>
          <ul class="grid grid--2 plain">
            <li v-for="(c, i) in cat.certificates" :key="c.title" v-reveal :style="{ '--reveal-delay': `${i * 80}ms` }">
              <Card class="cert lift" :class="{ featured: c.featured }">
                <template #content>
                  <div class="cert-body">
                    <Tag :value="c.featured ? 'Featured' : 'Verified'" :class="c.featured ? 'tag-gold' : 'tag-plain'" rounded />
                    <div class="cert-meta">
                      <span class="provider"><i :class="['pi', c.providerIcon]" aria-hidden="true" /> {{ c.provider }}</span>
                      <span class="muted">{{ c.date }}</span>
                    </div>
                    <h3 class="cert-title">{{ c.title }}</h3>
                    <p class="muted">{{ c.description }}</p>
                    <ul class="cluster plain">
                      <li v-for="s in c.skills" :key="s"><Tag :value="s" severity="secondary" rounded /></li>
                    </ul>
                    <a :href="c.href" class="verify" target="_blank" rel="noopener" :aria-label="`View Certificate: ${c.title}`">
                      <i class="pi pi-external-link" aria-hidden="true" /> View Certificate
                    </a>
                  </div>
                </template>
              </Card>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Learning philosophy -->
    <section class="section">
      <div class="container">
        <div v-reveal class="card-surface philosophy">
          <div class="stack">
            <SectionHeading eyebrow="Philosophy" title="Commitment to" accent="Growth" />
            <p class="muted">
              In the ever-evolving landscape of technology, continuous learning is not just beneficial—it's essential.
              I believe in staying curious, embracing new challenges, and continuously expanding my skillset to deliver
              innovative solutions and stay at the forefront of web and mobile development.
            </p>
            <ul class="plain stack">
              <li v-for="h in highlights" :key="h" class="highlight">
                <i class="pi pi-check-circle" aria-hidden="true" />
                <span>{{ h }}</span>
              </li>
            </ul>
          </div>
          <ul class="plain stack">
            <li v-for="l in learning" :key="l.title" class="learn">
              <span class="stat-icon"><i :class="['pi', l.icon]" aria-hidden="true" /></span>
              <div>
                <h3 class="learn-title">{{ l.title }}</h3>
                <p class="muted">{{ l.text }}</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <CtaBanner
      title="Interested in My"
      accent="Qualifications?"
      text="Let's discuss how my skills and certifications can contribute to your project's success."
    >
      <Button as="NuxtLink" to="/contact" label="Get In Touch" icon="pi pi-send" />
      <Button
        as="a"
        href="/assets/RAMOS_ANNE LORRAINE F._CV.pdf"
        target="_blank"
        rel="noopener"
        label="Download Resume"
        icon="pi pi-download"
        severity="secondary"
        outlined
      />
    </CtaBanner>
  </div>
</template>

<style scoped>
.plain { list-style: none; padding: 0; margin: 0; }
.stat { display: flex; align-items: center; gap: var(--space-4); height: 100%; }
.stat-icon {
  flex: none; display: inline-grid; place-items: center; width: 3rem; height: 3rem; border-radius: 50%;
  background: var(--surface-2); color: var(--primary); font-size: var(--fs-lg);
}
.stat-num { display: block; font-family: var(--font-num); font-variant-numeric: lining-nums tabular-nums; letter-spacing: -0.02em; font-size: var(--fs-2xl); font-weight: 700; line-height: 1.1; color: var(--text); }
.stat-label { display: block; font-size: var(--fs-sm); }

.edu { display: grid; gap: var(--space-5); align-items: center; }
.degree { display: flex; flex-direction: column; gap: var(--space-4); }
.degree-badge {
  flex: none;
  display: inline-grid; place-items: center; width: 3.5rem; height: 3.5rem; border-radius: var(--radius-sm);
  background: var(--primary); color: var(--on-primary); font-size: var(--fs-xl);
}
.degree-header { display: flex; flex-wrap: wrap; gap: var(--space-3); align-items: center; justify-content: space-between; }
.degree-header h3 { margin: 0; }
.school { margin: 0; }
@media (min-width: 992px) {
  .edu { grid-template-columns: 5fr 7fr; gap: var(--space-7); }
  .edu :deep(.heading) { margin-bottom: 0; }
  .degree { flex-direction: row; }
}

.categories { display: grid; gap: var(--space-7); }
.category-header { display: flex; align-items: center; gap: var(--space-4); margin-bottom: var(--space-5); }
.category-header p { margin: 0; }
.category-icon {
  flex: none; display: inline-grid; place-items: center; width: 3rem; height: 3rem; border-radius: var(--radius-sm);
  background: var(--primary); color: var(--on-primary); font-size: var(--fs-lg);
}
.category-title { font-size: var(--fs-xl); margin: 0; }

.cert { height: 100%; border: 1px solid var(--border); background: var(--surface); color: var(--text); box-shadow: var(--shadow); }
.cert.featured { border-color: var(--accent-gold); }
.cert-body { display: flex; flex-direction: column; gap: var(--space-3); align-items: flex-start; }
.cert-body p { margin: 0; }
.cert-meta { display: flex; flex-wrap: wrap; justify-content: space-between; gap: var(--space-2); width: 100%; font-size: var(--fs-sm); }
.provider { font-weight: 600; color: var(--text); }
.cert-title { font-size: var(--fs-lg); margin: 0; }
.tag-gold { background: transparent; border: 1px solid var(--accent-gold); color: var(--accent-gold); }
.tag-plain { background: var(--surface-2); color: var(--primary-strong); }
.verify { font-weight: 600; margin-top: auto; }

.philosophy { display: grid; gap: var(--space-6); align-items: center; }
@media (min-width: 992px) { .philosophy { grid-template-columns: 1fr 1fr; gap: var(--space-7); } }
.highlight { display: flex; gap: var(--space-3); align-items: center; }
.highlight .pi { color: var(--primary); }
.learn { display: flex; gap: var(--space-4); align-items: center; }
.learn-title { font-size: var(--fs-lg); margin: 0 0 var(--space-1); }
.learn p { margin: 0; }
</style>
