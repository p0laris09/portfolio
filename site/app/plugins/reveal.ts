// v-reveal: fade/slide in once when scrolled into view. No-op on the server and with reduced motion.
export default defineNuxtPlugin((nuxtApp) => {
  let io: IntersectionObserver | null = null
  nuxtApp.vueApp.directive('reveal', {
    getSSRProps: () => ({}),
    mounted(el: HTMLElement, binding) {
      if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return
      el.classList.add('reveal')
      if (binding.value) el.style.setProperty('--reveal-delay', `${binding.value}ms`)
      io ||= new IntersectionObserver((entries) => {
        for (const e of entries) {
          if (e.isIntersecting) {
            (e.target as HTMLElement).classList.add('reveal-in')
            io!.unobserve(e.target)
          }
        }
      }, { threshold: 0.12 })
      io.observe(el)
    }
  })
})
