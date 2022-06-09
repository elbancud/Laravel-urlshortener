import axios from "axios";
// import router from "./router";
import store from "../store/index";

const axiosClient = axios.create({
    baseURL: "http://localhost:8000/api",
});

export default axiosClient;
