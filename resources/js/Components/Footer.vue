<template>
    <div>
        <ul class="nav" style="margin-top: 500px">
            <li class="nav-item">
                <!-- <Link
                    :class="{ active: $page.url === '/test' }"
                    preserve-scroll
                    href="/test"
                    >Test</Link
                > -->
                <Link :url="$page.url" name="Test" href="/test" />
            </li>
            <li class="nav-item">
                <Link :url="$page.url" name="About" href="/about" />
            </li>
        </ul>
    </div>
</template>

<script setup>
// import { Link } from "@inertiajs/vue3";
import Link from "../Pages/Link.vue";
</script>

<style scoped>
.active {
    background: red;
    padding: 5px;
    margin: 0 5px;
}
</style>
