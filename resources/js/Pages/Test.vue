<template>
    <div>
        <button @click="count++">+</button>
        {{ count }}
        <button @click="count--">-</button>
    </div>
</template>

<script>
export default {
    name: "Test",
    data() {
        return {
            count: 0,
        };
    },
};
</script>

<style lang="scss" scoped></style>
