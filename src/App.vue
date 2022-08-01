<template>
  <h1>{{ Title }}</h1>
</template>

<script>


export default {
  name: 'App',
  data () {
    return {
      Title: "This is my first vue project",
    };
  },
  
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
