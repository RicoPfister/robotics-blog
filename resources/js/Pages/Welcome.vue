<template>
    <MainLayout>
        <div class="font-sans text-5xl text-center m-6">Popular Articles</div>
        <div class="text-center text-xl p-7">
            Information. Inspiration. Innovation.
        </div>

        <button type="button" class="mx-auto text-center m-20">
            {{ $page.props.article[0].title }}
        </button>

        <div class="container mx-auto columns-2">
            <div class="child-img-cont m-5">HERE COMES AN IMAGE</div>
            <div class="child-text-cont">
                {{ $page.props.article[0].content }}
            </div>
        </div>

        <button type="button" class="mx-auto content-center m-20">
            {{ $page.props.article[1].title }}
        </button>

        <div class="container mx-auto columns-2">
            <div class="child-text-cont">
                {{ $page.props.article[1].content }}
            </div>

            <div class="child-img-cont m-5">HERE COMES AN IMAGE</div>
        </div>

        <button type="button" class="mx-auto text-center m-20">
            {{ $page.props.article[2].title }}
        </button>

        <div class="container mx-auto columns-2">
            <div class="child-img-cont m-5">HERE COMES AN IMAGE</div>
            <div class="child-text-cont">
                {{ $page.props.article[2].content }}
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
</script>
