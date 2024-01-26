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
                <li class="nav-item active">
                    <Link url="/" name="Home" href="/" class="nav-link" />
                </li>
                <li class="nav-item">
                    <Link
                        url="/test"
                        name="Test"
                        href="/test"
                        class="nav-link"
                    />
                </li>
                <li class="nav-item">
                    <Link
                        url="/about"
                        name="About"
                        href="/about"
                        class="nav-link"
                    />
                </li>
                <li class="nav-item">
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
            <ul>
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
import { router } from "@inertiajs/vue3";
function logoutHandler() {
    router.visit("/logout", {
        method: "post",
        onError: (errors) => {
            console.log(errors);
        },
    });
}
</script>
