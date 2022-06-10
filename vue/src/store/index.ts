import { createStore } from "vuex";
import axiosClient from "../axios/index";
const store = createStore({
    state: {
        url: {
            data: {},
        },
    },
    getters: {},
    // setter: {},
    modules: {},
    actions: {
        async generateUrl({ commit }, url) {
            return await axiosClient
                .post("/main", url)
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
