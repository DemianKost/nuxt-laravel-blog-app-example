import { BASE_URL } from "./services/PostService";

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: [
    '@pinia/nuxt',
  ],
  css: ['~/assets/css/main.css'],
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
  
  // auth: {
  //   strategies: {
  //     laravelSanctum: {
  //       provider: 'laravel/sanctum',
  //       url: BASE_URL
  //     }
  //   }
  // },
  // axios: {
  //   proxy: true,
  //   credentials: true
  // },
  // proxy: {
  //   '/api': {
  //     target: BASE_URL,
  //     pathRewrite: {
  //       '^/api': '/'
  //     }
  //   }
  // }
})
