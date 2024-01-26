<script>
import LoginLayout from "../Components/LoginLayout.vue";

export default {
    layout: LoginLayout,
};
</script>
<script setup>
// import { reactive } from "vue";
import { Link } from "@inertiajs/vue3";
import { useForm } from "@inertiajs/vue3";
let formData = useForm({
    email: "",
    password: "",
});

function formSubmit() {
    formData.post("/login/submit", {
        preserveScroll: true,
        onSuccess: () => formData.reset("password"),
        onError: (errors) => {
            formData.reset("password");
        },
    });
}

function changeInput(event) {
    console.log(event.target.name);
    formData.clearErrors(event.target.name);
}
</script>

<style lang="scss" scoped></style>
<template>
    <div>
        <span class="login100-form-title p-b-41"> Login </span>
        <!-- <form
            class="login100-form validate-form p-b-33 p-t-5"
            @submit.prevent="formData.post('/login/submit')"
        > -->
        <form
            class="login100-form validate-form p-b-33 p-t-5"
            @submit.prevent="formSubmit"
        >
            <div
                class="wrap-input100 validate-input"
                data-validate="Enter email"
            >
                <input
                    class="input100"
                    type="email"
                    name="email"
                    placeholder="User email"
                    v-model="formData.email"
                    @input="changeInput($event)"
                />
                <span
                    class="focus-input100 text-danger ml-5"
                    data-placeholder="&#xe82a;"
                    v-if="formData.errors"
                >
                    {{ formData.errors.email }}
                </span>
            </div>

            <div
                class="wrap-input100 validate-input"
                data-validate="Enter password"
            >
                <input
                    class="input100"
                    type="password"
                    name="password"
                    placeholder="Password"
                    v-model="formData.password"
                    @input="changeInput($event)"
                />
                <span
                    class="focus-input100 text-danger ml-5"
                    data-placeholder="&#xe80f;"
                    v-if="formData.errors"
                >
                    {{ formData.errors.password }}
                </span>
            </div>
            <progress
                v-if="formData.progress"
                :value="formData.progress.percentage"
                max="100"
            >
                {{ formData.progress.percentage }}%
            </progress>
            <div class="container-login100-form-btn m-t-32">
                <!-- <Link
                    href="/login/submit"
                    method="post"
                    as="button"
                    type="button"
                    class="login100-form-btn"
                    :data="formData"
                    >Logout</Link
                > -->

                <button
                    :disabled="formData.processing"
                    class="login100-form-btn"
                    type="submit"
                >
                    Login {{ formData.processing }}
                </button>
                <ol v-if="formData.errors">
                    <li
                        v-for="key in Object.keys(formData.errors)"
                        :key="key"
                        style="color: red"
                    >
                        {{ formData.errors[key] }}
                    </li>
                </ol>
            </div>
        </form>
    </div>
</template>
