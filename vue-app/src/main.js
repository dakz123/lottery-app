import { createApp } from "vue";
import "./index.css";
import App from "./App.vue";
import router from "./router";
import Echo from "laravel-echo";
import Pusher from "pusher-js";
import { toast } from "vue3-toastify";
import "vue3-toastify/dist/index.css";
import store from "./store";

const app = createApp(App);

app.use(router);
app.use(store);

app.mount("#app");

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: "wahheht15iu67xmf3w3m",
    cluster: "ap2",

    wsHost: "0.0.0.0:8080".replace(/(^\w+:|^)\/\//, ""),
    wsPort: 6001,
    wssPort: 6001,
    forceTLS: false,
    disableStats: true,
    enabledTransports: ["ws", "wss"],
});
app.config.globalProperties.$toast = toast;
