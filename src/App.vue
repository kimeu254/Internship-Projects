<template>

<button @click="activeTab = 'TabA'">Tab A</button>
<button @click="activeTab = 'TabB'">Tab B</button>
<button @click="activeTab = 'TabD'">Tab D</button>

<keep-alive>
<component :is="activeTab"/>
</keep-alive>

</template>

<script>
import TabA from './components/TabA.vue'
import TabB from './components/TabB.vue'
import TabD from './components/TabD.vue'

export default {
  name: 'App',
  components: {
    //Popup,
    TabA,
    TabB,
    TabD,
    
    
  },
  data () {
    return {
      activeTab: 'TabA',
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
