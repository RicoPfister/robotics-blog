<template>
    <MainLayout>
        <!--HERE GOES THE NAME OF THE CATEGORY SELECTED BY THE USER-->
        <div class="container mx-auto ">
            <div class="container mx-auto text-center font-bold text-black text-3xl p-4">
                CATEGORY/SECTION NAME

            </div>

            <div class="flex items-center mx-auto ingoMOD">
                <!--HERE GOES THE NAME/TITLE OF THE ARTICLE REGARDING THE CATEGORY SELECTED BY USER-->
                <div class=" font-bold text-purple-500 text-3xl text-center">
                     ARTICLE TITLE
                    <!--HERE GOES THE GOES THE IMAGE RELATED WITH THE ARTICLE-->
                    <img :src="MyGirlRobot" class="scale-75 rounded-full"/>
                </div>
                <!--HERE GOES A LITTLE DESCRIPTION OF THE ARTICLE-->
                <div class="py-4">
                     This is a little description about the article, this might be
                     written in a excel table with all the other details together.
                     What are you waiting for? Do not lose the chance to be part of
                     something special and Sign Up Now!!! This is a little
                     description about the article, this might be written in a excel
                     with all the other details together. What are you waiting
                     for? Do not lose the chance to be part of something special and
                     Sign Up Now!!!
                </div>
            </div>

            <div class="flex items-center mx-auto ingoMOD">
                <!--HERE GOES THE NAME/TITLE OF THE ARTICLE REGARDING THE CATEGORY SELECTED BY USER-->
                <div class=" font-bold text-purple-500 text-3xl text-center">
                    ARTICLE TITLE
                    <!--HERE GOES THE GOES THE IMAGE RELATED WITH THE ARTICLE-->
                    <img :src="MyGirlRobot" class="scale-75 rounded-full"/>
                </div>
                <!--HERE GOES A LITTLE DESCRIPTION OF THE ARTICLE-->
                <div class="py-4">
                     This is a little description about the article, this might be
                     written in a excel table with all the other details together.
                     What are you waiting for? Do not lose the chance to be part of
                     something special and Sign Up Now!!! This is a little
                     description about the article, this might be written in a excel
                     with all the other details together. What are you waiting
                     for? Do not lose the chance to be part of something special and
                     Sign Up Now!!!
                </div>
            </div>

            <div class="flex items-center mx-auto ingoMOD">
                <!--HERE GOES THE NAME/TITLE OF THE ARTICLE REGARDING THE CATEGORY SELECTED BY USER-->
                <div class=" font-bold text-purple-500 text-3xl text-center">
                    ARTICLE TITLE
                    <!--HERE GOES THE GOES THE IMAGE RELATED WITH THE ARTICLE-->
                    <img :src="MyGirlRobot" class="scale-75 rounded-full"/>
                </div>
                <!--HERE GOES A LITTLE DESCRIPTION OF THE ARTICLE-->
                <div class="py-4">
                     This is a little description about the article, this might be
                     written in a excel table with all the other details together.
                     What are you waiting for? Do not lose the chance to be part of
                     something special and Sign Up Now!!! This is a little
                     description about the article, this might be written in a excel
                     with all the other details together. What are you waiting
                     for? Do not lose the chance to be part of something special and
                     Sign Up Now!!!
                </div>
            </div>


        </div>

    </MainLayout>
</template>

<!--HERE GOES A MEDIA QUERY THAT MAKES THE WHOLE SITE CHANGING THE DIV STRUCTURE AT CERTAIN PIXEL OR SCREEN SIZE-->
<style>
    @media (max-width: 761px) {
    .ingoMOD {
    display: flex;
    flex-direction: column;
    }

    .py-4 {
    margin: 1rem;

}
}
</style>

<!--HERE WE HAVE THE IMAGES IMPORTED IN ORDER TO BE USED IN THIS SECTION-->
<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import MyImage from "@/../images/botblog-logo-2.png";
import MyLike from "@/../images/like.png";
import ArticleBrief from "../Components/ArticleBrief.vue";

import MyGirlRobot from "@/../images/robot-girl-image.jpg";

</script>
