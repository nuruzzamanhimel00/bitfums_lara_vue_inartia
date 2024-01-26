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

// import { getCurrentInstance } from "vue";

// const instance = getCurrentInstance();
// // Accessing $attrs
// const isLoggedIn = instance.attrs.isLoggedIn;
// console.log("isLoggedIn", isLoggedIn);
</script>

<style lang="scss" scoped></style>
