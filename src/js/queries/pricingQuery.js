import { sanityClient } from "../sanity";

const query = `*[_type == "pricingPage"][0] {
  pricing,
  questions
}`

export async function getPricingPage() {
  return await sanityClient.fetch(query)
}