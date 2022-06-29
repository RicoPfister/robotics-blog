<template>
    <div class="flex flex-col h-screen">
        <div class="flex flex-col justify-end h-36 bg-slate-600">
            <div v-if="showRegLog()" class="absolute top-3 right-3 flex">
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
                <div v-else class="flex">
                    <Link
                        :href="route('register')"
                        class="bg-orange-register rounded-lg w-28 m-2 p-2 px-5 hover:bg-orange-200"
                    >
                        Register
                    </Link>
                    <Link
                        :href="route('login')"
                        class="bg-yellow rounded-lg w-28 m-2 p-2 px-5 hover:bg-yellow-200"
                    >
                        Log-in
                    </Link>
                </div>
            </div>
            <nav class="flex justify-between text-white bg-violet-500">
                <Link href="/">home</Link>
                <Link href="/articleslisting">entertainment</Link>
                <Link href="/articleslisting">robots</Link>
                <Link href="/articleslisting">industry</Link>
            </nav>
        </div>
        <slot></slot>
        <div class="h-24 bg-slate-600 mt-auto text-white flex justify-between">
            <Link :href="route('terms.show')">ToS</Link>
            <Link :href="route('policy.show')">Privacy Policy</Link>
            <Link href="/impressum">Impressum</Link>
        </div>
    </div>
</template>

<script setup>
import { Link, usePage } from "@inertiajs/inertia-vue3";
import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
import JetDropdown from "@/Jetstream/Dropdown.vue";
import { Inertia } from "@inertiajs/inertia";

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
