<template>
    <div class="row mt-3">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <div class="">
                    <form class="d-flex" @submit.prevent="searchArticle">
                        <button class="btn btn-success"> <i class="fa-solid fa-magnifying-glass"></i> </button>
                        <input style="width: 350px" placeholder="Search" type="search" v-model="search" class="form-control mx-2">
                    </form>
                </div>
                <div class="">
                    <pagination :data="articles" @pagination-change-page="show"></pagination>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4" v-for="a in articles.data" :key="a.id">
            <div class="card mb-3 shadow" style="height: 353px">
                <figure class="imghvr-fade">
                    <img :src="a.image">
                    <figcaption>
                        <router-link :to="/detail/+a.id" class="btn btn-outline-light w-100 position-relative" style="margin-top : 75px"> Show </router-link>
                    </figcaption>
                </figure>
                <div class="card-body px-2 py-3">
                    <h4 class="fw-bolder">
                        {{ a.title }}
                    </h4>
                    <p class="fw-bolder">{{ a.excerpt }}</p>
                    <span class="badge bg-secondary me-1" v-for="cat in a.category" v-bind:id="cat.id"> {{ cat.name }} </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Article",
        props: {

        },
        data() {
            return {
                articles: {},
                categories : [],
                search : '',
            }
        },
        created () {
            this.show();
            this.showCat();
        },
        methods: {
            show(page=1) {
                axios.get('api/article?page=' + page).then((response) => {
                    this.articles = response.data;
                })
            },
            searchArticle(){
                axios.get('api/article?search=' + this.search).then((response) => {
                    this.articles = response.data;
                })
            },
            showCat(){
                axios.get('/api/category').then((result)=>{
                    this.categories = result.data;
                });
            },
        },
    }
</script>

<style>
    .sr-only{
        display : none;
    }
</style>
