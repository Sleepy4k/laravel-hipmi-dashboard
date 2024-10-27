import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import manifestSRI from 'vite-plugin-manifest-sri';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/js/app.tsx',
        'resources/css/app.css'
      ],
      refresh: true,
    }),
    react(),
    manifestSRI(),
  ],
});
