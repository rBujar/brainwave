import { sanityClient } from "../sanity";

const query = `*[_type == "contactPage"][0] {
  heading,
  info,
  form
}`

export async function getContactPage() {
  return await sanityClient.fetch(query)
}