import { sanityClient } from "../sanity";

const query = `*[_type == "productPage"][0] {
  related
}`

export async function getProductPage() {
  return await sanityClient.fetch(query)
}