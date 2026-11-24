import {defineType, defineField} from 'sanity'

export const productDetailsSchema = defineType({
  name: 'product',
  title: 'Product',
  type: 'document',
  groups: [
    {name: 'info', title: 'Info', default: true},
    {name: 'gallery', title: 'Gallery'},
    {name: 'details', title: 'Details (tabs)'},
    {name: 'labels', title: 'Labels & Buttons'},
  ],
  fields: [
    // ---------- INFO ----------
    defineField({name: 'name', title: 'Product Name (h3)', type: 'string', group: 'info'}),
    defineField({
      name: 'slug',
      title: 'Slug (used in the URL, e.g. shoe)',
      type: 'slug',
      group: 'info',
      options: {source: 'name', maxLength: 96},
      validation: (Rule) => Rule.required(),
    }),
    defineField({name: 'brandName', title: 'Brand Name', type: 'string', group: 'info'}),
    defineField({name: 'brandLink', title: 'Brand Link', type: 'string', group: 'info', initialValue: '#'}),
    defineField({
      name: 'rating',
      title: 'Rating (0 to 5, halves allowed, e.g. 4.5)',
      type: 'number',
      group: 'info',
      validation: (Rule) => Rule.min(0).max(5),
    }),
    defineField({name: 'listPrice', title: 'List Price (e.g. $120)', type: 'string', group: 'info'}),
    defineField({name: 'price', title: 'Price (e.g. $85)', type: 'string', group: 'info'}),
    defineField({name: 'features', title: 'Feature List', type: 'array', group: 'info', of: [{type: 'string'}]}),

    // ---------- GALLERY ----------
    defineField({
      name: 'images',
      title: 'Images (the thumbnails are made from these automatically)',
      type: 'array',
      group: 'gallery',
      of: [{type: 'image', options: {hotspot: true}}],
    }),

    // ---------- DETAILS (tabs), each item = one paragraph ----------
    defineField({name: 'description', title: 'Description (paragraphs)', type: 'array', group: 'details', of: [{type: 'text', rows: 4}]}),
    defineField({name: 'specification', title: 'Specification (paragraphs)', type: 'array', group: 'details', of: [{type: 'text', rows: 4}]}),
    defineField({name: 'reviews', title: 'Reviews (paragraphs)', type: 'array', group: 'details', of: [{type: 'text', rows: 4}]}),

    // ---------- LABELS & BUTTONS (new, prefilled with your current texts) ----------
    defineField({name: 'byLabel', title: 'Brand Label (before the brand link)', type: 'string', group: 'labels', initialValue: 'by'}),
    defineField({name: 'listPriceLabel', title: 'List Price Label', type: 'string', group: 'labels', initialValue: 'List Price:'}),
    defineField({name: 'priceLabel', title: 'Price Label', type: 'string', group: 'labels', initialValue: 'Price:'}),
    defineField({name: 'quantityLabel', title: 'Quantity Label', type: 'string', group: 'labels', initialValue: 'Quantity:'}),
    defineField({name: 'buyButtonText', title: 'Buy Button Text', type: 'string', group: 'labels', initialValue: 'Buy now'}),
    defineField({name: 'buyButtonLink', title: 'Buy Button Link', type: 'string', group: 'labels', initialValue: 'checkout.php'}),
    defineField({name: 'addToCartText', title: 'Add To Cart Text', type: 'string', group: 'labels', initialValue: 'Add to cart'}),
    defineField({name: 'descriptionTab', title: 'Description Tab Name', type: 'string', group: 'labels', initialValue: 'Description'}),
    defineField({name: 'specificationTab', title: 'Specification Tab Name', type: 'string', group: 'labels', initialValue: 'Specification'}),
    defineField({name: 'reviewsTab', title: 'Reviews Tab Name', type: 'string', group: 'labels', initialValue: 'Reviews'}),
    defineField({name: 'relatedTitle', title: 'Related Section Title (h3)', type: 'string', group: 'labels', initialValue: 'Products'}),
  ],
  preview: {select: {title: 'name', subtitle: 'price', media: 'images.0'}},
})