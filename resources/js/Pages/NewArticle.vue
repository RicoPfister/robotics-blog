<template>
    <MainLayout>
        <form class="flex flex-col mx-auto overflow-visible min-w-[50%]">
            <div class="text-4xl text-sky-500 text-center mt-6">New Article</div>

            <label for="Title" class="mb-1">Title</label>
            <input type="text" id="Title" name="Title">

            <label for="Description" class="mt-3">Description</label>
            <input type="text" id="Description" name="Description">

            <label for="pet-select" class="mt-3">Choose a Category:</label>
            <select name="pets" id="pet-select" class="text-base shadow">
                <option value="">--Please choose an option--</option>
                <option value="entertaiment">Entertaiment</option>
                <option value="Robots">Robots</option>
                <option value="hamster">Industry</option>
            </select>

            <label for="pet-select" class="mt-3">Describe article:</label>
            <textarea class="h-15 px-30 text-sm py-5 outline-none w-full resize-none border"
                placeholder="Add your Article here">
            </textarea>

            <input type="file" id="myFile" name="filename" class="mt-4">

            <div class="flex mt-3 space-x-3">
                <button class="px-4 py-2 text-white bg-blue-600 rounded shadow-xl">Edit</button>
                <button class="px-4 py-2 text-white bg-green-600 rounded shadow-xl">Create</button>
            </div>
        </form>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import Button from "../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Jetstream/Button.vue";
</script>
