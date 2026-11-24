import {defineType, defineField} from 'sanity'

// one form field = a label + a placeholder
const formField = (name, title) =>
  defineField({
    name,
    title,
    type: 'object',
    fields: [
      defineField({name: 'label', title: 'Label', type: 'string'}),
      defineField({name: 'placeholder', title: 'Placeholder', type: 'string'}),
    ],
  })

export const contactSchema = defineType({
  name: 'contactPage',
  title: 'Contact Page',
  type: 'document',
  groups: [
    {name: 'heading', title: 'Heading', default: true},
    {name: 'info', title: 'Contact Info'},
    {name: 'form', title: 'Form'},
  ],
  fields: [
    // ---------- HEADING ----------
    defineField({
      name: 'heading',
      title: 'Heading',
      type: 'object',
      group: 'heading',
      fields: [
        defineField({name: 'title', title: 'Title (h1)', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
      ],
    }),

    // ---------- CONTACT INFO CARDS ----------
    defineField({
      name: 'info',
      title: 'Contact Info',
      type: 'object',
      group: 'info',
      fields: [
        defineField({
          name: 'items',
          title: 'Cards',
          type: 'array',
          of: [
            {
              type: 'object',
              name: 'infoCard',
              fields: [
                defineField({name: 'icon', title: 'Icon Class (e.g. icon-phone)', type: 'string'}),
                defineField({name: 'title', title: 'Title', type: 'string'}),
                defineField({
                  name: 'links',
                  title: 'Links',
                  type: 'array',
                  of: [
                    {
                      type: 'object',
                      name: 'infoLink',
                      fields: [
                        defineField({name: 'text', title: 'Text', type: 'string'}),
                        defineField({name: 'url', title: 'URL (e.g. tel:+1234, mailto:a@b.com)', type: 'string'}),
                      ],
                      preview: {select: {title: 'text', subtitle: 'url'}},
                    },
                  ],
                }),
              ],
              preview: {select: {title: 'title', subtitle: 'icon'}},
            },
          ],
        }),
      ],
    }),

    // ---------- FORM ----------
    defineField({
      name: 'form',
      title: 'Form',
      type: 'object',
      group: 'form',
      fields: [
        formField('name', 'Name Field'),
        formField('email', 'Email Field'),
        formField('phone', 'Phone Field'),
        formField('subject', 'Subject Field'),
        formField('message', 'Message Field'),
        defineField({name: 'buttonText', title: 'Button Text', type: 'string', initialValue: 'Send'}),
      ],
    }),
  ],
  preview: {prepare: () => ({title: 'Contact Page'})},
})