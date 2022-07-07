<template>
    <MainLayout>
        <div
            class="container mx-auto text-center font-bold text-white text-3xl p-2 bg-slate-500">
            <p>{{ article.title }}</p>
        </div>

        <!-- HERE IS WHERE THE ARTICLES IMAGE IS CALLED -->
        <div class="container mx-auto flex justify-center">
            <img :src="'/images/' + article.filename_image" />
        </div>

        <div
            class="container mx-auto first-letter:text-7xl first-line:uppercase first-letter:font-bold text-left text-white bg-slate-500">
            <div>
                {{ article.content }}
                <!-- HERE IS WERE THE ARTICLES DATE AND WRITER IS CALLED OR WRITTEN  -->
                <div class="mx-auto text-center font-bold text-white text-1xl bg-sky-400">
                    {{ article.created_at_human }} | Created by {{ article.author }}
                </div>

            </div>

        </div>
        <!-- HERE IS WERE PEOPLE CAN LIKE OR DISLIKE THE ARTICLE -->
        <div class="columns-2 text-center content-start rounded  mx-auto p-3 m-5 bg-sky-400" >

        <div
            class="columns-2 text-center content-start rounded mx-auto p-3 m-5 bg-sky-400">
            <div class="font-bold text-center text-white">
                169
                <button
                    class="text-center font-bold bg-sky-700 rounded mx-auto p-2 g-sky-600 hover:bg-sky-900 text-white">
                    &#128077;

                </button>
            </div>

            <div class="font-bold text-center text-white ">

                68
                <button
                    class="text-center font-bold bg-sky-700 rounded mx-auto p-2 g-sky-600 hover:bg-sky-900 text-white">
                    &#128078;

                </button>

            </div>
        </div>


            <div class="mx-auto text-center">
                <textarea
                    v-model="comment"
                    class="shadow rounded stroke-[2px]"
                    rows="7"
                    cols="40"
                    name="content"
                    placeholder="write here">
                </textarea>

                <div class="text-red-600" v-if="$page.props.errors.content">
                    Please enter a comment
                </div>
            </div>

                <button
                    @click="createCommentForm.post(`/articles/${article.id}/comments`,{})"
                    class="flex justify-center text-center font-bold bg-teal-600 rounded mx-auto p-2 g-sky-600 hover:bg-sky-700 text-white">
                    SUBMIT
                </button>
        </div>

        <div class="mx-auto text-center font-bold m-5">
            <p>COMMENTS</p>
        </div>
        <div class="container p-2 rounded mx-auto display">

                <div v-for="commentDetail in commentUser" class="grid grid-cols-12 gap-4 p-2 rounded drop-shadow-xl m-3 bg-sky-400 text-white">
                    <div class="flex flex-col col-span-2">
                        <div>{{ commentDetail.user_id }}</div>
                        <div class="text-xs">{{ commentDetail.created_at }}</div>
                    </div>

                    <div class="col-span-10">
                       {{ commentDetail.text }}
                    </div>
                </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import MyImage from "@/../images/botblog-logo-2.png";
import MyLike from "@/../images/like.png";
import MyGirlRobot from "@/../images/robot-girl-image.jpg";

import { useForm, usePage } from "@inertiajs/inertia-vue3";
import { computed } from "@vue/reactivity";
import { ref } from "vue";

const comment = ref("");
const createCommentForm = useForm({ content: comment });
const commentUser = computed(() => usePage().props.value.commentUser);
const article = computed(() => usePage().props.value.article);
</script>
