<template>
    <div class="flex items-center justify-center min-h-full px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-sm font-extrabold text-center text-gray-900">
                    Short cut url
                </h2>
            </div>
            <div>
                <ul>
                    
                    <li class="w-full p-4 mb-2 text-white bg-red-800 rounded" v-if="response">
                        {{response}}
                    </li>
                </ul>
            </div>

            <form class="mt-8 space-y-6" @submit="redirectPath" method="POST">
                <!-- @method('post'); -->
                <div class="flex space-x-5 rounded-md shadow-sm">
                    <div>
                        <label for="shortCutUrl" class="sr-only">Shortcut</label>
                        <input v-model="url.shortCutUrl" id="shortCutUrl" name="shortCutUrl" type="text"
                            autocomplete="shortCutUrl" required="true"
                            class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="short-cut" />
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        redirect
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
    import { callWithErrorHandling, ref } from "vue";
    import store from "../store/index";
    import {useRouter} from "vue-router";

    const url = {
        shortCutUrl: "",
    };

    const response = ref();
    function redirectPath(event) {
            event.preventDefault();
            store
                .dispatch("redirectPath", url)
                .then(url => {
                    if (url.data) {
                        window.location.href = url.data.baseUrl;
                    } else {
                        response.value = url.message;
                    }
                });
            

        }
</script>
