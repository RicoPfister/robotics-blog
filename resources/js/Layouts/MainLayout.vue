<template>
    <JetBanner />
    <div class="flex flex-col h-screen">
        <header class="flex flex-col justify-end bg-[#ffffff]">
            <div v-if="showRegLog()" class="absolute top-1 right-1 flex">
                <div v-if="loggedIn()" class="flex gap-5">
                    <JetDropdown align="right" width="48">
                        <template #trigger>
                            <div class="text-3xl text-yellow">
                                {{ usePage().props.value.user.name }}
                            </div>
                        </template>

                        <template #content>
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                Manage Account
                            </div>

                            <JetDropdownLink :href="route('profile.show')">
                                Profile
                            </JetDropdownLink>
                            <JetDropdownLink
                                v-if="$page.props.jetstream.hasApiFeatures"
                                :href="route('api-tokens.index')"
                            >
                                API Tokens API Tokens
                            </JetDropdownLink>

                            <div class="border-t border-gray-100" />

                            <!-- Authentication -->
                            <form @submit.prevent="logout">
                                <JetDropdownLink as="button">
                                    Log Out
                                </JetDropdownLink>
                            </form>
                        </template>
                    </JetDropdown>
                </div>

                <div v-else class="flex gap-5 p-3">
                    <Link
                        :href="route('register')"
                        class="hover:bg-orange-100 rounded-lg w-16"
                    >
                        Register
                    </Link>

                    <Link
                        :href="route('login')"
                        class="hover:bg-yellow-100 rounded-lg w-14"
                    >
                        Log-in
                    </Link>
                </div>
            </div>

            <img :src="MyLogo" class="w-72 my-2 mx-auto" />

            <nav
                class="flex justify-evenly p-10 text-white mt-[10px] h-24 bg-[#5fc6d8]"
            >
                <Link :href="route('home')">HOME</Link>
                <Link
                    :href="
                        route('articles.index', {
                            category: 'entertainment',
                        })
                    "
                    >ENTERTAINMENT</Link
                >
                <Link :href="route('articles.index', { category: 'robotics' })"
                    >ROBOTICS</Link
                >
                <Link :href="route('articles.index', { category: 'industry' })"
                    >INDUSRTY</Link
                >
                <Link :href="route('articles.index', { category: 'medical' })"
                    >MEDICAL</Link
                >
            </nav>
        </header>

        <slot></slot>

        <!-- sm:flex sm:items-center sm:justify-between -->

        <div
            class="flex justify-between items-center p-5 mt-auto h-24 bg-[#b79fff] text-white"
        >
            <img :src="MyLogo2" class="h-16" />
            <span
                class="self-center text-2xl font-semibold whitespace-nowrap px-6 dark:text-white"
            ></span>

            <Link :href="route('terms.show')" class="mr-10"
                >TERMS OF SERVICES</Link
            >
            <Link :href="route('policy.show')" class="mr-[100px]"
                >PRIVACY POLICY</Link
            >
            <Link :href="route('impressum')" class="mr-[100px]">IMPRESSUM</Link>
        </div>
    </div>
</template>

<script setup>
import { Link, usePage } from "@inertiajs/inertia-vue3";
import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
import JetDropdown from "@/Jetstream/Dropdown.vue";
import { Inertia } from "@inertiajs/inertia";
import MyLogo from "@/../images/botblog-logo-1.png";
import MyLogo2 from "@/../images/botblog-logo-2.png";

import JetBanner from "@/Jetstream/Banner.vue";

const logout = () => {
    Inertia.post(route("logout"));
};

const showRegLog = () => {
    switch (route().current()) {
        case "login":
        case "register":
            return false;
        default:
            return true;
    }
};

const loggedIn = () => {
    return !!usePage().props.value.user;
};
</script>
