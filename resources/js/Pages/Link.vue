<template>
    <li class="nav-item">
        <Link
            :class="{ active: url === '/about' }"
            preserve-scroll
            :href="href"
            >{{ name }}</Link
        >
    </li>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { defineProps } from "vue";
defineProps(["name", "href", "url"]);
</script>

<style lang="scss" scoped></style>
