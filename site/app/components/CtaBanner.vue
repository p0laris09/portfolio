<script setup lang="ts">
// Closing call-to-action. Put buttons in the default slot; `text` is the supporting paragraph.
defineProps<{ title: string, accent?: string, text?: string }>()
</script>

<template>
  <section class="section cta">
    <div class="container">
      <div v-reveal class="cta-box">
        <h2>{{ title }} <span v-if="accent" class="gradient-text">{{ accent }}</span></h2>
        <p v-if="text" class="muted">{{ text }}</p>
        <div class="cluster center"><slot /></div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.cta-box {
  text-align: center; padding: var(--space-7) var(--space-5); border-radius: var(--radius);
  background: var(--surface); border: 1px solid var(--border); box-shadow: var(--shadow);
}
.center { justify-content: center; }
.cta-box p { max-width: 40rem; margin-inline: auto; margin-bottom: var(--space-5); }
</style>
