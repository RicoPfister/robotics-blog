<template>

    <MainLayout>
         <!-- <nav class="navbar">
            <p class="nav-options">HOME</p>
            <p class="nav-options">ENTERNTAIMENT</p>
            <p class="nav-options">ROBOTS</p>
            <p class="nav-options">INDUSTRY</p>
            <p class="nav-options">PROFILE</p>
        </nav> -->
        <div class="mx-auto text-center font-bold text-purple-500 text-3xl">
                <p>TITLE OF THE ARTICLE</p>
        </div>
        <div class="container mx-auto columns-2">

            <div class="child-img-cont ">
                <img :src="MyImage">

            </div>

            <div class="child-txt-cont first-letter:text-7xl first-line:uppercase first-letter:font-bold">
                <p>Here our users are going to be able to read and enjoy the complete
                    article, but not only that. The ones who are already registered are going
                    to be able to leave their thoughts about the article itself and of course
                    interact with other users part o our special community.The more you
                    participate, the more friends you will make. People who shares your likes
                    and who also love this amazing Robotics and Technology.

                    What are you waiting for? Do not lose the chance to be part of something
                    special and Sign Up Now!!!

                    Here our users are going to be able to read and enjoy the complete
                    article, but not only that. The ones who are already registered are going
                    to be able to leave their thoughts about the article itself and of course
                    interact with other users part o our special community.The more you
                    participate, the more friends you will make. People who shares your likes
                    and who also love this amazing Robotics and Technology.

                    What are you waiting for? Do not lose the chance to be part of something
                    special and Sign Up Now!!!

                    </p>
                <div class="mx-auto text-center font-bold text-black text-1xl">
                    Date of the Article + Plus Writer's name
                </div>

            </div>

        </div>

        <div class="columns-3 text-center p-3 content-start">

            <div class=" text-center font-bold ">
                <p>DID YOU LIKE THE ARTICLE?</p>
            </div>

            <div class="font-bold text-center text-purple-500">
                169 LIKES
                <button class="text-center font-bold bg-teal-600 rounded mx-auto p-2 g-sky-600 hover:bg-sky-700 text-white">
                    LIKE
                </button>


            </div>

            <div class="font-bold text-center text-purple-500">
                68 DISLIKES

                <button class="text-center font-bold bg-teal-600 rounded mx-auto p-2 g-sky-600 hover:bg-sky-700 text-white">
                  DISLIKE
                </button>

            </div>



        </div>



        <div class="mx-auto text-center font-bold">
                <p>LEAVE A COMMENT</p>
        </div>



            <div class="mx-auto text-center">
                <textarea v-model="comment" class="shadow rounded stroke-[2px]" rows="7" cols="40" name="content" placeholder="write here"> </textarea>
            </div>


           <button @click="createCommentForm.post(`/articles/${article.id}/comments`, {})" class="text-center font-bold bg-teal-600 rounded mx-auto p-2 g-sky-600 hover:bg-sky-700 text-white">
                  SUBMIT
            </button>



        <div class="mx-auto text-center font-bold m-5">
                <p>COMMENTS</p>
        </div>

         <div class="mx-auto text-center">
                <div class="text-center border-2 p-2 border-gray-300 rounded shadow-lg m-5" rows="4" cols="50" name="write here" placeholder="write here">
                  I think this is absolutely amazing I never knew that my cat could be inside the Matrix as a Djavu
                    </div>
         </div>

         <div class="mx-auto text-center">
                <div class="text-center border-2 p-2 border-gray-300 rounded shadow-lg m-5" rows="4" cols="50" name="write here" placeholder="write here">
                  Vamonos!!! I do really want my cyber cat also, but, is it possible to accquire one in United Stares?
                    </div>
         </div>

    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import MyImage from "@/../images/botblog-logo-2.png";
import MyLike from "@/../images/like.png";

import { useForm, usePage } from "@inertiajs/inertia-vue3";
import { computed } from "@vue/reactivity";
import { ref } from 'vue';

const comment = ref('');
const createCommentForm = useForm({ 'content': comment });
const article = computed(() => usePage().props.value.article);
</script>

<style>


</style>
