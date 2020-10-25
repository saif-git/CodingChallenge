<template>
<div class="container">
<div>
<div class="dropdown">
<label class="typo__label">Simple select / dropdown</label>
  <multiselect v-model="value"  :options="options" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Pick some" label="branche" track-by="branche" :preselect-first="true">
    <template slot="selection" class="dropdown-item" slot-scope="{ values, search, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} options selected</span></template>
  </multiselect>
  <pre class="language-json"><code>{{value.unbearbeitet}}</code></pre>
</div>
<div v-if="pressed" v-for="v in value">{{v.unbearbeitet+v.unbearbeitet}}</div>
</div>
<categorie-component v-bind:value="value"></categorie-component>

</div>
</template>

<script>
import Multiselect from 'vue-multiselect'

export default {
  components: {
    Multiselect
  },
  mounted(){

this.setCategory()
  },
  data () {
    return {
      sum:0,
      value: [],
      options: [
      ],
      datas:[],
      pressed:false
    }
  },
  methods:{
    setCategory(){
  axios.get('api/categories').then(res=>{
    this.options = res.data.data

    }).catch(err=>console.log(err))
            },
     fetchCategory(){
            axios.get('api/categories').then(res=>{
            this.datas = res.data.data
    }).catch(err=>console.log(err))
        },
  searchCategory(){
this.pressed = true

  }
  },
  create(){
   this.setCategory()
  }
}


</script>