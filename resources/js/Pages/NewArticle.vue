<template>
    <MainLayout>
        <form class="flex flex-col items-center">
            <div class="text-5xl">New Article</div>
            <label for="Title">Title:</label><br>
            <input type="text" id="Title" name="Title"><br>
            <label for="Description">Description:</label><br>
            <input type="text" id="Description" name="Description">
            <textarea class="shadow rounded stroke-[2px] " rows="15" cols="39" name="...."
                placeholder="..."> </textarea>
            <div class="h-96 w-96 bg-black text-white">Placeholder</div>
            <input type="file">
            <button type="button"
                class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                Submit
            </button>
        </form>
    </MainLayout>
</template>



<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import Button from "../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Jetstream/Button.vue";
</script>
