<template>
    <div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
                <li v-bind:class="defineClass" v-for="item in lista"><a v-if="item.url" v-bind:href="item.url">{{item.titulo}}</a><span v-if="!item.url">{{item.titulo}}</span></li>
        </ol>
        </nav>
    </div>
</template>

<script>
    export default {
         props:['lista'],
         computed : {
            defineClass: function (){
              if(this.url){
                  return "breadcrumb-item active"
              }else{
                  return "breadcrumb-item"
              }
            }
         }
    }
</script>
