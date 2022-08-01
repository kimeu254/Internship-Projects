<template>
<div>
  <pre>
    {{ JSON.stringify(formValues, null, 2) }}
  </pre>
</div>
<form @submit="submitForm">
  
    <div>
      <label for="name">Name</label>
    <input type="text" id="name" v-model="formValues.name">
    </div>

    <div>
      <label for="profile">Profile Info</label>
    <textarea name="profile" id="profile" v-model="formValues.profile"></textarea>
    </div>

    <div>
      <label for="country"></label>
      <select name="country" id="country" v-model="formValues.country">
        <option value="">Select a country</option>
        <option value="Kenya">Kenya</option>
        <option value="Uganda">Uganda</option>
        <option value="Sudan">Sudan</option>
      </select>
    </div>

    <div style="display:block;">
      <label for="skillSet">Skill Set</label>
      <input type="checkbox" value="html" id="html" v-model="formValues.skillSet">
      <label for="html">Html</label>
      <input type="checkbox" value="css" id="css" v-model="formValues.skillSet">
      <label for="css">css</label>
      <input type="checkbox" value="javascript" id="javascript" v-model="formValues.skillSet">
      <label for="javascript">Js</label>
    </div>

    <div>
      <button>Submit</button>
    </div>
  
</form>
</template>

<script>




export default {
  name: 'App',
  data () {
    return {
      formValues: {
        name: '',
        profile: '',
        country: '',
        remoteWork: false,
        skillSet: [],
      }
    };
  },
  methods: {
   submitForm(event) {
    event.preventDefault()
    console.log('Form Data', this.formValues)
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
  /*text-align: center;*/
  color: #2c3e50;
  margin-top: 60px;
}

label {
  font-weight: bold;
  display: flex;
  margin-bottom: 5px;
}

label + input {
  font-weight: bold;
  display: inline-flex;
  margin-right: 20px;
}

input[type="text"],
textarea,
select {
  display: block;
  width: 400px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: white;
  background-image: none;
}
</style>
