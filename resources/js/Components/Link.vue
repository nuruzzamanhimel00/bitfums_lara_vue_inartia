<template>
    <li class="nav-item">
        <Link
            :class="{ active: $page.url == url }"
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

<style scoped>
.active {
    background: red;
    padding: 5px;
    margin: 0 5px;
}
</style>
