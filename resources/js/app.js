import Vue from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue";
import { InertiaProgress } from "@inertiajs/progress";
import Layout from "./Shared/Layout";

createInertiaApp({
    resolve: async (name) => {
        let page = (await import(`./Pages/${name}`)).default; // code spliting
        page.layout ??= Layout; // defining default layout
        return page;
    },
    setup({ el, App, props }) {
        new Vue({
            render: (h) => h(App, props),
        }).$mount(el);
    },
    title: (title) => title + " | ONECRM", // default structure of page title
});

InertiaProgress.init({
    color: "#badc58",
});
