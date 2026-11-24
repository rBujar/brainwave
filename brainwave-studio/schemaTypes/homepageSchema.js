// schemaTypes/homepage.js
import {defineType, defineField} from 'sanity'

export const homepageSchema = defineType({
  name: 'homepage',
  title: 'Homepage',
  type: 'document',
  groups: [
    {name: 'hero', title: 'Hero', default: true},
    {name: 'preview', title: 'Preview'},
    {name: 'services', title: 'Services'},
    {name: 'reasons', title: 'Reasons'},
    {name: 'previewVideo', title: 'Preview Video'},
    {name: 'reviews', title: 'Reviews'},
  ],
  fields: [
    // ---------- HERO ----------
    defineField({
      name: 'hero',
      title: 'Hero',
      type: 'object',
      group: 'hero',
      fields: [
        defineField({name: 'title', title: 'Title (h2)', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({name: 'buttonText', title: 'Button Text', type: 'string', initialValue: 'get a free quote'}),
        defineField({name: 'linkText', title: 'Watch Link Text', type: 'string', initialValue: 'watch how we can help'}),
        defineField({name: 'linkUrl', title: 'Watch Link URL', type: 'string', initialValue: '#video'}),
        defineField({name: 'image', title: 'Hero Image', type: 'image', options: {hotspot: true}}),
      ],
    }),

    // ---------- PREVIEW ----------
    defineField({
      name: 'preview',
      title: 'Preview',
      type: 'object',
      group: 'preview',
      fields: [
        defineField({name: 'title', title: 'Title (h4)', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({name: 'buttonText', title: 'Button Text', type: 'string', initialValue: 'learn how we work'}),
        defineField({name: 'buttonLink', title: 'Button Link', type: 'string', initialValue: '#'}),
        defineField({name: 'image', title: 'Preview Image', type: 'image', options: {hotspot: true}}),
        defineField({
          name: 'stats',
          title: 'Stats',
          type: 'array',
          of: [
            {
              type: 'object',
              name: 'stat',
              fields: [
                defineField({name: 'value', title: 'Value (h4)', type: 'string'}),
                defineField({name: 'description', title: 'Description', type: 'text', rows: 2}),
              ],
              preview: {select: {title: 'value', subtitle: 'description'}},
            },
          ],
        }),
      ],
    }),

    // ---------- SERVICES ----------
    defineField({
      name: 'services',
      title: 'Services',
      type: 'object',
      group: 'services',
      fields: [
        defineField({name: 'title', title: 'Title (h3)', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'items',
          title: 'Service Cards',
          type: 'array',
          of: [
            {
              type: 'object',
              name: 'service',
              fields: [
                defineField({name: 'title', title: 'Title (h5)', type: 'string'}),
                defineField({name: 'image', title: 'Image', type: 'image', options: {hotspot: true}}),
                defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
                defineField({name: 'linkText', title: 'Link Text', type: 'string', initialValue: 'Learn more'}),
                defineField({name: 'linkUrl', title: 'Link URL', type: 'string', initialValue: '#'}),
              ],
              preview: {select: {title: 'title', media: 'image'}},
            },
          ],
        }),
      ],
    }),

    // ---------- REASONS ----------
    defineField({
      name: 'reasons',
      title: 'Reasons',
      type: 'object',
      group: 'reasons',
      fields: [
        defineField({name: 'image', title: 'Image', type: 'image', options: {hotspot: true}}),
        defineField({name: 'title', title: 'Title (h3)', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'features',
          title: 'Features',
          type: 'array',
          of: [{type: 'string'}],
        }),
      ],
    }),

    // ---------- PREVIEW VIDEO ----------
    defineField({
      name: 'previewVideo',
      title: 'Preview Video',
      type: 'object',
      group: 'previewVideo',
      fields: [
        defineField({name: 'title', title: 'Title (h3)', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'video',
          title: 'Background Video (.webm)',
          type: 'file',
          options: {accept: 'video/webm'},
        }),
      ],
    }),

    // ---------- REVIEWS ----------
    defineField({
      name: 'reviews',
      title: 'Reviews',
      type: 'object',
      group: 'reviews',
      fields: [
        defineField({name: 'title', title: 'Title (h3)', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'items',
          title: 'Review Cards',
          type: 'array',
          of: [
            {
              type: 'object',
              name: 'review',
              fields: [
                defineField({name: 'image', title: 'Image', type: 'image', options: {hotspot: true}}),
                defineField({name: 'text', title: 'Review Text', type: 'text', rows: 3}),
                defineField({name: 'name', title: 'Name', type: 'string'}),
                defineField({name: 'role', title: 'Role', type: 'string'}),
              ],
              preview: {select: {title: 'name', subtitle: 'role', media: 'image'}},
            },
          ],
        }),
      ],
    }),
  ],
  preview: {prepare: () => ({title: 'Homepage'})},
})