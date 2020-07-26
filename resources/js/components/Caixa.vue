<template>
        <div class="small-box" v-bind:style="defineCor" >
            <div class="inner">
              <h3>&nbsp;</h3>

              <p>{{titulo}}</p>
            </div>
            <div class="icon">
             <a v-bind:href="url"><ion-icon v-bind:name="icone" ></ion-icon></a>
            </div>
    </div>
</template>

<script>
    export default {
      props: [ 'titulo', 'url', 'cor', 'icone'],
      computed:{
          defineCor: function(){
              return "background-color: "+this.cor+" !important;"
          }
      }
    }
</script>

<style media="screen">
.small-box p {
    color: white;
}
ion-icon {
  color: white;
}
</style>
