<script setup>


window.addEventListener('load', () => {
  let modalEl = document.getElementById('info-popup');
  modalEl.style.display = "flex";

  const closeModalEl = document.getElementById('close-modal');
  closeModalEl.addEventListener('click', function () {
    modalEl.style.display = "none"
  });

  const acceptPrivacyEl = document.getElementById('confirm-button');
  acceptPrivacyEl.addEventListener('click', function () {
    modalEl.style.display = "none"
  });
});

</script>

<template>
  <div id="info-popup" tabindex="-1">
    <div class="content">
      <div class="header">
        <h3>Información de cookes</h3>
      </div>
      <div class="body">
        <p>Utilizamos cookies en nuestro sitio web para mejorar tu experiencia de navegación. Estas cookies nos ayudan a
          personalizar el contenido, ofrecerte funciones de redes sociales y analizar nuestro tráfico. Al continuar
          utilizando este sitio, aceptas nuestro uso de cookies. Puedes cambiar tus preferencias de cookies en cualquier
          momento en la configuración de tu navegador.</p>
      </div>
      <div class="footer">
        <div class="actions">
          <button id="close-modal" type="button">Denegar</button>
          <button id="confirm-button" type="button">Acceptar</button>
        </div>
      </div>
    </div>
  </div>
</template>

<style>

.actions {
  margin: auto;
}

#close-modal,
#confirm-button {
  margin-left: 20px;
  margin-right: 20px;
}

#info-popup {
  display: none;
  overflow-y: auto;
  overflow-x: hidden;
  position: fixed;
  align-content: center;
  justify-content: center;
  flex-wrap: wrap;
  top: 0;
  right: 0;
  left: 0;
  z-index: 50;
  width: 100%;
  height: 100%;
  background-color: rgba(20, 19, 19, 0.733);
}

#info-popup.show {
  display: block;
}

#info-popup .content {
  position: relative;
  max-width: 32rem;
  /* 512px */
  margin: 0 auto;
  padding: 1rem;
  background-color: #fff;
  border-radius: 0.5rem;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  background-color: rgb(68, 68, 68);

}

#info-popup .header {
  padding-bottom: 1rem;
  border-bottom: 1px solid #ccc;

}

#info-popup .header h3 {
  margin: 0;
  font-size: 1.5rem;
  font-weight: bold;
  color: white;
}

#info-popup .body {
  padding: 1rem 0;
}

#info-popup .body p {
  margin: 0;
  font-size: 1rem;
  color: white;
}

#info-popup .footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 1rem;
}

#info-popup .footer a {
  color: #007bff;
  text-decoration: none;
}

#info-popup .footer button {
  padding: 0.5rem 1rem;
  font-size: 1rem;
  border: none;
  border-radius: 0.25rem;
  cursor: pointer;
}

#info-popup .footer button#close-modal {
  background-color: #ccc;
}

#info-popup .footer button#confirm-button {
  background-color: #007bff;
  color: #fff;
}</style>