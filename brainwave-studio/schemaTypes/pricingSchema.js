import {defineType, defineField} from 'sanity'

export const pricingSchema = defineType({
  name: 'pricingPage',
  title: 'Pricing Page',
  type: 'document',
  groups: [
    {name: 'pricing', title: 'Pricing', default: true},
    {name: 'questions', title: 'Questions'},
  ],
  fields: [
    // ---------- PRICING ----------
    defineField({
      name: 'pricing',
      title: 'Pricing',
      type: 'object',
      group: 'pricing',
      fields: [
        defineField({name: 'title', title: 'Title (h1)', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'plans',
          title: 'Plans (cards are filled in order, max 3)',
          type: 'array',
          validation: (Rule) => Rule.max(3),
          of: [
            {
              type: 'object',
              name: 'plan',
              fields: [
                defineField({name: 'name', title: 'Plan Name', type: 'string'}),
                defineField({name: 'price', title: 'Price (leave empty for Enterprise)', type: 'string'}),
                defineField({name: 'period', title: 'Period', type: 'string', initialValue: '/ mo'}),
                defineField({name: 'description', title: 'Description (used when there is no price)', type: 'text', rows: 2}),
                defineField({name: 'features', title: 'Features', type: 'array', of: [{type: 'string'}]}),
                defineField({name: 'buttonText', title: 'Button Text', type: 'string'}),
              ],
              preview: {select: {title: 'name', subtitle: 'price'}},
            },
          ],
        }),
      ],
    }),

    // ---------- QUESTIONS ----------
    defineField({
      name: 'questions',
      title: 'Questions',
      type: 'object',
      group: 'questions',
      fields: [
        defineField({name: 'title', title: 'Title (h2)', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'items',
          title: 'FAQ Items',
          type: 'array',
          of: [
            {
              type: 'object',
              name: 'faq',
              fields: [
                defineField({name: 'question', title: 'Question', type: 'string'}),
                defineField({name: 'answer', title: 'Answer', type: 'text', rows: 4}),
              ],
              preview: {select: {title: 'question'}},
            },
          ],
        }),
        defineField({name: 'linkQuestion', title: 'Link Question Text', type: 'string', initialValue: "Haven't got your answer?"}),
        defineField({name: 'linkText', title: 'Link Text', type: 'string', initialValue: 'Contact our support now'}),
        defineField({name: 'linkUrl', title: 'Link URL', type: 'string', initialValue: './contact.php'}),
      ],
    }),
  ],
  preview: {prepare: () => ({title: 'Pricing Page'})},
})