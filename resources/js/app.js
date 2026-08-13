import '../css/app.css';

import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import '@fontsource/montserrat';

createApp(App)
    .use(router)
    .mount('#app');
