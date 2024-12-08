import './bootstrap';

import { createApp } from 'vue';
import DefaultComponent from "./components/DefaultComponent.vue";
import router from './router';

const app = createApp(DefaultComponent);

app.use(router)
app.mount("#app");
