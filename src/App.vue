<template>
<!---- computed properties, setters & getters ----->
  <h2>{{ fullName }}</h2>
  <button @click="changeFullName">Change name</button>
  <h3>Computed Total - {{ total }}</h3>

<!---- Watchers ------->
<h2>Volume Tracker</h2>
<h3>Current Volume: {{ vol }}</h3>  
<div>
  <button @click="vol += 2">Vol up</button>
  <button @click="vol -= 2">Vol down</button>
</div>
</template>

<script>


export default {
  name: 'App',
  data () {
    return {
      fname: "Jimmy",
      lname: "Mutiso",
      vol: 0,
      items: [
        {
          id: 1,
          title: 'Woofer',
          price: 3500,
        },
        {
          id: 2,
          title: 'Tv',
          price: 21000,
        },
        {
          id: 3,
          title: 'Laptop',
          price: 30000,
        },
      ]
    };
  },
  methods: {
    changeFullName() {
      this.fullName = 'Mad Munga'
    }
  },
  computed: {
    fullName: {
      get() {
      return `${this.fname} ${this.lname}`
      },
      set(value) {
        const names = value.split(' ')
        this.fname = names[0]
        this.lname = names[1]
      }
    },
    total () {
      console.log('Total Computed Property')
      return this.items.reduce((total, curr) => (total = total + curr.price), 0)
    },
  },
  watch: {
    vol(newValue, oldValue) {
      if(newValue > oldValue && newValue === 16) {
        alert('Too loud music may damage your eardrums')
      }
    }
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
