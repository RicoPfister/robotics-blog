<template>
    <div class="flex">
        <div v-if="imageLeft" class="flex mx-auto">
            <div class="flex flex-col item-center font-bold text-purple-500 text-3xl text-center">
                <Link :href="route('articles.show', article.id)">{{ article.title }}</Link>
                <img :src="article.filename_image" class="h-70 w-100"/>
            </div>
            <div class="">
                {{ article.content }}
            </div>
        </div>
        <div v-else class="flex mx-auto">
            <div class="">
                {{ article.content }}
            </div>

            <div class="flex flex-col item-center font-bold text-purple-500 text-3xl text-center">
                <Link :href="route('articles.show', article.id)">{{ article.title }}</Link>
                <img :src="article.filename_image" class="h-70 w-100" />
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
