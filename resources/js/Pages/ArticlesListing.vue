<template>
    <MainLayout>
        <div class="container mx-auto columns-1">
            <div class="text-black text-2xl text-center mt-10 mb-10">
                CATEGORY/SECTION NAME
        </div>
            <ArticleBrief v-for="(article, index) in articles" :key="index" :article="article" :index="index"></ArticleBrief>
        </div>

    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import MyImage from "@/../images/botblog-logo-2.png";
import MyLike from "@/../images/like.png";
import ArticleBrief from "../Components/ArticleBrief.vue";

import { usePage } from "@inertiajs/inertia-vue3";
import { computed } from "@vue/reactivity";

const articles = computed(() => usePage().props.value.articles);
</script>
