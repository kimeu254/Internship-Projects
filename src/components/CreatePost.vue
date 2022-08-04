<template>
    <div>
        <form action="" @submit.prevent="createPost">
            <div>
                <label for="userId">Post User Id</label>
                <input type="text" id="userId" v-model="formData.userId">
            </div>
            <div>
                <label for="title">Post User Title</label>
                <input type="text" id="title" v-model="formData.title">
            </div>
            <div>
                <label for="body">Post User Body</label>
                <input type="text" id="body" v-model="formData.body">
            </div>
            <button>Create Post</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios'


export default {
    name: 'CreatePost',
    data() {
        return{
            formData: {
                userId: '',
                title: '',
                body: '',
            },
        }
    },
    methods: {
        createPost() {
            axios
            .post('https://jsonplaceholder.typicode.com/posts', this.formData)
            .then(response => console.log(response))
            .catch(error => console.log(error))
        }
    }
}
</script>

<style scoped>

</style>