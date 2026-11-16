<script setup lang="ts">
// Inner-page hero. The default slot may hold action buttons.
defineProps<{ title: string, accent?: string, eyebrow?: string, subtitle?: string }>()
</script>

<template>
  <section class="page-hero">
    <div class="container">
      <SectionHeading as="h1" :title="title" :accent="accent" :eyebrow="eyebrow" :subtitle="subtitle" />
      <div v-if="$slots.default" class="cluster"><slot /></div>
    </div>
  </section>
</template>

<style scoped>
.page-hero {
  padding-block: var(--space-8) var(--space-7);
  background: radial-gradient(ellipse at 85% 0%, color-mix(in srgb, var(--primary) 18%, transparent), transparent 55%), var(--bg);
  border-bottom: 1px solid var(--border);
}
.page-hero :deep(h1) { font-size: var(--fs-4xl); }
</style>
