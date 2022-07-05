<template>
    <MainLayout>
        <!-- HERE US WHERE WE CALL THE TITLE OF THE ARTICLE -->
        <div class="text-center font-bold text-white text-3xl p-2 bg-sky-400">
            <p>TITLE OF THE ARTICLE</p>
        </div>

        <!-- HERE IS WHERE THE ARTICLES IMAGE IS CALLED -->
        <div class="mx-auto ">
            <img :src="MyGirlRobot" />
        </div>

        <!-- HERE IS WERE THE ARTICLES TEXT IS CALLED -->
        <div class="mx-auto  first-letter:text-7xl first-line:uppercase first-letter:font-bold text-left text-white bg-slate-500 " >
            <div>
                    Here our users are going to be able to read and enjoy the
                    complete article, but not only that. The ones who are
                    already registered are going to be able to leave their
                    thoughts about the article itself and of course interact
                    with other users part o our special community.The more you
                    participate, the more friends you will make. People who
                    shares your likes and who also love this amazing Robotics
                    and Technology. What are you waiting for? Do not lose the
                    chance to be part of something special and Sign Up Now!!!
                    Here our users are going to be able to read and enjoy the
                    complete article, but not only that. The ones who are
                    already registered are going to be able to leave their
                    thoughts about the article itself and of course interact
                    with other users part o our special community.The more you
                    participate, the more friends you will make. People who
                    shares your likes and who also love this amazing Robotics
                    and Technology. What are you waiting for? Do not lose the
                    chance to be part of something special and Sign Up Now!!!

                    Here our users are going to be able to read and enjoy the
                    complete article, but not only that. The ones who are
                    already registered are going to be able to leave their
                    thoughts about the article itself and of course interact
                    with other users part o our special community.The more you
                    participate, the more friends you will make. People who
                    shares your likes and who also love this amazing Robotics
                    and Technology. What are you waiting for? Do not lose the
                    chance to be part of something special and Sign Up Now!!!
                    Here our users are going to be able to read and enjoy the
                    complete article, but not only that. The ones who are
                    already registered are going to be able to leave their
                    thoughts about the article itself and of course interact
                    with other users part o our special community.The more you
                    participate, the more friends you will make. People who
                    shares your likes and who also love this amazing Robotics
                    and Technology. What are you waiting for? Do not lose the
                    chance to be part of something special and Sign Up Now!!!

                <!-- HERE IS WERE THE ARTICLES DATE AND WRITER IS CALLED OR WRITTEN  -->
                <div class="mx-auto text-center font-bold text-white text-1xl bg-sky-400">
                    Date of the Article + Plus Writer's name
                </div>

            </div>

        </div>
        <!-- HERE IS WERE PEOPLE CAN LIKE OR DISLIKE THE ARTICLE -->
        <div class="columns-2 text-center content-start rounded  mx-auto p-3 m-5 bg-sky-400" >

            <div class="font-bold text-center text-white ">
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


        <div class="mx-auto text-center font-bold p-2">
            <p>LEAVE A COMMENT</p>
        </div>

        <!-- HERE IS WERE REGISTERED USERS CAN LEAVE AND SUBMIT THEIR COMMENTS-->
        <div class="mx-auto text-center">
            <textarea
                v-model="comment"
                class="shadow rounded stroke-[2px]"
                rows="7"
                cols="40"
                name="write here"
                placeholder="write here"
            >
            </textarea>
        </div>

<<<<<<< HEAD

            <div class="mx-auto text-center">
                <textarea v-model="comment" class="shadow rounded stroke-[2px]" rows="7" cols="40" name="content" placeholder="write here"> </textarea>
            </div>


           <button @click="createCommentForm.post(`/articles/${article.id}/comments`, {})" class="text-center font-bold bg-teal-600 rounded mx-auto p-2 g-sky-600 hover:bg-sky-700 text-white">
                  SUBMIT
            </button>

=======
        <button
            @click="
                createCommentForm.post(`articles/${article.id}/comments`, {})
            "
            class="text-center font-bold bg-sky-700 rounded mx-auto p-2 g-sky-600 hover:bg-sky-900 text-white"
        >
            SUBMIT
        </button>
>>>>>>> 66a61d6 (kanban 25)


        <div class="mx-auto text-center font-bold m-5">
            <p>COMMENTS</p>
        </div>

        <!-- HERE IS WERE COMMENTS ARE POST SO PEOPLE CAN READ THEM-->

        <div class="container text-center p-2 rounded mx-auto display" >
            <div class="text-center">
                <div
                    class="text-center p-2 rounded drop-shadow-xl m-3  bg-sky-400 text-white inline-flex">
                    I think this is absolutely amazing I did not know that my cat
                    could be inside the Matrix as a Djavu. But yes, believe me, If I were Neo
                    I would not leave alone Trinity.

                     I think this is absolutely amazing I did not know that my cat
                    could be inside the Matrix as a Djavu. But yes, believe me, If I were Neo
                    I would not leave alone Trinity.

                </div>


            </div>

            <div class="text-center">
                <div
                    class="text-center p-2 rounded drop-shadow-xl m-3  bg-sky-400 text-white inline-flex">
                    Vamonos!!! I do really want my cyber cat also, but, is it
                    possible to accquire one in United Stares?
                </div>
            </div>

            <div class="text-center">
                <div
                    class="text-center p-2 rounded drop-shadow-xl m-3  bg-sky-400 text-white inline-flex ">

                    This is something I need to discuse with my parrot :/
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

<<<<<<< HEAD
const comment = ref('');
const createCommentForm = useForm({ 'content': comment });
const article = computed(() => usePage().props.value.article);
=======
const comment = ref("");
const createCommentForm = useForm({ content: comment });
// use some placeholder article till the backend provides one
// const article = computed(() => usePage().props.value.article);
const article = {
    id: 1,
    title: "article title",
    short: "short of article",
    content: " some demo content",
};
>>>>>>> 66a61d6 (kanban 25)
</script>

<style></style>
