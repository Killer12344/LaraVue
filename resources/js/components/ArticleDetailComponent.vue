<template>
    <div class="row mt-3 justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="fw-bolder">{{ article.title }}</h3>
                    <div class="d-flex justify-content-between my-2">
                        <span class="text-black-50"><i class="fa-regular text-info me-1 fa-calendar"></i> {{ article.date }}</span>
                        <span class="text-black-50"><i class="fa-regular text-info me-1 fa-user"></i> {{ user.name }}</span>
                    </div>
                    <p class=""> {{ article.description }} </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ArticleDetailComponent",
        data() {
            return {
                id: '',
                article : '',
                user : '',
            }
        },
        created(){
            const ArticleId = window.location.pathname.split('/').pop();
            this.id = ArticleId;
            this.show();
        },
        methods: {
            show(){
                axios.get('/api/article/detail/'+this.id).then(res=>{
                    this.article = res.data;
                    this.user = res.data.user;
                });
            }
        },
    }
</script>

<style scoped>

</style>
