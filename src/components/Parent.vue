<template>
    <div>
        Parent Component
        <button @click="showChild = !showChild">Toggle Child</button>
        <Child v-if="showChild" />
    </div>
</template>

<script>
import Child from './Child.vue';
    export default {
    name: "ParentInfo",
    components: { Child },
    data() {
        return {
            showChild: true,
        }
    },
      beforeCreate() {
        console.log('Parent beforeCreate()')
    },
    created() {
        console.log('Parent created()')
    },
    beforeMount() {
        console.log('Parent beforeMount()')
    },
    mounted() {
        console.log('Parent mounted()')
    },
    beforeUpdate() {
        console.log('Parent beforeUpdate()')
    },
    updated() {
        console.log('Parent updated()')
    },
    beforeUnmount() {
        console.log('Parent beforeUnmont()')
    },
    unmounted() {
        console.log('Parent unmounted()')
    },
}
</script>

<style scoped>

</style>