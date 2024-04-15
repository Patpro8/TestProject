
<script>
import { ArrowBack, ArrowForward } from "@vicons/ionicons5";
import { defineComponent } from "vue";
import { NCarousel, NCard } from "naive-ui";
import banner from "@/Components/banner.vue";

export default defineComponent({
  components: {
    ArrowBack,
    ArrowForward,
    NCarousel,
    NCard,
    banner
}
});
</script>
<template>
    <banner></banner>
    <div class="container">
        <n-carousel autoplay>
          <img class="carousel-img" src="">
          <img class="carousel-img" src="">
          <img class="carousel-img" src="">
        </n-carousel>
  
      <div class="card-container">
        <n-card class="card">
          <p class="card-title">Información sobre el Castillo de Dalí</p>
          <div class="card-content">
            <p class="card-text">Ubicado en el corazón de Figueres, Cataluña, el Castillo de Dalí es un lugar emblemático lleno de historia y creatividad.</p>
            <p class="card-text">Explora su arquitectura única y descubre la fascinante relación del lugar con el artista Salvador Dalí.</p>
          </div>
        </n-card>
        
        <n-card class="card">
          <p class="card-title">Otro lugar interesante en Figueres</p>
          <div class="card-content">
            <p class="card-text">Descubre la historia y la cultura de este encantador destino turístico en Cataluña.</p>
            <p class="card-text">¡No te pierdas la oportunidad de visitar este lugar increíble!</p>
          </div>
        </n-card>
      </div>
  
      <div class="image-container">
        <img src="" alt="Dali" class="card-img">
        <img src="" alt="juguets" class="card-img">
      </div>
  
      
    </div>
  </template>
  <style scoped>
  .container {
    background-color: #e7e7e7;
    max-width: 100%;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }
  
  .carousel-img {
    width: 100%; /* Ajustar la anchura al 100% */
    height: 530px; /* Opcional: ajustar la altura si es necesario */
    object-fit: cover;
    border-radius: 15px;
  }
  
  .card-container {
    display: flex;
    justify-content: space-between;
    align-items: stretch; /* Para que ambas tarjetas tengan la misma altura */
    margin-top: 20px;
  }
  
  .card {
    flex: 1;
    margin: 0 10px;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
  }
  
  .card-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 15px;
  }
  
  .card-content {
    font-size: 18px;
  }
  
  .card-text {
    font-size: 18px;
  }
  
  .image-container {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
  }
  
  .card-img {
    width: calc(50% - 10px); /* Adjust width to leave some margin between images */
    border-radius: 15px;
    object-fit: cover;
  }
  
  .map-container {
    margin-top: 20px;
    border-radius: 15px;
    overflow: hidden;
  }
  
  .mapa {
    width: 100%;
    height: 300px;
    border: 0;
    border-radius: 15px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  }
  @media only screen and (max-width: 800px) {
    .n-carousel__slides {
      width: 50%;
    }
  
    .container {
      width: 900px;
      max-height: 110%;
    }
    .mapa {
      max-width: 100%;
    }
  
  }
  </style>