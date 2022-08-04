<template>
    <div>
        <h2>This is a popup</h2>
        <input type="text" name="" id="" v-model="name">
        <button @click="$emit('close', name)">Close popup</button>
    </div>
</template>

<script>

    export default {
        name: 'PopupInfo',  
        emits: {
            close: (name) => {
                if (!name) {
                    return false
                } else {
                    return true
                }
            }
        },
        data () {
            return {
                name: '',
            }
        }
    }
</script>

<style scoped>

</style>