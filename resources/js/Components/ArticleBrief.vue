<template>
    <div class="flex">
        <div v-if="imageLeft" class="flex items-center mx-auto ingoMOD">
            <div class=" font-bold text-purple-500 text-3xl text-center">
                ARTICLE TITLE
                <img :src="MyGirlRobot" class="scale-75 rounded-full"/>
            </div>
            <div class="py-4">
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
        <div v-else class="flex items-center mx-auto ingoMOD">
            <div class="py-4">
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
                <img :src="MyGirlRobot" class="scale-75 rounded-full" />
            </div>
        </div>
    </div>
</template>


</style>

<script setup>
import MyImage from "@/../images/botblog-logo-2.png";
import MyGirlRobot from "@/../images/robot-girl-image.jpg";

defineProps({
    imageLeft: Boolean,
});
</script>
