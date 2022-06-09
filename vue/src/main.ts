import { createApp } from "vue";
import App from "./App.vue";
import Router from "./routes/index";
import Store from "./store/index";
import "./index.css";
createApp(App).use(Router).use(Store).mount("#app");
