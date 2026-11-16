<script setup lang="ts">
const { mode, cycle } = useTheme()
const mounted = ref(false)
onMounted(() => { mounted.value = true })

const icons = { system: 'pi pi-desktop', light: 'pi pi-sun', dark: 'pi pi-moon' } as const
const next = { system: 'light', light: 'dark', dark: 'system' } as const
// Render a stable label on the server/first paint to avoid hydration mismatch.
const current = computed(() => (mounted.value ? mode.value : 'system'))
const label = computed(() => `Theme: ${current.value}. Switch to ${next[current.value]}`)
</script>

<template>
  <Button
    :icon="icons[current]"
    :aria-label="label"
    :title="label"
    severity="secondary"
    text
    rounded
    @click="cycle"
  />
  <span class="sr-only" aria-live="polite">{{ mounted ? `Theme set to ${mode}` : '' }}</span>
</template>
