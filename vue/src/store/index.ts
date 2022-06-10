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
        generateUrl({ commit }, urlParam) {
            return axiosClient
                .post("/main", urlParam)
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
