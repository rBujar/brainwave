import {defineType, defineField} from 'sanity'

export const productScheme = defineType({
  name: 'productPage',
  title: 'Product Page',
  type: 'document',
  groups: [{name: 'related', title: 'Related', default: true}],
  fields: [
    defineField({
      name: 'related',
      title: 'Related',
      type: 'object',
      group: 'related',
      fields: [
        defineField({name: 'title', title: 'Title (h3)', type: 'string'}),
        defineField({
          name: 'items',
          title: 'Products',
          type: 'array',
          of: [
            {
              type: 'object',
              name: 'product',
              fields: [
                defineField({name: 'image', title: 'Image', type: 'image', options: {hotspot: true}}),
                defineField({name: 'name', title: 'Product Name', type: 'string'}),
                defineField({name: 'price', title: 'Price (e.g. $120)', type: 'string'}),
                defineField({name: 'oldPrice', title: 'Old Price (e.g. $350)', type: 'string'}),
                defineField({
                  name: 'rating',
                  title: 'Rating (0 to 5, halves allowed, e.g. 4.5)',
                  type: 'number',
                  validation: (Rule) => Rule.min(0).max(5),
                }),
                defineField({name: 'link', title: 'Link URL (e.g. ./shoe.php)', type: 'string'}),
              ],
              preview: {select: {title: 'name', subtitle: 'price', media: 'image'}},
            },
          ],
        }),
      ],
    }),
  ],
  preview: {prepare: () => ({title: 'Product Page'})},
})