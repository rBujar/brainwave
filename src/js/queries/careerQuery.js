import { sanityClient } from "../sanity";

const query = `*[_type == "careerPage"][0] {
  hero,
  previewVideo{ "videoUrl": video.asset->url },
  benefits,
  openJobs
}`

export async function getCareerPage() {
  return await sanityClient.fetch(query)
}