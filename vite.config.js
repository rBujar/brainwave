import { defineConfig } from 'vite';
import { resolve } from 'path';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  build: {
    outDir: 'dist',
    manifest: true,
    assetsDir: 'assets',
    rollupOptions: {
      input: {
        header: resolve(__dirname, 'src/js/header.js'),
        login: resolve(__dirname, 'src/js/login.js'),
        logout: resolve(__dirname, 'src/js/logout.js'),
        register: resolve(__dirname, 'src/js/register.js'),
        aos: resolve(__dirname, 'src/js/aos.js'),
        contact: resolve(__dirname, 'src/js/contact.js'),
        passwordReset: resolve(__dirname, 'src/js/password-reset.js'),
        pricing: resolve(__dirname, 'src/js/pricing.js'),
        product: resolve(__dirname, 'src/js/product.js'),
        video: resolve(__dirname, 'src/js/video.js'),
        style: resolve(__dirname, 'src/css/style.css'),
        displayHomepage: resolve(__dirname, 'src/js/displays/displayHomepage.js'),
        displayPricing: resolve(__dirname, 'src/js/displays/displayPricing.js'),
        displayCareer: resolve(__dirname, 'src/js/displays/displayCareer.js'),
        displayProduct: resolve(__dirname, 'src/js/displays/displayProduct.js'),
        displayProductDetails: resolve(__dirname, 'src/js/displays/displayProductDetails.js'),
        displayContact: resolve(__dirname, 'src/js/displays/displayContact.js'),
        displayCheckout: resolve(__dirname, 'src/js/displays/displayCheckout.js'),
      },
    }
  },
   plugins: [
        tailwindcss(),
    ],
  
  // Don't copy public dir, we'll handle assets via imports
  publicDir: false,
  base: '/',
  
  server: {
    port: 5173,
    cors: true,
    watch: {
      include: ['**/*.php'],
    },
  },
});
