<template>
    <div>
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
                <tr v-for="(monitor, key) in monitors" :key="monitor.id">
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
</template>

<script setup>
defineProps(["monitors"]);
</script>

<style lang="scss" scoped></style>
