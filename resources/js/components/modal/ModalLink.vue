<template>
<div class="">
   <!-- Large modal -->
   <button v-if="tipo  == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
    <button v-if="!tipo  || (tipo  != 'button' && tipo != 'link')" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
   <a href="#" v-if="tipo  == 'link'" data-toggle="modal" v-bind:data-target="'#' + nome" v-bind:class="css || ''">{{titulo}}</a>
</div>
</template>

<script>
    export default {
        props: ['tipo', 'nome', 'titulo','css']
    }
</script>
