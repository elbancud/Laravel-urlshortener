import axios from "axios";
// import router from "./router";
import store from "../store/index";

const axiosClient = axios.create({
    baseURL: "http://127.0.0.1:8000/api",
});
axiosClient.interceptors.request.use((config) => {
    config.headers.authorization = `Bearer 123910842190`;
    return config;
});
// axiosClient.interceptors.response.use((response) => {
//     return response;
// });

export default axiosClient;
