<template>
    <button @click="$emit('order')" class="list-group-item list-group-item-action" aria-current="true">
        {{ name }}
    </button>
</template>

<script>
    export default {
        name: "CategoryComponent",
        props: {
            name : {
                type : String,
                required : true,
            },
            category : {
                type : Array,
                required : true,
            },
        },
        data() {
            return {
                categories: 'Hello World',
            }
        },
    }
</script>

<style scoped>

</style>
