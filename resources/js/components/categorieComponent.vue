<template>
<div div="container">
<button @click="calcul" class="btn btn-dark mb-1">Speichern</button>
<table class="table  table-sm">
  <thead class="table-dark">
    <tr>
      <th scope="col">Branche</th>
      <th scope="col">unbearbeitet</th>
      <th scope="col">Gf helt</th>
      <th scope="col">GNicht erreicht</th>
      <th scope="col">Wiedervolage</th>
      <th scope="col">Kein interesse</th>
      <th scope="col">Zu viele Versuche</th>
      <th scope="col">Termine</th>
      <th scope="col">Kunden</th>
      <th scope="col">Black List</th>
      <th scope="col">Insgesamt</th>

    </tr>
  </thead>
  <tbody v-for="category in value">

    <tr>
      <th scope="row">{{category.branche}}</th>
      <td>{{category.unbearbeitet}}</td>
      <td>{{category.Gf_helt}}</td>
      <td>{{category.Nicht_erreit}}</td>
      <td>{{category.Wiedervolage}}</td>
      <td>{{category.Kein_interesse}}</td>
      <td>{{category.Zu_viele_Versuche}}</td>
      <td>{{category.Termine}}</td>
      <td>{{category.Kunden}}</td>
      <td>{{category.Black_List}}</td>
      <td>{{category.Insgesamt}}</td>
    </tr>
  </tbody>


  <tfoot class="table-dark">
    <tr >
    <th scope="col"  ></th>
      <th scope="col" >{{ model.unbearbeitet }}</th>
      <th scope="col">{{ model.Gf_helt }}</th>
      <th scope="col">{{model.Nicht_erreit}}</th>
      <th scope="col">{{ model.Wiedervolage}}</th>
      <th scope="col">{{ model.Kein_interesse}}</th>
      <th scope="col">{{ model.Zu_viele_Versuche}}</th>
      <th scope="col">{{ model.Termine}}</th>
      <th scope="col">{{model.Kunden}}</th>
      <th scope="col">{{ model.Black_List}}</th>
      <th scope="col">{{ model.Insgesamt}}</th>
    </tr>
  </tfoot>
  
</table>

</div>
</template>
<script>
export default{
    props:['value'],
    //sum:[],
    data(){
        return {
          model:{
         unbearbeitet:0,
          Gf_helt:0,
          Nicht_erreit:0,
          Wiedervolage:0,
          Kein_interesse:0,
          Zu_viele_Versuche:0,
          Termine:0,
          Kunden:0,
          Black_List:0,
          Insgesamt:0,
          },
            categories:'',
            searched:[]
        }

    },created(){
        this.fetchCategory()
        for (var v in this.value){
          console.log("v",v)
        }
       
    },mounted(){
     
    },
    methods:{
        fetchCategory(){
            axios.get('api/categories').then(res=>{
    this.categories = res.data.data
    console.log(res.data)
    this.summary = res.data.data
    console.log(this.summary)
    }).catch(err=>console.log(err))
      },
      calcul(){
        this.model.unbearbeitet = 0
               this.value.forEach(e => {
                        this.model.unbearbeitet += e.unbearbeitet;
            });

            this.model.Gf_helt = 0                    
        
               this.value.forEach(e => {
                        this.model.Gf_helt += e.Gf_helt;
            });

            this.model.Nicht_erreit = 0                    


               this.value.forEach(e => {
                        this.model.Nicht_erreit += e.Nicht_erreit;
            });


        
            this.model.Wiedervolage = 0
               this.value.forEach(e => {
                        this.model.Wiedervolage += e.Wiedervolage;
            });

            this.model.Kein_interesse = 0
               this.value.forEach(e => {
                        this.model.Kein_interesse += e.Kein_interesse;
            });

            this.model.Zu_viele_Versuche = 0
               this.value.forEach(e => {
                        this.model.Zu_viele_Versuche += e.Zu_viele_Versuche;
            });


            this.model.Termine = 0
               this.value.forEach(e => {
                        this.model.Termine += e.Termine;
            });

            this.model.Kunden = 0
               this.value.forEach(e => {
                        this.model.Kunden += e.Kunden;
            });

            this.model.Black_List = 0
               this.value.forEach(e => {
                        this.model.Black_List += e.Black_List;
            });

            this.model.Insgesamt = 0
               this.value.forEach(e => {
                        this.model.Insgesamt += e.Insgesamt;
            });

            //this.sumCalcul(this.Gf_helt,this.Gf_helt_type);
      },
      sumCalcul(sum,type){
        sum = 0
         this.value.forEach(e => {
                        sum += e.type;
            });
      }
    },
    
}

</script>