import { sanityClient } from "../sanity";

const query = `{
  "product": *[_type == "product" && slug.current == $slug][0],
  "related": *[_type == "product" && slug.current != $slug] | order(_createdAt asc)[0...4] {
    name,
    "slug": slug.current,
    price,
    listPrice,
    rating,
    "image": images[0]
  }
}`

export async function getProduct(slug) {
  return await sanityClient.fetch(query, { slug })
}