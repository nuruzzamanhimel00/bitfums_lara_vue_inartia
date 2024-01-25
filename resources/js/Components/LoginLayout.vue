<script setup></script>

<style>
@import "../../../public/css/util.css";
@import "../../../public/css/main.css";
</style>

<template>
    <div class="limiter">
        <div
            class="container-login100"
            style="background-image: url('/images/bg-01.jpg')"
        >
            <div class="wrap-login100 p-t-30 p-b-50">
                <slot></slot>
            </div>
        </div>
    </div>
</template>
