<template>
    <h2>
        Hello there {{ name }},
    </h2>

    
</template>

<script>
    export default {
        name: 'GreetInfo',
        props: ['name'],
    };
</script>

<style scoped>

</style>