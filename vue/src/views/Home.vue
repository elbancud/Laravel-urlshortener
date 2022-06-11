<template>
    <div class="flex items-center justify-center min-h-full px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-sm font-extrabold text-center text-gray-900">
                    Url
                </h2>
            </div>
            <div>
                <ul>
                    <li v-for="(value, propertyname,index ) in response" v-bind:key="index">
                        {{ value[0]}}
                    </li>
                </ul>
            </div>

            <form class="mt-8 space-y-6" @submit="shortenUrl" method="post">
                <!-- @method('post'); -->
                <div class="flex space-x-5 rounded-md shadow-sm">
                    <div>
                        <label for="baseUrl" class="sr-only">Base Url</label>
                        <input v-model="url.baseUrl" id="baseUrl" name="baseUrl" type="text" autocomplete="baseUrl"
                            required="true"
                            class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Base-url" />
                    </div>
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
                        Generate
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import store from "../store/index";

const url = {
    baseUrl: "",
    shortCutUrl: "",
};

const response = ref();
function shortenUrl(event) {
    event.preventDefault();
    store
        .dispatch("generateUrl", url)
        .then((data) => {
            response.value = data.errors;
        })
    
}
</script>
