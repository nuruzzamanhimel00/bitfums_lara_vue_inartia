<script setup>
// import Footer from "@/Components/Footer.vue";
// import Layout from "@/Components/Layout.vue";
import { ref } from "vue";
let count = ref(0);
</script>
<!-- <script>
import Layout from "@/Components/Layout.vue";
export default {
    layout: Layout,
};
</script> -->

<template>
    <div>
        <button @click="count++">+</button>
        {{ count }}
        <button @click="count--">-</button>
        <hr />
    </div>
</template>

<style lang="scss" scoped></style>
