     
     <link rel="stylesheet" href="/student042/dwes/css/footer.css">
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col" class="servicios">
            <h5>Nuestros Servicios</h5>
            <ul>
                <li><a href="/student042/dwes/html/habitaciones.php" class="link-hover" style="color: black;">Reservar su Estancia</a></li>
                <li><a href="/student042/dwes/html/restaurante.php" class="link-hover" style="color: black;">Reservar su Mesa</a></li>
                <li><a href="/student042/dwes/html/belleza.php" class="link-hover" style="color: black;">Reservar su Belleza</a></li>
                <li><a href="/student042/dwes/html/eventos.php" class="link-hover" style="color: black;">Reservar su Evento</a></li>
            </ul>
        </div>
        <div class="col">
            <h5>Contactar con Nosotros</h5>
            <p>
                <i class="fas fa-map-marker-alt"></i> AVD Corer, estrcho, España, 12036
            </p>
            <p>
                <i class="fas fa-phone"></i> 0034-965965965
            </p>
            <p>
                <i class="fas fa-envelope"></i> <a href="mailto:info@hoteloasis.com" style="color: black;">info@hoteloasis.com</a>
            </p>
        </div>
        <div class="col">
            <h5>Redes Sociales</h5>
            <p><i class="fab fa-facebook-square"></i>Facebook</p>
            <p><i class="fab fa-instagram-square"></i> Instagram</p>
            <p><i class="fab fa-pinterest-square"></i> Pinterest</p>
        </div>
        <div class="col">
            <h5>Su comentario nos mejora</h5>
            <a href="/student042/dwes/html/comentarios.php">
                <button type="button" class="btn btn-dark">Dejar comentario</button>
            </a>
        </div>
    </div>
    <div class="row">
        <h6>Todos los derechos reservados 2023-2024</h6>
    </div> 
    
  </div>
 
        </footer>
  <script>
        
      window.addEventListener('load', () => {
        // Configurar la clave de la API de AccuWeather
        const apiKey = '1MgMMLa5Fh16714aQTiAbJUZyHePskPt';

        // ID de la ubicación  Marrakech, Marruecos
        const locationKey = '154487'; 

        // URL de la API de AccuWeather para obtener el pronóstico actual
        const apiUrl = `https://dataservice.accuweather.com/currentconditions/v1/${locationKey}?apikey=${apiKey}&language=es`;

        // Realizar una solicitud a la API de AccuWeather
        fetch(apiUrl)
          .then(response => {
            if (!response.ok) {
              throw new Error('Error en la solicitud a la API');
            }
            return response.json();
          })
          .then(data => {
            console.log('Datos del tiempo recibidos:', data);
            // Extraer la información del tiempo
            const weatherText = data[0].WeatherText;
            const temperature = data[0].Temperature.Metric.Value;

            // Mostrar la información del tiempo en el div correspondiente
            document.getElementById('weather-info').innerHTML = `
            
              <p>Temperatura: <strong> ${temperature}°C </strong> </p>
              <p>Estado del Tiempo: <strong> ${weatherText} </strong></p>
            `;

            // Obtener el div para mostrar el icono del tiempo
            const weatherIcon = document.getElementById('weather-icon');

            // Asignar la clase correspondiente al div según el estado del tiempo
            if (weatherText.toLowerCase().includes('soleado')) {
              weatherIcon.style.backgroundImage = "url('/student042/dwes/Apis/iconos_tiempo/sun.png')";
            } else if (weatherText.toLowerCase().includes('nublado')|| weatherText.toLowerCase().includes('Mayormente nublado')) {
              weatherIcon.style.backgroundImage = "url('/student042/dwes/Apis/iconos_tiempo/cloud.png')";
            } else if (weatherText.toLowerCase().includes('lluvia')) {
              weatherIcon.style.backgroundImage = "url('/student042/dwes/Apis/iconos_tiempo/rain.png')";
            } else if (weatherText.toLowerCase().includes('ventoso')) {
              weatherIcon.style.backgroundImage = "url('/student042/dwes/Apis/iconos_tiempo/wind.png')";
            }
            else {
              // Si el estado del tiempo no coincide con ninguna de las condiciones anteriores, no se muestra ningún icono
              weatherIcon.style.display = "none";
            }
          })
          .catch(error => {
            console.error('Error al obtener los datos del tiempo:', error);
          });
      });

  </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    </body>
</html>