// Single source of truth for numbers and skills shown across pages.
// Edit here and every page stays consistent.

export const YEARS_EXPERIENCE = 2
export const PROJECTS_DONE = 10
export const CERTIFICATIONS = 8

export const heroRoles = ['Full Stack Developer', 'Mobile Developer', 'Cloud & DevOps Builder', 'AI Solutions Developer']

const dev = 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons'
const logo = (slug: string, variant = 'original') => `${dev}/${slug}/${slug}-${variant}.svg`

export interface TechItem {
  name: string
  /** Remote brand logo. When absent, `icon` (PrimeIcon) is shown instead. */
  logo?: string
  icon?: string
}

export interface TechGroup {
  icon: string
  title: string
  blurb: string
  items: TechItem[]
}

export const techGroups: TechGroup[] = [
  {
    icon: 'pi-palette',
    title: 'Frontend',
    blurb: 'Responsive, accessible interfaces',
    items: [
      { name: 'HTML5', logo: logo('html5') },
      { name: 'CSS3', logo: logo('css3') },
      { name: 'JavaScript', logo: logo('javascript') },
      { name: 'Vue.js', logo: logo('vuejs') },
      { name: 'React', logo: logo('react') },
      { name: 'Tailwind', logo: logo('tailwindcss') },
      { name: 'Bootstrap', logo: logo('bootstrap') }
    ]
  },
  {
    icon: 'pi-server',
    title: 'Backend & APIs',
    blurb: 'Secure services and no-code/low-code backends',
    items: [
      { name: 'PHP', logo: logo('php') },
      { name: 'Laravel', logo: logo('laravel') },
      { name: 'Node.js', logo: logo('nodejs') },
      { name: 'Python', logo: logo('python') },
      { name: 'Xano', icon: 'pi-sitemap' },
      { name: 'REST APIs', icon: 'pi-arrows-h' }
    ]
  },
  {
    icon: 'pi-mobile',
    title: 'Mobile',
    blurb: 'Cross-platform apps',
    items: [
      { name: 'Flutter', logo: logo('flutter') },
      { name: 'Dart', logo: logo('dart') },
      { name: 'React Native', logo: logo('react') },
      { name: 'Android Studio', logo: logo('androidstudio') }
    ]
  },
  {
    icon: 'pi-database',
    title: 'Databases',
    blurb: 'Relational and document stores',
    items: [
      { name: 'MySQL', logo: logo('mysql') },
      { name: 'PostgreSQL', logo: logo('postgresql') },
      { name: 'MongoDB', logo: logo('mongodb') },
      { name: 'Firebase', logo: logo('firebase', 'plain') }
    ]
  },
  {
    icon: 'pi-cloud',
    title: 'Cloud & DevOps',
    blurb: 'Containerised builds and deployments',
    items: [
      { name: 'Docker', logo: logo('docker') },
      { name: 'AWS', logo: logo('amazonwebservices', 'plain-wordmark') },
      { name: 'DigitalOcean', logo: logo('digitalocean') },
      { name: 'Git', logo: logo('git') },
      { name: 'GitHub', logo: logo('github') }
    ]
  },
  {
    icon: 'pi-sparkles',
    title: 'AI & LLMs',
    blurb: 'Self-hosted models and AI features',
    items: [
      { name: 'Ollama', icon: 'pi-microchip-ai' },
      { name: 'Mistral', icon: 'pi-sparkles' },
      { name: 'Prompt Engineering', icon: 'pi-pen-to-square' },
      { name: 'RAG', icon: 'pi-search' }
    ]
  }
]

export const technologyCount = new Set(techGroups.flatMap(g => g.items.map(i => i.name))).size
