import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  build: {
    outDir: 'dist',
    manifest: true,
    assetsDir: 'assets',
    rollupOptions: {
      input: {
        header: resolve(__dirname, 'src/js/header.js'),
        // main: resolve(__dirname, 'src/js/main.js'),
        login: resolve(__dirname, 'src/js/login.js'),
        logout: resolve(__dirname, 'src/js/logout.js'),
        register: resolve(__dirname, 'src/js/register.js'),
        aos: resolve(__dirname, 'src/js/aos.js'),
        contact: resolve(__dirname, 'src/js/contact.js'),
        passwordReset: resolve(__dirname, 'src/js/password-reset.js'),
        pricing: resolve(__dirname, 'src/js/pricing.js'),
        product: resolve(__dirname, 'src/js/product.js'),
        video: resolve(__dirname, 'src/js/video.js'),
        style: resolve(__dirname, 'src/css/style.scss'),
      },
    },
  },
  
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
