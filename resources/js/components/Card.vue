<template> 

    <div class="card col-sm-5 col-md-3" style="width: 15rem;">
        <img class="img-thumbnail img-fluid rounded" v-bind:src="imagem" v-bind:alt="nome">
        <div class="card-body" >
            <h5 class="card-title">{{nome}}</h5>
            <p class="card-text">{{descricao}}</p>
            <a v-bind:href="detalhar" class="btn btn-primary">Detalhar</a>
        </div>
    </div>

</template>
<script>
    export default {
      props: ['titulo', 'nome', 'descricao', 'imagem', 'detalhar']
    }
</script>
<style >
.container img {
    max-width:200px;
    max-height:150px;
    width: 200px;
    height: 150px;
    object-fit: contain;
}
</style>
