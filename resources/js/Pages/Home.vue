<template>
    <div>
        <Head>
            <title>YHome Page</title>
            <meta name="description" content="lorem Home page" />
        </Head>
        <h1>Home page</h1>
        <div>
            <MonitorList :monitors="monitors" />
        </div>
    </div>
</template>

<script setup>
import MonitorList from "../Components/Home/MonitorList.vue";
import { Head } from "@inertiajs/vue3";

defineProps(["monitors"]);
</script>

<style lang="scss" scoped></style>
