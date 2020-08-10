<template> 

    <div class="card col-sm-6 col-md-4" style="width: 18rem;">
        <img class="card-img-top" v-bind:src="imagem" alt="">
        <div class="card-body" >
            <h5 class="card-title">{{nome}}</h5>
            <p class="card-text">{{descricao}}</p>
            <a v-bind:href="detalhar" class="card-link">Detalhar</a>
        </div>
    </div>

</template>
<script>
    export default {
      props: ['titulo', 'nome', 'descricao', 'imagem', 'detalhar']
    }
</script>
