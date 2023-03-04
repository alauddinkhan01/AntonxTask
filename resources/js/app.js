import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";

import { Head, Link } from "@inertiajs/inertia-vue3";
import axios from "axios";
import VueAxios from "vue-axios";
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";

createInertiaApp({
  resolve: (name) => require(`./Pages/${name}.vue`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(VueAxios, axios)
      .use(Toast)
      .component("Link", Link)
      .component("Head", Head)
      .mixin({ methods: { route } })
      .mount(el);
  },
});

InertiaProgress.init({ color: "#4B5563" });
