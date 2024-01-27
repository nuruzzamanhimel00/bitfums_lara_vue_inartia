<template>
    <div>
        <Head>
            <title>YHome Page</title>
            <meta name="description" content="lorem Home page" />
        </Head>
        <h1>Home page</h1>
        <div>
            <MonitorList :monitors="laravelData" />
            <div class="paginate text-center">
                <Bootstrap5Pagination
                    :data="laravelData"
                    @pagination-change-page="getResults"
                />
            </div>
        </div>
    </div>
</template>

<!-- <script setup>
import MonitorList from "../Components/Home/MonitorList.vue";
import { Head } from "@inertiajs/vue3";
// defineProps(["monitors"]);
</script> -->

<script>
import MonitorList from "../Components/Home/MonitorList.vue";
import { ref, onMounted } from "vue";
import { Head } from "@inertiajs/vue3";
import { Bootstrap5Pagination } from "../../../node_modules/laravel-vue-pagination";
export default {
    props: ["monitors"],
    components: {
        MonitorList,
        Bootstrap5Pagination,
    },
    setup(props) {
        const laravelData = ref({});

        onMounted(() => {
            laravelData.value = props.monitors;
        });

        const getResults = async (page = 1) => {
            const response = await fetch(`/fetch-monitors-data?page=${page}`);
            laravelData.value = await response.json();
        };

        return {
            laravelData,
            Head,
            getResults,
        };
    },
};
</script>

<style lang="scss" scoped></style>
