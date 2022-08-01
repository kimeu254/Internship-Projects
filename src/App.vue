<template>
<h2>{{ name }}</h2>
<button @click="changeName">Change Name</button>
<h2>{{ count }}</h2>
<div>
  <button @click="increment(5, $event)">Increment</button>
  <button @click="decrement(5)">Decrement</button>
</div>
</template>

<script>




export default {
  name: 'App',
  data () {
    return {
      name: 'Jimmy',
     count: 0,
    };
  },
  methods: {
   changeName(event) {
    this.name = 'Madmunga'
    console.log('Event', event)
   },
   increment(num, event) {
    this.count += num
    console.log('Event', event)
   },
   decrement(num) {
    this.count -= num
   }
  },
  computed: {
   
  },
  watch: {
   
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
