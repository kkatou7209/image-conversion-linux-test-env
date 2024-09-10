import { createApp } from "vue";

import App from "./App.vue";
import "vuetify/styles";
import { createVuetify } from "vuetify/lib/framework.mjs";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";
import { aliases, mdi } from "vuetify/iconsets/mdi-svg";

const vuetify = createVuetify({
    components,
    directives,
    icons: {
        defaultSet: "mdi",
        aliases,
        sets: { mdi }
    }
})

const app = createApp(App)
    .use(vuetify);

app.mount("#app")
