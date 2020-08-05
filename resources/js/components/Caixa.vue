<template>
        <div class="small-box" v-bind:style="defineCor" >
            <div class="inner">
              <h3>#</ion-icon> {{contador}}</h3>

              <p></p>
            </div>
            <div class="icon">
             <a v-bind:href="url"><ion-icon v-bind:name="icone" ></ion-icon></a>
            </div>
            <a href="#" class="small-box-footer">
               {{titulo}} <i class="fa fa-arrow-circle-right"></i>
            </a>
    </div>
</template>

<script>
    export default {
      props: [ 'titulo', 'url', 'cor', 'icone', 'contador'],
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
    color: rgba(0,0,0,0.15);
}
h3 {
  color: white;
}
</style>
