<template>
    <div>
        <h1>Home page</h1>
        <div>
            <MonitorList :monitors="monitors" />
        </div>
    </div>
</template>

<script setup>
import MonitorList from "../Components/Home/MonitorList.vue";
defineProps(["monitors"]);
</script>

<style lang="scss" scoped></style>
