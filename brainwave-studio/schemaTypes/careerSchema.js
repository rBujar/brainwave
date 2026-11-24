import {defineType, defineField} from 'sanity'

export const careerSchema = defineType({
  name: 'careerPage',
  title: 'Career Page',
  type: 'document',
  groups: [
    {name: 'hero', title: 'Hero', default: true},
    {name: 'previewVideo', title: 'Preview Video'},
    {name: 'benefits', title: 'Benefits'},
    {name: 'openJobs', title: 'Open Jobs'},
  ],
  fields: [
    // ---------- HERO ----------
    defineField({
      name: 'hero',
      title: 'Hero',
      type: 'object',
      group: 'hero',
      fields: [
        defineField({name: 'title', title: 'Title (h1)', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
      ],
    }),

    // ---------- PREVIEW VIDEO ----------
    defineField({
      name: 'previewVideo',
      title: 'Preview Video',
      type: 'object',
      group: 'previewVideo',
      fields: [
        defineField({
          name: 'video',
          title: 'Background Video (.webm)',
          type: 'file',
          options: {accept: 'video/webm'},
        }),
      ],
    }),

    // ---------- BENEFITS ----------
    defineField({
      name: 'benefits',
      title: 'Benefits',
      type: 'object',
      group: 'benefits',
      fields: [
        defineField({name: 'title', title: 'Title (h2)', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'items',
          title: 'Benefit Cards (first 3 = row 1, next 3 = row 2, max 6)',
          type: 'array',
          validation: (Rule) => Rule.max(6),
          of: [
            {
              type: 'object',
              name: 'benefit',
              fields: [
                defineField({name: 'icon', title: 'Icon Class (e.g. icon-bubbles)', type: 'string'}),
                defineField({name: 'color', title: 'Icon Color (hex, e.g. #416FF4)', type: 'string'}),
                defineField({name: 'title', title: 'Title (h5)', type: 'string'}),
                defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
              ],
              preview: {select: {title: 'title', subtitle: 'icon'}},
            },
          ],
        }),
      ],
    }),

    // ---------- OPEN JOBS ----------
    defineField({
      name: 'openJobs',
      title: 'Open Jobs',
      type: 'object',
      group: 'openJobs',
      fields: [
        defineField({name: 'title', title: 'Title (h2)', type: 'string'}),
        defineField({
          name: 'items',
          title: 'Jobs',
          type: 'array',
          of: [
            {
              type: 'object',
              name: 'job',
              fields: [
                defineField({name: 'title', title: 'Job Title', type: 'string'}),
                defineField({name: 'info', title: 'Info (e.g. Full Time, Remote)', type: 'string'}),
                defineField({name: 'link', title: 'Link URL', type: 'string'}),
              ],
              preview: {select: {title: 'title', subtitle: 'info'}},
            },
          ],
        }),
      ],
    }),
  ],
  preview: {prepare: () => ({title: 'Career Page'})},
})