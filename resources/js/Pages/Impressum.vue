<template>
    <MainLayout>

        <Head title="Impressum" />

        <div class="font-sans text-gray-900 antialiased">
            <div class="pt-4 bg-gray-100">
                <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
                    <div>
                        <Link :href="route('home')">
                            <img :src="MyLogo" class="w-96 h-auto">
                        </Link>
                    </div>

                    <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose ">
                        Impressum <br>
                        Angaben gemäß § 5 TMG<br>
                        Ralph - Stephan - Rico - Channel - Jürgen -InGo<br>
                        BotBlog<br>
                        Kanzleistrasse<br>
                        228<br>
                        8004 Zürich<br>
                        Kontakt<br>
                        Telefon: 0798100560<br>
                        E-Mail: botblog@gmail.com<br>
                        EU-Streitschlichtung<br>
                        Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) <br>
                        bereit:<br>
                        https://ec.europa.eu/consumers/odr/.<br>
                        Unsere E-Mail-Adresse finden Sie oben im Impressum.<br>
                        Verbraucherstreitbeilegung/Universalschlichtungsstelle<br>
                        Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer<br>
                        Verbraucherschlichtungsstelle teilzunehmen.<br>
                    </div>
                </div>
            </div>
        </div>

    </MainLayout>
</template>

<script setup>
// import MainLayout from "@/Layouts/MainLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";
import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo.vue";
import MyLogo from "@/../images/botblog-logo-1.png";
import { Link } from "@inertiajs/inertia-vue3";
</script>
