<script>
import LoginLayout from "../Components/LoginLayout.vue";

export default {
    layout: LoginLayout,
};
</script>
<script setup>
import { reactive } from "vue";
import { Link } from "@inertiajs/vue3";
let formData = reactive({
    username: "",
    password: "",
});
</script>

<style lang="scss" scoped></style>
<template>
    <div>
        <span class="login100-form-title p-b-41"> Login </span>
        <form class="login100-form validate-form p-b-33 p-t-5">
            <div
                class="wrap-input100 validate-input"
                data-validate="Enter username"
            >
                <input
                    class="input100"
                    type="text"
                    name="username"
                    placeholder="User name"
                    v-model="formData.username"
                />
                <span class="focus-input100" data-placeholder="&#xe82a;"></span>
            </div>

            <div
                class="wrap-input100 validate-input"
                data-validate="Enter password"
            >
                <input
                    class="input100"
                    type="password"
                    name="pass"
                    placeholder="Password"
                    v-model="formData.password"
                />
                <span class="focus-input100" data-placeholder="&#xe80f;"></span>
            </div>

            <div class="container-login100-form-btn m-t-32">
                <!-- <Link
                    :href="`/login/submit`"
                    method="post"
                    as="button"
                    class="login100-form-btn"
                    type="button"
                    >Login</Link
                > -->
                <Link
                    href="/login/submit"
                    method="post"
                    as="button"
                    type="button"
                    class="login100-form-btn"
                    :data="formData"
                    >Logout</Link
                >

                <!-- <button class="login100-form-btn">Login</button> -->
            </div>
        </form>
    </div>
</template>
