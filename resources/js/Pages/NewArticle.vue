<template>
    <MainLayout>
 <div class="text-5xl">New Article</div>
<div class="mx-auto "></div>


<div class="container mx-auto columns-2">

<form>
  <label for="Title">Title:</label><br>
  <input type="text" id="Title" name="Title"><br>
  <label for="Description">Description:</label><br>
  <input type="text" id="Description" name="Description">
</form>

    <div class="child-text-cont">
     </div><div class="mx-auto text-center">
     <textarea class="shadow rounded stroke-[2px] " rows="15" cols="39" name="...." placeholder="..."> </textarea>
    </div></div>



<div class="inline-flex rounded-md shadow-sm" role="group">
  <button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
    Upload
  </button>
  <button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
    Edit
  </button>
</div>

<div class="container mx-auto columns-2">

    <div class="child-text-cont">
     </div><div class="mx-auto text-center">
     <textarea class="shadow rounded stroke-[2px] " rows="15" cols="39" name="...." placeholder="..."> </textarea>
    </div></div>

<div class="inline-flex rounded-md shadow-sm" role="group">
  <button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
    Upload File
  </button>
  <button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
    Remove
  </button>
</div>

<!-- <button class="rounded-full px-10 py-2 rounded-mx-auto text-white bg-slate-600" >Add Img</button> -->
<!-- <button class="rounded-full px-2 py-2  rounded-mx-auto text-white bg-slate-600 "> Remove </button> -->









<!-- <div class="container mx-azto columns-2"></div> -->

<!-- <div class="child-img-cont"></div> -->
<!-- <div> Uploade IMG</div> -->

</MainLayout>

</template>



<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import Button from "../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Jetstream/Button.vue";
</script>
