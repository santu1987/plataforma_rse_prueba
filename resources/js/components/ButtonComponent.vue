<template>

    <button class="btn outline-secondary" :class="selectedStyle"> 
        <slot>Button</slot>
    </button>

</template>



<script>
export default {
    name: "Button", //añadimos un name alcomponente para despues declararñp en nuestra aplicación
    props: {   //declararemos un prop llamado type que sera de tipo string y por defecto su valor sera outline
        //
        type:{
            type: String,
            default: "default"
        },
    },

    computed:{ //creamos una propiedad computada que llamaremos selectedStyle, que sera la encargada de comprobar el prop y retornar la clase que se le pide
        selectedStyle(){
            switch (this.type) {
                case "outline":
                    return "outline"
                case "outline-secondary":
                    return "outline-secondary"            
                default:
                    return "outline";
            }
        }
    }
    
}
</script>



<style scoped>
.btn {
    padding: 10px 30px;
    border: none;
    border-radius: 5px;
    color: white;
    cursor: pointer;
    font-weight: 700;
    letter-spacing: 2px;
    transition: .3s;
}
.outline {
    background-color: transparent;
    border: 2px solid #FF8D00;
    color: #FF8D00;
}
.outline:hover {
    background-color: #FF8D00;
    color: white;
}

.outline-secondary {
    background-color: transparent;
    border: 2px solid #8388A4;
    color: #8388A4;
}
.outline-secondary:hover{
    background-color: #8388A4;
    color: #32364F;
}

</style>