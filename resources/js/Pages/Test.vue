<script setup>
import Footer from "../Components/Footer.vue";
import { ref } from "vue";
let count = ref(0);
</script>

<template>
    <div>
        <button @click="count++">+</button>
        {{ count }}
        <button @click="count--">-</button>
        <hr />
        <Footer />
    </div>
</template>

<style lang="scss" scoped></style>
