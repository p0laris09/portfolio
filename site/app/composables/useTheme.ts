export type ThemeMode = 'light' | 'dark'
const KEY = 'theme'

/**
 * Two-state theme. First visit follows the OS preference; one click flips light/dark
 * and the choice is saved in localStorage. (The inline head script in nuxt.config.ts
 * applies the same rule before first paint to avoid a flash.)
 */
export function useTheme() {
  const mode = useState<ThemeMode>('theme-mode', () => 'light')

  function apply() {
    if (!import.meta.client) return
    const dark = mode.value === 'dark'
    document.documentElement.classList.toggle('app-dark', dark)
    document.documentElement.style.colorScheme = dark ? 'dark' : 'light'
  }

  function init() {
    let saved: string | null = null
    try { saved = localStorage.getItem(KEY) } catch { /* storage unavailable */ }
    mode.value = saved === 'light' || saved === 'dark'
      ? saved
      : (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
    apply()
  }

  function toggle() {
    mode.value = mode.value === 'dark' ? 'light' : 'dark'
    try { localStorage.setItem(KEY, mode.value) } catch { /* storage unavailable */ }
    apply()
  }

  return { mode, init, toggle }
}
