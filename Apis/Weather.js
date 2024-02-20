
window.addEventListener('load', () => {
  // Configurar la clave de la API de AccuWeather
  const apiKey = 'HkYDeNVIbswpvyMs9rOKKvi1Bru7i7k3';

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
      } else if (weatherText.toLowerCase().includes('nublado')) {
        weatherIcon.style.backgroundImage = "url('/student042/dwes/Apis/iconos_tiempo/cloud.png')";
      } else if (weatherText.toLowerCase().includes('lluvia')) {
        weatherIcon.style.backgroundImage = "url('/student042/dwes/Apis/iconos_tiempo/rain.png')";
      } else if (weatherText.toLowerCase().includes('ventoso')) {
        weatherIcon.style.backgroundImage = "url('/student042/dwes/Apis/iconos_tiempo/wind.png')";
      } else {
        // Si el estado del tiempo no coincide con ninguna de las condiciones anteriores, no se muestra ningún icono
        weatherIcon.style.display = "none";
      }
    })
    .catch(error => {
      console.error('Error al obtener los datos del tiempo:', error);
    });
});
