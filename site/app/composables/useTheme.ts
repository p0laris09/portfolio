export type ThemeMode = 'system' | 'light' | 'dark'
const KEY = 'theme'

/** system (default) follows prefers-color-scheme; light/dark override it and persist in localStorage. */
export function useTheme() {
  const mode = useState<ThemeMode>('theme-mode', () => 'system')
  const isDark = useState<boolean>('theme-is-dark', () => false)

  function apply() {
    if (!import.meta.client) return
    const dark = mode.value === 'dark' || (mode.value === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)
    isDark.value = dark
    document.documentElement.classList.toggle('app-dark', dark)
    document.documentElement.style.colorScheme = dark ? 'dark' : 'light'
  }

  function init() {
    try {
      const s = localStorage.getItem(KEY)
      mode.value = s === 'light' || s === 'dark' ? s : 'system'
    } catch { mode.value = 'system' }
    apply()
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => { if (mode.value === 'system') apply() })
  }

  function setMode(m: ThemeMode) {
    mode.value = m
    try {
      if (m === 'system') localStorage.removeItem(KEY)
      else localStorage.setItem(KEY, m)
    } catch { /* storage unavailable */ }
    apply()
  }

  function cycle() {
    setMode(mode.value === 'system' ? 'light' : mode.value === 'light' ? 'dark' : 'system')
  }

  return { mode, isDark, init, setMode, cycle }
}
