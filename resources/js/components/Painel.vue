<template>
                <div class="card">
                    <div class="card-header">{{titulo}}</div>
                    <div class="card-body">
                        <slot></slot>
                    </div>
                </div>
         
</template>

<script>
    export default {
            props:['titulo']
    }
</script>
