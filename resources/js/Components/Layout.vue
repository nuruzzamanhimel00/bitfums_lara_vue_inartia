<template>
    <div>
        <header>
            <h1>Header</h1>
            <ul class="nav">
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
            </ul>
        </header>
        <slot></slot>

        <Footer />
    </div>
</template>

<script setup>
import Footer from "@/Components/Footer.vue";
import Link from "@/Components/Link.vue";
</script>

<style scoped></style>
