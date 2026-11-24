
import { createClient } from '@sanity/client';
import { createImageUrlBuilder } from '@sanity/image-url';

export const client = createClient({
  projectId: '7io853lb',
  dataset: 'production',
  useCdn: true,
  apiVersion: '2026-11-21',
});

const builder = createImageUrlBuilder(client);

export function urlFor(source) {
  return builder.image(source);
}
