import { createStore } from "vuex";
import axiosClient from "../axios/index";
const store = createStore({
    state: {
        url: {
            data: {},
        },
    },
    getters: {},
    setters: {},
    modules: {},
    actions: {
        async generateUrl({ commit }, url) {
            return axiosClient
                .post("/api", url)
                .then(({ data }) => {
                    return data;
                })
                .catch((error) => {
                    return error.response.data;
                });
        },
    },
    mutations: {},
});
export default store;
