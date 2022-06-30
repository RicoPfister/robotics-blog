<template>
    <MainLayout>
        <div class="container mx-auto columns-1">
            <div class="text-black text-2xl text-center mt-10 mb-10">
                CATEGORY/SECTION NAME
            </div>
            <ArticleBrief image-left="true"></ArticleBrief>
            <ArticleBrief></ArticleBrief>
            <ArticleBrief image-left="true"></ArticleBrief>
            <ArticleBrief></ArticleBrief>
            <ArticleBrief image-left="true"></ArticleBrief>
            <ArticleBrief></ArticleBrief>
            <ArticleBrief image-left="true"></ArticleBrief>
            <ArticleBrief></ArticleBrief>
        </div>

    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import MyImage from "@/../images/botblog-logo-2.png";
import MyLike from "@/../images/like.png";
import ArticleBrief from "../Components/ArticleBrief.vue";
</script>
