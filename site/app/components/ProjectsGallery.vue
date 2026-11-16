<script setup lang="ts">
// Screenshot gallery in a modal Dialog. Dialog traps focus, closes on ESC / mask click and
// returns focus to the trigger button. Left/Right arrows change the image.
const props = defineProps<{
  visible: boolean
  name: string
  folder: string
  files: string[]
}>()
const emit = defineEmits<{ 'update:visible': [value: boolean] }>()

const active = ref(0)

const images = computed(() => props.files.map((file, i) => ({
  src: encodeURI(`/assets/${props.folder}/${file}`),
  alt: `${props.name} screen ${i + 1}: ${file.replace(/^\d+_/, '').replace(/\.[^.]+$/, '')}`
})))

const visibleModel = computed({
  get: () => props.visible,
  set: (v: boolean) => emit('update:visible', v)
})

watch(() => props.visible, (v) => { if (v) active.value = 0 })

const responsiveOptions = [
  { breakpoint: '768px', numVisible: 5 },
  { breakpoint: '480px', numVisible: 3 }
]

function step(delta: number) {
  const n = images.value.length
  active.value = (active.value + delta + n) % n
}

function onKeydown(e: KeyboardEvent) {
  // Let Galleria handle arrows itself while focus is inside the thumbnail strip.
  if ((e.target as HTMLElement | null)?.closest('.p-galleria-thumbnails')) return
  if (e.key === 'ArrowRight') { e.preventDefault(); step(1) }
  else if (e.key === 'ArrowLeft') { e.preventDefault(); step(-1) }
}
</script>

<template>
  <Dialog
    v-model:visible="visibleModel"
    modal
    dismissable-mask
    :header="`${name} screenshots`"
    :style="{ width: '60rem', maxWidth: '95vw' }"
    :breakpoints="{ '768px': '95vw' }"
    :pt="{ content: { onkeydown: onKeydown } }"
  >
    <Galleria
      v-model:active-index="active"
      :value="images"
      :num-visible="7"
      :responsive-options="responsiveOptions"
      circular
      show-item-navigators
      container-class="pg-galleria"
    >
      <template #item="{ item }">
        <img :src="item.src" :alt="item.alt" class="pg-main">
      </template>
      <template #thumbnail="{ item }">
        <img :src="item.src" :alt="item.alt" class="pg-thumb" width="48" height="96" loading="lazy">
      </template>
    </Galleria>
    <p class="pg-counter muted" aria-live="polite">{{ active + 1 }} / {{ images.length }}</p>
  </Dialog>
</template>

<style scoped>
.pg-main {
  display: block; margin-inline: auto; width: auto; max-width: 100%;
  max-height: 60vh; object-fit: contain;
}
.pg-thumb { display: block; width: 48px; height: 96px; object-fit: cover; border-radius: var(--radius-sm); margin-inline: auto; }
.pg-counter { text-align: center; margin: var(--space-3) 0 0; font-size: var(--fs-sm); }
:deep(.p-galleria) { border-color: var(--border); background: transparent; }
:deep(.p-galleria-thumbnail-item:not(.p-galleria-thumbnail-item-active)) { opacity: 0.6; }
:deep(.p-galleria-thumbnail-item-active) { opacity: 1; }
@media (max-width: 480px) {
  .pg-main { max-height: 50vh; }
}
</style>
