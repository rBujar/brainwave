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

export const checkoutSchema = defineType({
  name: 'checkoutPage',
  title: 'Checkout Page',
  type: 'document',
  groups: [
    {name: 'heading', title: 'Heading', default: true},
    {name: 'billing', title: 'Billing'},
    {name: 'payment', title: 'Payment'},
    {name: 'proceed', title: 'Terms & Button'},
    {name: 'orderDetails', title: 'Order Details'},
  ],
  fields: [
    // ---------- HEADING ----------
    defineField({
      name: 'heading',
      title: 'Heading',
      type: 'object',
      group: 'heading',
      fields: [defineField({name: 'title', title: 'Title (h1)', type: 'string'})],
    }),

    // ---------- BILLING ----------
    defineField({
      name: 'billing',
      title: 'Billing',
      type: 'object',
      group: 'billing',
      fields: [
        defineField({name: 'title', title: 'Title (h5)', type: 'string'}),
        formField('name', 'Name Field'),
        formField('email', 'Email Field'),
        defineField({
          name: 'country',
          title: 'Country Field',
          type: 'object',
          fields: [
            defineField({name: 'label', title: 'Label', type: 'string'}),
            defineField({name: 'placeholder', title: 'First Option Text (e.g. select country)', type: 'string'}),
            defineField({
              name: 'options',
              title: 'Countries',
              type: 'array',
              of: [
                {
                  type: 'object',
                  name: 'country',
                  fields: [
                    defineField({name: 'name', title: 'Name', type: 'string'}),
                    defineField({name: 'code', title: 'Code (e.g. US, XK)', type: 'string'}),
                  ],
                  preview: {select: {title: 'name', subtitle: 'code'}},
                },
              ],
            }),
          ],
        }),
        formField('city', 'City Field'),
        formField('zip', 'Zip Field'),
      ],
    }),

    // ---------- PAYMENT ----------
    defineField({
      name: 'payment',
      title: 'Payment',
      type: 'object',
      group: 'payment',
      fields: [
        defineField({name: 'title', title: 'Title (h5)', type: 'string'}),
        defineField({name: 'creditCardLabel', title: 'Credit Card Radio Label', type: 'string'}),
        formField('cardNumber', 'Card Number Field'),
        formField('expDate', 'Expire Date Field'),
        formField('securityCode', 'Security Code Field'),
        defineField({name: 'paypalLabel', title: 'PayPal Radio Label', type: 'string'}),
      ],
    }),

    // ---------- TERMS & BUTTON ----------
    defineField({
      name: 'proceed',
      title: 'Terms & Button',
      type: 'object',
      group: 'proceed',
      fields: [
        defineField({name: 'termsText', title: 'Terms Text (before the link)', type: 'string'}),
        defineField({name: 'termsLinkText', title: 'Terms Link Text', type: 'string'}),
        defineField({name: 'termsLinkUrl', title: 'Terms Link URL', type: 'string', initialValue: './terms.php'}),
        defineField({name: 'buttonText', title: 'Button Text', type: 'string'}),
      ],
    }),

    // ---------- ORDER DETAILS (labels only) ----------
    defineField({
      name: 'orderDetails',
      title: 'Order Details',
      type: 'object',
      group: 'orderDetails',
      fields: [
        defineField({name: 'title', title: 'Title (h5)', type: 'string'}),
        defineField({name: 'totalItemsLabel', title: 'Total Items Label', type: 'string'}),
        defineField({name: 'deliveryLabel', title: 'Delivery Fee Label', type: 'string'}),
        defineField({name: 'totalPriceLabel', title: 'Total Price Label', type: 'string'}),
        defineField({name: 'buttonText', title: 'Button Text', type: 'string'}),
      ],
    }),
  ],
  preview: {prepare: () => ({title: 'Checkout Page'})},
})