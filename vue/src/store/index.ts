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
                    commit("setUrl", data);
                    return data;
                })
                .catch((error) => {
                    return error.response.data;
                });
        },
    },
    mutations: {
        setUrl: (state, urlData) => {
            state.url.data = urlData;
        },
    },
});
export default store;
