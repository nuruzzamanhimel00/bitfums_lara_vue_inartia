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
                <Link url="/test" name="Test" href="/test" />
            </li>
            <li class="nav-item">
                <Link url="/about" name="About" href="/about" />
            </li>
            <li class="nav-item">
                <Link url="/login" name="Login" href="/login" />
            </li>
        </ul>
    </div>
</template>

<script setup>
// import { Link } from "@inertiajs/vue3";
import Link from "@/Components/Link.vue";
</script>

<style scoped>
.active {
    background: red;
    padding: 5px;
    margin: 0 5px;
}
</style>
