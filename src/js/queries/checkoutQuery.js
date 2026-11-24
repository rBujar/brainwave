import { sanityClient } from "../sanity";

const query = `*[_type == "checkoutPage"][0] {
  heading,
  billing,
  payment,
  proceed,
  orderDetails
}`

export async function getCheckoutPage() {
  return await sanityClient.fetch(query)
}