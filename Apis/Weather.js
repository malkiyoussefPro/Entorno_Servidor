

    
   const key = 'HkYDeNVIbswpvyMs9rOKKvi1Bru7i7k3';

   const getCity = async(city) => {
      const base = 'http://dataservice.accuweather.com/locations/v1/cities/search';
      const query = '?apikey=${key}&q=${city}';
      const response = await fetch(base + query);
      const data = await response.json();

      console.log(data);
   }


   getCity('mahon');

   
