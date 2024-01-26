<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li
                    v-if="isLoggedIn"
                    class="nav-item"
                    v-for="(nav, key) in navlink"
                    :key="key"
                >
                    <Link
                        :url="nav.url"
                        :name="nav.name"
                        :href="nav.href"
                        class="nav-link"
                    />
                </li>

                <li v-else class="nav-item">
                    <Link
                        url="/login"
                        name="Login"
                        href="/login"
                        class="nav-link"
                    />
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input
                    class="form-control mr-sm-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                />
                <button
                    class="btn btn-outline-success my-2 my-sm-0"
                    type="submit"
                >
                    Search
                </button>
            </form>
            <ul v-if="isLoggedIn">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Dropdown
                    </a>
                    <div class="dropdown-menu">
                        <a
                            class="dropdown-item"
                            href="#"
                            @click.prevent="logoutHandler"
                            >Logout</a
                        >
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</template>
<script setup>
import Link from "@/Components/Link.vue";
import { router, usePage } from "@inertiajs/vue3";
import { computed, reactive } from "vue";

const page = usePage();

const isLoggedIn = computed(() => {
    return page.props.auth.isLoggedIn;
});

const navlink = reactive([
    {
        url: "/",
        name: "Home",
        href: "/",
    },
    {
        url: "/about",
        name: "About",
        href: "/about",
    },
    {
        url: "/about",
        name: "About",
        href: "/about",
    },
]);

// console.log("isLoggedIn", isLoggedIn);

function logoutHandler() {
    router.visit("/logout", {
        method: "post",
        onError: (errors) => {
            console.log(errors);
        },
    });
}
</script>
