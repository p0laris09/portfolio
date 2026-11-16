import { definePreset } from '@primeuix/themes'
import Aura from '@primeuix/themes/aura'

/**
 * Brand green: #7aa374 (= primary.500), full 50–950 scale.
 * WCAG AA notes (measured contrast ratios):
 *  - Light theme uses 700 (#52714f) for text/fills: 5.16:1 on #f6f9f4, white-on-700 = 5.48:1.
 *    500 on white (2.87:1) and 600 on white (3.91:1) FAIL, so they are never used for text in light mode.
 *  - Dark theme uses 400 (#97b793) for text: 8.08:1 on #0f1a12; buttons use 500 with dark text: 6.22:1.
 */
export const primary = {
  50: '#f4f8f4', 100: '#e7eee6', 200: '#d2e0d0', 300: '#b6ccb3', 400: '#97b793',
  500: '#7aa374', 600: '#668a62', 700: '#52714f', 800: '#3e583d', 900: '#2c422d', 950: '#1c2e1e'
}

const surface = {
  0: '#ffffff', 50: '#f6f9f4', 100: '#eaf0e7', 200: '#d6e0d1', 300: '#b9c7b3', 400: '#8a9c86',
  500: '#66786a', 600: '#4a5d4f', 700: '#34453a', 800: '#1f2f24', 900: '#16231a', 950: '#0f1a12'
}

export const PortfolioPreset = definePreset(Aura, {
  semantic: {
    primary,
    colorScheme: {
      light: {
        surface,
        primary: { color: '{primary.700}', contrastColor: '#ffffff', hoverColor: '{primary.800}', activeColor: '{primary.900}' },
        highlight: { background: '{primary.700}', focusBackground: '{primary.800}', color: '#ffffff', focusColor: '#ffffff' }
      },
      dark: {
        surface,
        primary: { color: '{primary.500}', contrastColor: '{surface.950}', hoverColor: '{primary.400}', activeColor: '{primary.300}' },
        highlight: { background: 'color-mix(in srgb, {primary.400}, transparent 84%)', focusBackground: 'color-mix(in srgb, {primary.400}, transparent 76%)', color: 'rgba(255,255,255,.87)', focusColor: 'rgba(255,255,255,.87)' }
      }
    }
  }
})
