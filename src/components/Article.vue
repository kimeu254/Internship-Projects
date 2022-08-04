<template>
    <div>
        <h2>Article component</h2>
        <h2 v-bind="$attrs">{{ title }}</h2>
        <h2> Likes - {{ likes }} </h2>
        <h2> Published - {{ isPublished ? 'Yes' : 'No' }} </h2>
    </div>
</template>

<script>
    export default {
        name: 'ArticleInfo',
        props: {
            title: {
                type: String,
                require: true,
                default: 'Title',
            },
            likes: Number,
            isPublished: Boolean,
        },
        inheritAttrs: false,
    };
</script>

<style scoped>

</style>