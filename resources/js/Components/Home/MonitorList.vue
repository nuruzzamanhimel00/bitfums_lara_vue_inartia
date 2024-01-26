<template>
    <div>
        <div class="card">
            <div class="card-title">
                Monitor List
                <Link :href="route('site.create')">
                    <button>Ziggi Visite Site</button>
                </Link>
                <button class="ml-5" @click.prevent="clickHander">
                    Visite Site
                </button>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Site name</th>
                            <th scope="col">Site Url</th>
                            <th scope="col">Reasons</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="(monitor, key) in monitors.data"
                            :key="monitor.id"
                        >
                            <th scope="row">{{ key + 1 }}</th>
                            <td>
                                {{ monitor.site_name }}
                            </td>
                            <td>{{ monitor.site_url }}</td>
                            <td>{{ monitor.response }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link, router } from "@inertiajs/vue3";
defineProps(["monitors"]);

function clickHander() {
    router.visit(route("site.create"), {
        method: "get",
    });
}
</script>

<style lang="scss" scoped></style>
