import { data } from "autoprefixer";
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
        async generateUrl({ commit }, urlParam) {
            return await axiosClient
                .post("/main", urlParam)
                .then(({ data }) => {
                    commit("setUrl", data);
                    return data;
                })
                .catch((error) => {
                    return error.response.data;
                });
        },
        async redirectPath({ commit }, shortCutUrl) {
            return await axiosClient
                .post("/shortcut", shortCutUrl)
                .then(({ data }) => {
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
