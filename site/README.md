# Portfolio (Nuxt 3 + PrimeVue)

Nuxt 3, Vue 3 `<script setup>`, PrimeVue 4 (Aura + custom green preset, primary `#7aa374`).

```bash
cd site
npm install
npm run dev        # http://localhost:3000
npm run lint
npm run generate   # static site -> .output/public
```

- Theme: `.app-dark` on `<html>`; system default, navbar toggle (system -> light -> dark), persisted in `localStorage['theme']`; inline head script prevents a flash.
- Tokens: `app/assets/css/main.css`. Palette/preset: `app/theme/preset.ts`.
- Demo apps (`/projects/*`, PHP) are not part of this build: deploy `.output/public` in the same web root as the repo's `projects/` folder (or update the links).
- Optional env: `NUXT_PUBLIC_SITE_URL` (absolute og:image/og:url), `NUXT_APP_BASE_URL`.
