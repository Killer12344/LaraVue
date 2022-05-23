<template>
<div class="container-fluid p-0 m-0 position-sticky top-0" style="z-index:1000">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-color">
            <div class="container">
                <a class="navbar-brand" href="#" ><h4 class="mb-0 fw-bolder">Lara<span class="text-success">Vue</span></h4></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link class="nav-link" to="/">Home</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/example">Example</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/about">About</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/contact">Contact</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
</template>

<script>
export default {

}
</script>

<style scoped>
    .router-link-exact-active{
        background: #465362 !important;
        color: white !important;
    }
</style>
