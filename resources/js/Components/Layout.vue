<template>
    <div>
        <Head>
            <title>Incaria js layout</title>
            <meta name="description" content="lorem Home page" />
        </Head>
        <header>
            <h1>Header</h1>

            <Navbar />
        </header>
        <slot></slot>

        <Footer />
    </div>
</template>

<script setup>
import Footer from "@/Components/Footer.vue";
import Link from "@/Components/Link.vue";
import { Head } from "@inertiajs/vue3";
import Navbar from "@/Components/Navbar.vue";
</script>

<style scoped></style>
