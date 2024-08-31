import './bootstrap';

import { createPinia } from "pinia";
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/index";
import Toast, { POSITION } from "vue-toastification";
import "vue-toastification/dist/index.css";

const options = {
    position: POSITION.TOP_RIGHT,
    timeout: 5000,
    maxToasts: 3,
    toastClassName: "shadow-lg rounded-lg ring-1 ring-black ring-opacity-5 font-sans bg-white",
    bodyClassName: ['custom-class-1', 'custom-class-2'],
    containerClassName: 'my-container-class',
    icon: false
};
const pinia = createPinia();

createInertiaApp({
    resolve: name => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(Toast, options)
            .use(pinia)
            .mount(el);
            
    },
    progress: {
        color: "#FF9900"
    }
});
