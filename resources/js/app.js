import './bootstrap';
import "../css/app.css";
import {createApp} from 'vue';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import app from './components/app.vue'

import router from "./router.js";

createApp(app).use(router).mount("#app");
