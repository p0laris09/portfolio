<script setup lang="ts">
const route = useRoute()
const links = [
  { label: 'Home', to: '/' },
  { label: 'About', to: '/about' },
  { label: 'Experience', to: '/experience' },
  { label: 'Projects', to: '/projects' },
  { label: 'Certificates', to: '/certificates' },
  { label: 'Contact', to: '/contact' }
]
const items = links.map(l => ({ label: l.label, route: l.to }))
const resume = '/assets/RAMOS_ANNE LORRAINE F._CV.pdf'
const isActive = (to: string) => (to === '/' ? route.path === '/' : route.path.startsWith(to))
</script>

<template>
  <header class="site-header">
    <Menubar :model="items" class="nav" aria-label="Primary">
      <template #start>
        <NuxtLink to="/" class="brand" aria-label="Anne Lorraine Ramos, home">A<span>.</span></NuxtLink>
      </template>
      <template #item="{ item, props }">
        <NuxtLink
          v-if="item.route"
          :to="item.route"
          v-bind="props.action"
          class="nav-link"
          :aria-current="isActive(item.route) ? 'page' : undefined"
          :class="{ active: isActive(item.route) }"
        >
          {{ item.label }}
        </NuxtLink>
      </template>
      <template #end>
        <div class="cluster end">
          <ThemeToggle />
          <Button as="a" :href="resume" target="_blank" rel="noopener" icon="pi pi-download" label="Resume" size="small" />
        </div>
      </template>
    </Menubar>
  </header>
</template>

<style scoped>
.site-header { position: sticky; top: 0; z-index: 1000; }
.nav {
  min-height: var(--header-h);
  border: 0; border-bottom: 1px solid var(--border);
  background: color-mix(in srgb, var(--bg) 88%, transparent);
  backdrop-filter: blur(12px);
  padding-inline: max(var(--space-4), calc((100vw - var(--container)) / 2));
}
.brand { font-family: var(--font-serif); font-size: 1.75rem; font-weight: 700; color: var(--text); text-decoration: none; margin-right: var(--space-4); }
.brand span { color: var(--primary); }
.nav-link { display: flex; align-items: center; padding: var(--space-2) var(--space-3); color: var(--text); text-decoration: none; border-radius: var(--radius-sm); font-weight: 500; }
.nav-link:hover { color: var(--primary); }
.nav-link.active { color: var(--primary); font-weight: 700; text-decoration: underline; text-underline-offset: 6px; text-decoration-thickness: 2px; }
.end { margin-left: var(--space-3); flex-wrap: nowrap; }
</style>
