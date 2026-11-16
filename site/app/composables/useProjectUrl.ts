/**
 * The demo apps (Ravel, Hotel, Quiz Me, AK, Mellow) are PHP/static sites that live in the
 * repo's top-level `projects/` folder, not inside this Nuxt app.
 *  - dev:  nuxt.config.ts proxies /projects to XAMPP (Apache must be running).
 *  - prod: set NUXT_PUBLIC_PROJECTS_URL to wherever those apps are hosted,
 *          e.g. https://demo.example.com  (no trailing slash).
 */
export function useProjectUrl() {
  const base = String(useRuntimeConfig().public.projectsUrl || '').replace(/\/$/, '')
  return (path?: string) => (path && path.startsWith('/projects/') ? `${base}${path}` : path)
}
