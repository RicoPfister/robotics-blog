<template>
    <MainLayout>
        <form class="flex flex-col mx-6">
            <div class="text-4xl text-sky-500 text-center mt-6">New Article</div>

            <label for="Title">Title</label>
            <input type="text" id="Title" name="Title">

            <label for="Description">Description</label>
            <input type="text" id="Description" name="Description">

            <p class="text-xl font-semibold text-blue-900 cursor-pointer transition-all hover:text-black">Write your
                Article</p>

            <textarea
                class="h-15 px-30 text-sm py-5 mt-5 outline-none border-green-300 w-full resize-none border rounded-lg placeholder:text-sm"
                placeholder="Add your Article here">
                </textarea>

            <div class="flex">
                <button class="px-4 py-2 text-white bg-blue-500 rounded shadow-xl">Edit</button>
                <button class="px-4 py-2 text-white bg-green-500 rounded shadow-xl">Create</button>
            </div>

            <div class="flex justify-center mt-8">
                <div class="max-w-2xl rounded-lg shadow-xl bg-gray-50">
                    <div class="m-4">
                        <label class="inline-block mb-2 text-red-600">File Upload</label>
                        <div class="flex items-center justify-center w-full">
                            <label
                                class="flex flex-col w-full h-32 border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                <div class="flex flex-col items-center justify-center pt-7">

                                    <div class="w-8 h-8 text-gray-400 group-hover:text-gray-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </div>
                                    <p class="pt-1 text-sm tracking-wider text-red-600 group-hover:text-blue-600">
                                        Attach a file</p>
                                </div>

                                <div>
                                    <input type="file" class="opacity-5" />
                                </div>

                                <div class="flex p-7 space-x-10">
                                    <button class="px-4 py-2 text-white bg-blue-500 rounded shadow-xl">Delete</button>
                                    <button class="px-4 py-2 text-white bg-green-500 rounded shadow-xl">Upload
                                        File</button>
                                </div>

                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import Button from "../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Jetstream/Button.vue";
</script>
