<script setup>
// import Footer from "@/Components/Footer.vue";
import Layout from "@/Components/Layout.vue";
import { ref } from "vue";
let count = ref(0);
</script>

<template>
    <Layout>
        <button @click="count++">+</button>
        {{ count }}
        <button @click="count--">-</button>
        <hr />
    </Layout>
</template>

<style lang="scss" scoped></style>
