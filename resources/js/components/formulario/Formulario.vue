<template>
   <form v-bind:class="css" v-bind:action="action" v-bind:method="defineMethod" v-bind:enctype="enctype">
     <input v-if="alterMethod" type="hidden" name="_method" v-bind:value="alterMethod"/>
     <input v-if="token" type="hidden" name="_token" v-model="token" />
      <slot></slot>
     <!-- <input type="submit" name="salvar" v-bind:class="btn || 'btn btn-primary btn-lg'"> -->
     <input type="submit" name="salvar" class="btn btn-primary btn-sm">
   </form>
</template>

<script>
    export default {
       props: ['css' , 'action', 'method', 'enctype', 'btn'],
       data: function(){
           return {
               alterMethod: "",
                token : $('meta[name="csrf-token"]').attr('content')
           }
       },
       computed:{
           defineMethod : function(){
               if(this.method.toLowerCase() == "post" || this.method.toLowerCase() == "get"){
                  return this.method.toLowerCase();
               }

               if(this.method.toLowerCase() == "put"){
                  this.alterMethod = "put";
               }

               if(this.method.toLowerCase() == "delete"){
                  this.alterMethod = "delete";
               }

               return "post";
           }
       }
    }
</script>
