<script setup lang="ts">
// Usage: <SectionHeading eyebrow="About" title="Building the Future," accent="One Line at a Time" subtitle="..." />
defineProps<{ title: string, accent?: string, eyebrow?: string, subtitle?: string, as?: 'h1' | 'h2', center?: boolean }>()
</script>

<template>
  <div v-reveal class="heading" :class="{ center }">
    <Tag v-if="eyebrow" :value="eyebrow" severity="secondary" rounded class="eyebrow" />
    <component :is="as || 'h2'">{{ title }} <span v-if="accent" class="gradient-text">{{ accent }}</span></component>
    <p v-if="subtitle" class="muted lead">{{ subtitle }}</p>
  </div>
</template>

<style scoped>
.heading { margin-bottom: var(--space-6); max-width: 46rem; }
.heading.center { margin-inline: auto; text-align: center; }
.eyebrow { margin-bottom: var(--space-3); }
.lead { font-size: var(--fs-lg); }
</style>
