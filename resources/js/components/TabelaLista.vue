<template>
<div>  
    <div class="form-inline">
      <!-- <p>{{this.$store.state.item}}</p> -->
          <a v-if="criar && !modal" v-bind:href="criar" class="btn btn-success btn-sm">Criar</a> 
          <modal-link v-if="criar && modal" tipo="button" nome="adicionar" titulo="criar" css=""></modal-link>   
    </div>
    <div class="form-group float-right">
          <input type="search" placeholder="Buscar" class="form-control" v-model="buscar">
    </div>
    <table class="table table-striped table-hover" id="tabela">
    <thead>
        <tr>
        <th scope="col" style="cursor:pointer" v-on:click="ordenaColuna(index)" v-for="(titulo, index) in titulos" :key="titulo">{{titulo}}</th>
        <th scope="col" v-if="detalhe || editar || deletar">Ação</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="(item, index) in lista" :key="item.id">
          <td v-for="i in item" :key="i.id">{{i}}</td>
          <td v-if="detalhe || editar || deletar">
            <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar + item.id" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" v-bind:value="token">
               <a v-if="detalhe && !modal" v-bind:href="detalhe" class="btn btn-success btn-sm">Detalhe</a> 
                <modal-link v-if="detalhe && modal" v-bind:item="item" v-bind:url="detalhe" tipo="button" nome="detalhe" titulo="Detalhe" css="btn btn-success btn-sm"></modal-link>   
   
               <a   v-if="editar && !modal" v-bind:href="editar" class="btn btn-primary btn-sm">Editar </a>
               <modal-link v-if="editar && modal" v-bind:item="item" v-bind:url="editar" tipo="button" nome="editar" titulo="Editar" css=""></modal-link>   
   
              <!-- <a v-if="deletar" v-bind:href="deletar" class="btn btn-danger btn-sm" v-on:click="confirmar()">Deletar</a> --> 
               <a href="#" v-on:click="executaForm(index)"  class="btn btn-danger btn-sm">Deletar</a>
            </form>
            <span v-if="!token">
                <a v-if="detalhe && !modal" v-bind:href="detalhe" class="btn btn-success btn-sm">Detalhe</a> 
                <modal-link v-if="detalhe && modal" v-bind:item="item"  v-bind:url="detalhe" tipo="button" nome="detalhe" titulo="Detalhe" css="btn btn-success btn-sm"></modal-link>   
   
                <a v-if="editar && !modal" v-bind:href="editar" class="btn btn-primary btn-sm">Editar </a>
                <modal-link v-if="editar && modal"  v-bind:item="item" v-bind:url="editar" tipo="button" nome="editar" titulo="Editar" css=""></modal-link>   
                
                <a v-if="deletar" v-bind:href="deletar" class="btn btn-danger btn-sm" v-on:click="confirmar()">Deletar</a>  
            </span>
             <span v-if="token && !deletar">
                <a v-if="detalhe && !modal" v-bind:href="detalhe" class="btn btn-success btn-sm">Detalhe</a> 
                <modal-link v-if="detalhe && modal" v-bind:item="item" v-bind:url="detalhe" tipo="button" nome="detalhe" titulo="Detalhe" css="btn btn-success btn-sm"></modal-link>   
   
                <a v-if="editar && !modal" v-bind:href="editar" class="btn btn-primary btn-sm">Editar </a> 
                <modal-link v-if="editar && modal"  v-bind:url="editar" v-bind:item="item" tipo="button" nome="editar" titulo="Editar" css=""></modal-link>             
             </span> 

           </td>
        </tr>
    </tbody>
    </table>
</div>
</template>

<script>
    export default {
     props:['titulos', 'itens', 'ordem', 'ordemcol','criar', 'detalhe', 'editar', 'deletar', 'token', 'modal'],
     data: function(){
         return {
            buscar: '',
            ordemAux: this.ordem || "asc",
            ordemAuxCol: this.ordemcol || 0
         }
     },
     methods:{
        confirmar: function (){
           return confirm('Deseja Confirmar a  Exclusão?');
        },
        executaForm: function(index){     
         document.getElementById(index).submit();
        },
        ordenaColuna: function(coluna){
          this.ordemAuxCol = coluna;
          if(this.ordemAux.toLowerCase() == "asc"){
             this.ordemAux = "desc";
          }else{
              this.ordemAux = "asc";
          }
        }
     },
     computed:{
         lista:function(){

           //this.$store.commit('setItem',{opa:"ok alterado"} );

             let ordem = this.ordemAux;
             let ordemCol = this.ordemAuxCol;
             let lista = this.itens.data;
             ordem = ordem.toLowerCase();
             ordemCol = parseInt(ordemCol);             

             if(ordem == "asc"){
               lista.sort(function(a, b){
                if(Object.values(a)[ordemCol] > Object.values(b)[ordemCol] ) {return 1;} 
                if(Object.values(a)[ordemCol] < Object.values(b)[ordemCol] ) {return -1;} 
                return 0;
               });
             }else{
                  lista.sort(function(a, b){
                   if(Object.values(a)[ordemCol] < Object.values(b)[ordemCol] ) {return 1;} 
                   if(Object.values(a)[ordemCol] > Object.values(b)[ordemCol] ) {return -1;} 
                   return 0;
                 });
             }
             if(this.buscar){
                return lista.filter(res => {
                  res = Object.values(res);
                 for(let k = 0; k < res.length;k++ ){
                   if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                     return true
                   }
                 }
                return false;
             });
             }
             return lista;          
       }
      }
    }
</script>
