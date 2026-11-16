<script setup lang="ts">
const { mode, toggle } = useTheme()
const mounted = ref(false)
onMounted(() => { mounted.value = true })

// Render a stable state on the server/first paint to avoid a hydration mismatch.
const current = computed(() => (mounted.value ? mode.value : 'light'))
const icon = computed(() => (current.value === 'dark' ? 'pi pi-sun' : 'pi pi-moon'))
const label = computed(() => `Switch to ${current.value === 'dark' ? 'light' : 'dark'} mode`)
</script>

<template>
  <Button
    :icon="icon"
    :aria-label="label"
    :title="label"
    severity="secondary"
    text
    rounded
    @click="toggle"
  />
</template>
