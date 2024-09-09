import "./bootstrap";
import "../css/app.css";
import "toastify-js/src/toastify.css";
import.meta.glob(["../images/**", "../fonts/**"]);

import { createApp, h, DefineComponent } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";

const appName = import.meta.env.VITE_APP_NAME || "Meta Desa Cantik";
/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { faPlus,faRotate,faPencil,faMinus } from '@fortawesome/free-solid-svg-icons'

/* add icons to the library */
library.add(faPlus,faRotate,faPencil,faMinus)

createInertiaApp({
    title: (title) => `${title} - Meta ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component('font-awesome-icon',FontAwesomeIcon)
            .mount(el);
    },
    progress: {
        // Whether to include the default NProgress styles...
        includeCSS: true,

        // Whether the NProgress spinner will be shown...
        showSpinner: true,
        color: "#020eb3",
    },
});
