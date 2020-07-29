<template>
<div>  
    <div class="form-inline">
          <a v-if="criar" v-bind:href="criar" class="btn btn-success btn-sm">Criar</a>    
    </div>
    <div class="float-right">
          <input type="search" placeholder="Buscar" class="form-control" v-model="buscar">
    </div>
    <table class="table table-striped table-hover" id="tabela">
    <thead>
        <tr>
        <th scope="col" style="cursor:pointer" v-on:click="ordenaColuna(index)" v-for="(titulo, index) in titulos">{{titulo}}</th>
        <th scope="col" v-if="detalhe || editar || deletar">Ação</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="(item, index) in lista">
          <td v-for="i in item">{{i}}</td>
          <td v-if="detalhe || editar || deletar">
            <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" v-bind:value="token">
               <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-success btn-sm">Detalhe</a> 
               <a v-if="editar" v-bind:href="editar" class="btn btn-primary btn-sm">Editar </a>  
              <!-- <a v-if="deletar" v-bind:href="deletar" class="btn btn-danger btn-sm" v-on:click="confirmar()">Deletar</a> --> 
               <a href="#" v-on:click="executaForm(index)"  class="btn btn-danger btn-sm">Deletar</a>
            </form>
            <span v-if="!token">
                <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-success btn-sm">Detalhe</a> 
                <a v-if="editar" v-bind:href="editar" class="btn btn-primary btn-sm">Editar </a>  {{i}}
                <a v-if="deletar" v-bind:href="deletar" class="btn btn-danger btn-sm" v-on:click="confirmar()">Deletar</a>  
            </span>
             <span v-if="token && !deletar">
                <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-success btn-sm">Detalhe</a> 
                <a v-if="editar" v-bind:href="editar" class="btn btn-primary btn-sm">Editar </a>  {{i}}
             </span> 

           </td>
        </tr>
    </tbody>
    </table>
</div>
</template>

<script>
    export default {
     props:['titulos', 'itens', 'ordem', 'ordemcol','criar', 'detalhe', 'editar', 'deletar', 'token'],
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

             let ordem = this.ordemAux;
             let ordemCol = this.ordemAuxCol;
             ordem = ordem.toLowerCase();
             ordemCol = parseInt(ordemCol);             

             if(ordem == "asc"){
               this.itens.sort(function(a, b){
                if(a[ordemCol] > b[ordemCol] ) {return 1;} 
                if(a[ordemCol] < b[ordemCol] ) {return -1;} 
                return 0;
               });
             }else{
                  this.itens.sort(function(a, b){
                   if(a[ordemCol] < b[ordemCol] ) {return 1;} 
                   if(a[ordemCol] > b[ordemCol] ) {return -1;} 
                   return 0;
                 });
             }
             if(this.buscar){
                return this.itens.filter(res => {
                 for(let k = 0; k < res.length;k++ ){
                   if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                     return true
                   }
                 }
                return false;
             });
             }
             return this.itens;          
     }
     }
    }
</script>
