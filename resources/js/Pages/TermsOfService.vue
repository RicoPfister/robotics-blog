<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo.vue";
import MyLogo from "@/../images/botblog-logo-1.png";
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    terms: String,
});
</script>

<template>
    <Head title="Terms of Service" />

    <div class="font-sans text-gray-900 antialiased">
        <div class="pt-4 bg-gray-100">
            <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
                <div>
                    <Link :href="route('home')">
                        <img :src="MyLogo" class="w-96 h-auto">
                    </Link>
                </div>

                <div
                    class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose"
                    v-html="terms"
                />
            </div>
        </div>
    </div>
</template>
