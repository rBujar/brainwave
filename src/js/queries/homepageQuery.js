import { sanityClient } from "../sanity";

const query = `*[_type == "homepage"][0] {
  hero,
  preview,
  services,
  reasons,
  previewVideo{ title, description, "videoUrl": video.asset->url },
  reviews
}`

export async function getHomepage() {
  return await sanityClient.fetch(query)
}