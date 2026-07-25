import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import Layout from "./Pages/Layout.vue";

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });

        // بنجيب الصفحة المطلوبة بس (Home / About / Users)
        const page = pages[`./Pages/${name}.vue`];

        /*
            لو الصفحة ملهاش layout خاص،
            نستخدم Layout الافتراضي (الناف بار)
            مهم: page.default مش pages — و default مش defualt
        */
        page.default.layout = page.default.layout || Layout;

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
