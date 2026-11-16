<script setup lang="ts">
const year = new Date().getFullYear()
const nav = [
  { label: 'Home', to: '/' }, { label: 'About', to: '/about' }, { label: 'Experience', to: '/experience' },
  { label: 'Projects', to: '/projects' }, { label: 'Certificates', to: '/certificates' }, { label: 'Contact', to: '/contact' }
]
</script>

<template>
  <footer class="footer">
    <div class="container footer-inner">
      <p class="copy">&copy; {{ year }} Anne Lorraine Ramos. All rights reserved.</p>
      <nav aria-label="Footer" class="cluster">
        <NuxtLink v-for="l in nav" :key="l.to" :to="l.to">{{ l.label }}</NuxtLink>
      </nav>
      <div class="cluster">
        <a href="https://github.com/p0laris09" target="_blank" rel="noopener" aria-label="GitHub"><i class="pi pi-github" aria-hidden="true" /></a>
        <a href="https://www.linkedin.com/in/anne-lorraine-ramos-596b5b330/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="pi pi-linkedin" aria-hidden="true" /></a>
        <a href="mailto:annelorraineramos@gmail.com" aria-label="Email"><i class="pi pi-envelope" aria-hidden="true" /></a>
      </div>
    </div>
  </footer>
</template>

<style scoped>
.footer { border-top: 1px solid var(--border); background: var(--surface-2); padding-block: var(--space-6); }
.footer-inner { display: flex; flex-direction: column; gap: var(--space-4); align-items: center; text-align: center; }
.copy { margin: 0; color: var(--text-muted); }
@media (min-width: 992px) { .footer-inner { flex-direction: row; justify-content: space-between; text-align: left; } }
</style>
