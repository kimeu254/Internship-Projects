<template>

<CreatePost />
<PostList />

</template>

<script>
import PostList from './components/PostList.vue'
import CreatePost from './components/CreatePost.vue'

export default {
  name: 'App',
  components: {
    PostList,
    CreatePost,
    
},
  data () {
    return {

    }
  },
  methods: {
    
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
