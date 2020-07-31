<template>
      <div class="form-group">
            <label>{{label}}</label>
            <input v-bind:type="type" v-bind:name="name" class="form-control" id="">
       </div>
</template>

<script>
    export default {
       props: ['label', 'type', 'name', 'errors']
    }
</script>
