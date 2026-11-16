import { PortfolioPreset } from './app/theme/preset'

// Runs before first paint so the correct theme class is on <html> before hydration (no flash).
const themeInit = `(function(){try{var s=localStorage.getItem('theme');var d=s==='dark'||((s!=='light')&&window.matchMedia('(prefers-color-scheme: dark)').matches);var r=document.documentElement;if(d)r.classList.add('app-dark');r.style.colorScheme=d?'dark':'light';}catch(e){}})();`

export default defineNuxtConfig({
  compatibilityDate: '2025-01-01',
  future: { compatibilityVersion: 4 },
  modules: ['@primevue/nuxt-module', '@nuxt/eslint'],
  css: ['primeicons/primeicons.css', '~/assets/css/main.css'],
  primevue: {
    // Tree-shaken: only the components listed here are registered/bundled.
    options: {
      ripple: false,
      theme: {
        preset: PortfolioPreset,
        options: {
          darkModeSelector: '.app-dark',
          cssLayer: false
        }
      }
    },
    components: {
      include: ['Button', 'Menubar', 'Card', 'Tag', 'Timeline', 'Drawer', 'Dialog', 'Galleria', 'Accordion', 'AccordionPanel', 'AccordionHeader', 'AccordionContent', 'InputText', 'Textarea', 'Message', 'Chip', 'Avatar', 'Divider', 'Image']
    }
  },
  app: {
    baseURL: process.env.NUXT_APP_BASE_URL || '/',
    head: {
      htmlAttrs: { lang: 'en' },
      meta: [{ name: 'viewport', content: 'width=device-width, initial-scale=1' }],
      link: [
        { rel: 'icon', type: 'image/png', href: '/images/logo.png' },
        { rel: 'preconnect', href: 'https://fonts.googleapis.com' },
        { rel: 'preconnect', href: 'https://fonts.gstatic.com', crossorigin: '' },
        { rel: 'stylesheet', href: 'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap' }
      ],
      script: [{ innerHTML: themeInit, tagPosition: 'head', tagPriority: 'critical' }]
    }
  },
  runtimeConfig: { public: { siteUrl: process.env.NUXT_PUBLIC_SITE_URL || '' } },
  nitro: { prerender: { crawlLinks: true, routes: ['/'] } },
  devtools: { enabled: false }
})
