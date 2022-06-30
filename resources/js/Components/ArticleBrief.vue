<template>
    <div class="flex">
        <div v-if="imageLeft" class="flex mx-auto">
            <div class="flex flex-col item-center font-bold text-purple-500 text-3xl text-center">
                ARTICLE TITLE
                <img :src="MyImage" class="h-70 w-100"/>
            </div>
            <div class="">
                This is a little description about the article, this might be
                written in a excel table with all the other details together.
                What are you waiting for? Do not lose the chance to be part of
                something special and Sign Up Now!!! This is a little
                description about the article, this might be written in a excel
                table with all the other details together. What are you waiting
                for? Do not lose the chance to be part of something special and
                Sign Up Now!!!
            </div>
        </div>
        <div v-else class="flex mx-auto">
            <div class="">
                This is a little description about the article, this might be
                written in a excel table with all the other details together.
                What are you waiting for? Do not lose the chance to be part of
                something special and Sign Up Now!!! This is a little
                description about the article, this might be written in a excel
                table with all the other details together. What are you waiting
                for? Do not lose the chance to be part of something special and
                Sign Up Now!!!
            </div>

            <div class="flex flex-col item-center font-bold text-purple-500 text-3xl text-center">
                ARTICLE TITLE
                <img :src="MyImage" class="h-70 w-100" />
            </div>
        </div>
    </div>
</template>

<script setup>
import MyImage from "@/../images/botblog-logo-2.png";

defineProps({
    imageLeft: Boolean,
});
</script>
