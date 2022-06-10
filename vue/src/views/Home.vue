<template>
    <div
        class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8"
    >
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2
                    class="mt-6 text-center text-sm font-extrabold text-gray-900"
                >
                    Url
                </h2>
            </div>
            <form class="mt-8 space-y-6" @submit="shortenUrl">
                <div class="rounded-md shadow-sm space-x-5 flex">
                    <div>
                        <label for="baseUrl" class="sr-only">Base Url</label>
                        <input
                            v-model="url.baseUrl"
                            id="baseUrl"
                            name="baseUrl"
                            type="text"
                            autocomplete="baseUrl"
                            required="true"
                            class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Base-url"
                        />
                    </div>
                    <div>
                        <label for="shortCutUrl" class="sr-only"
                            >Shortcut</label
                        >
                        <input
                            v-model="url.shortCutUrl"
                            id="shortCutUrl"
                            name="shortCutUrl"
                            type="text"
                            autocomplete="shortCutUrl"
                            required="true"
                            class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="short-cut"
                        />
                    </div>
                </div>

                <div>
                    <button
                        type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
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

const errorMessage = ref();

function shortenUrl(event) {
    event.preventDefault();
    store
        .dispatch("generateUrl", url)
        .then((data) => {
            // console.log(data);
        })
        .catch((error) => {
            errorMessage.value = error.response.data.error;
        });
}
</script>
