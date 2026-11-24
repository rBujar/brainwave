import { createClient } from "@sanity/client";

export const sanityClient = createClient ({
    projectId: '7io853lb',
    dataset: 'production',
    useCdn: true,
    apiVersion: '2026-11-15'
})
