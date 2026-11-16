export function usePageSeo(title: string, description: string, image = '/images/girl-in-phone.png') {
  const { public: { siteUrl } } = useRuntimeConfig()
  const route = useRoute()
  const full = title.includes('Anne Lorraine') ? title : `${title} | Anne Lorraine Ramos`
  useSeoMeta({
    title: full,
    description,
    ogTitle: full,
    ogDescription: description,
    ogType: 'website',
    ogSiteName: 'Anne Lorraine Ramos',
    ogImage: siteUrl ? `${siteUrl}${image}` : image,
    ogUrl: siteUrl ? `${siteUrl}${route.path}` : undefined,
    twitterCard: 'summary_large_image'
  })
}
