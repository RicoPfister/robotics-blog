<template>
    <MainLayout>
        <!--HERE GOES THE NAME OF THE CATEGORY SELECTED BY THE USER-->
        <div class="container mx-auto ">

            <div class="container mx-auto text-center font-bold text-black text-3xl p-4">
                CATEGORY/SECTION NAME

            </div>
            <ArticleBrief v-for="(article, index) in articles" :key="index" :article="article" :index="index"></ArticleBrief>


        </div>

    </MainLayout>
</template>

<!--HERE GOES A MEDIA QUERY THAT MAKES THE WHOLE SITE CHANGING THE DIV STRUCTURE AT CERTAIN PIXEL OR SCREEN SIZE-->
<style>
    /* @media (max-width: 761px) {
    .ingoMOD {
    display: flex;
    flex-direction: column;
    }

    .py-4 {
    margin: 1rem;

}
} */
</style>

<!--HERE WE HAVE THE IMAGES IMPORTED IN ORDER TO BE USED IN THIS SECTION-->
<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import MyImage from "@/../images/botblog-logo-2.png";
import MyLike from "@/../images/like.png";
import ArticleBrief from "../Components/ArticleBrief.vue";

import { usePage } from "@inertiajs/inertia-vue3";
import { computed } from "@vue/reactivity";

const articles = computed(() => usePage().props.value.articles);
</script>


