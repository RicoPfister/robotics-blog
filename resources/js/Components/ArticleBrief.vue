<template>
    <div class="flex">
        <div v-if="imageLeft" class="flex items-center mx-auto flex-col md:flex-row">
            <div class="flex flex-col item-center font-bold text-purple-500 text-3xl text-center">
                <Link :href="route('articles.show', article.id)">{{ article.title }}</Link>
                <img :src="'/images/' + article.filename_image" class="scale-75 rounded-full"/>
            </div>
            <div class="py-4">
                {{ article.content }}
            </div>
        </div>
        <div v-else class="flex items-center mx-auto flex-col md:flex-row">
            <div class="block md:hidden font-bold text-purple-500 text-3xl text-center">
                <Link :href="route('articles.show', article.id)">{{ article.title }}</Link>
                <img :src="'/images/' + article.filename_image" class="scale-75 rounded-full" />
            </div>

            <div class="py-4">
                {{ article.content }}
            </div>

            <div class="hidden md:block font-bold text-purple-500 text-3xl text-center">
                <Link :href="route('articles.show', article.id)">{{ article.title }}</Link>
                <img :src="'/images/' + article.filename_image" class="scale-75 rounded-full" />
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link, usePage } from "@inertiajs/inertia-vue3";
import MyImage from "@/../images/botblog-logo-2.png";
import { computed } from "@vue/reactivity";

const props = defineProps({
    article: Object,
    index: Number
});

const imageLeft = computed(() => {return props.index%2===0});

</script>
