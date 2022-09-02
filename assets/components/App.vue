<template>
  <div id="app">
    <CakeCardComponents></CakeCardComponents>
  </div>
</template>

<script>
import axios from 'axios'
import CakeCardComponents from './CakeCardComponents.vue'
export default {
    name: "App",
    components:{
        CakeCardComponents
    },
    data() {
        return {
            cakes: []
        };

    },
    methods: {
        getCakes() {
            //Requete HTTP + axios methode get + url de la vue twig
            axios.get("http://127.0.0.1:8001/api/cakes")
                .then(response => {
                //Type de donnes json api platform
                this.cakes = response.data["hydra:member"];
                console.log((response.data["hydra:member"]));
            })
                .catch(error => {
                console.log("Erreur d'affichage des données :" + error);
            });
        }
    },
    //Cycle de vie
    mounted() {
        this.getCakes();
    },
    components: { CakeCardComponents }
}
</script>

<style></style>
