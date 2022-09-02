<template>
    <div class="card">
        <div class="info">
            <div class="name">{{Carte_Gateau.nom_cake}}nom</div>
            <div class="prof">{{Carte_Gateau.difficult}}</div>
            <div class="divider"></div>
            <div class="bio">{{Carte_Gateau.description_carte}}</div>
        </div>
        <div :style="ChangeBackground" class="photo"></div>
        <a class="details" href=""> savoir plus</a>
    </div>
</template>

<script>
import {computed} from "vue";
export default {
name : "CakeCardComponents",
props: {
Carte_Gateau: Object
},setup(props){
    const ChangeBackground = computed(() =>{
        return{
            backgroundImage : `url(${props.Carte_Gateau.photo_cake})`
        }
    })
    //Return
    return{
    ChangeBackground
    }
}
};
</script>

<style>
.card{
  height: 450px;
  width: 350px;
  background-color: #fff;
  transform: scale(0.7);
  border-radius: 8px;
  box-shadow: 0 0 80px 1px #4169b0;
  }
    .info{
  width: 100%;
  height: 100%;
  display: flex;
  
  justify-content: center;
  }
  .name{
  font-size: 35px;
  font-weight: 600;
  color: #f79f08;
  position: absolute;
  top: 100px;
  letter-spacing: 2px;
  }
  .prof{
      font-size: 25px;
      color: #555555;
      position: absolute;
      top: 140px;
  }
  .divider{
  background-color: #949594;
  height: 1.5px;
  width: 50px;
  position: absolute;
  top: 190px;
  }
  .bio{
  position: absolute;
  top: 220px;
  color:#949594;
  line-height: 28px;
  font-size: 18px;
  text-align: center;
  }
  .button{
  position: absolute;
  bottom: 30px;
  border: none;
  background-color: #f79f08;
  font-size: 20px;
  padding: 13px 25px;
  cursor: pointer;
  color: #fff;
  }
  .photo img{
  height: 100%;
  width: 100%;
  background-repeat: no-repeat;
  position: absolute;
  bottom: 0;
  background-size: 100% 100%;
  border-radius: 8px;
  transition: 1s;
  }
    .card:hover .photo img{
  transform:  scale(0.5, 0.35 ) translateY(-650px);
  border-radius: 50%;
  background-size: 100% 150%;
  background-position: 0 -25px;
  }
  .details{
  position: absolute;
  bottom: -70px;
  font-size: 25px;
  background-color: #fff;
  color:#fabe58;
  width: 100%;
  padding: 12px 0;
  font-weight: 600;
  text-decoration: none;
  text-align: center;
  }
</style>