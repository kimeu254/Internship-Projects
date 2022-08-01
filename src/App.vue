<template>
<!-- Conditional rendering-->
<h2 v-if="num === 0">The number is zero</h2>
<h2 v-else-if="num > 0">The number is positive</h2>
<h2 v-else-if="num < 0">The number is negative</h2>
<h2 v-else>This is not a number</h2>
<h2 v-show="display">Using v-show</h2>

<!--- List rendering ----->
<h2 v-for="(name, index) in fullNames" :key="name">{{ index }} {{ name.first }} {{ name.last }}</h2>

<div v-for="actor in actors" :key="actor.name">
<h2>{{ actor.name }}</h2>
<h3 v-for="movie in actor.movies" :key="movie">{{ movie }}</h3>
<h2 v-for="value in myInfo" :key="value">{{ value }}</h2>
</div>
</template>

<script>




export default {
  name: 'App',
  data () {
    return {
     num: 0,
     display: true,
     fullNames: [
      {first: 'Thomas', last: 'Shelby'},
      {first: 'Polly', last: 'Grey'},
      {first: 'Alfie', last: 'Solomons'},
     ],
     actors: [
      {
        name: 'Cillian Murphy',
        movies: ['Peaky Blinders', 'Oppenheimer'],
      },
      {
        name: 'Tom Welling',
        movies: ['Lucifer', 'Smallvile'], 
      },
     ],
     myInfo: {
      name: 'Jimmy',
      channel: 'Madmunga',
      course: 'Vue3'
     }
    };
  },
  methods: {
   
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
