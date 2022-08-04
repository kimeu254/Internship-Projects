<template>

  <Article id="title" :likes="100" :isPublished="true" />

</template>

<script>
import Article from './components/Article.vue'

export default {
  name: 'App',
  components: {
    //Greet, 
    Article,
  },
  data () {
    return {
      
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  /*text-align: center;*/
  color: #2c3e50;
  margin-top: 60px;
}
</style>
