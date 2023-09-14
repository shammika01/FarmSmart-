<x-app-layout>

    <x-slot name="header">
        <h2 class="flex items-center justify-center font-semibold text-2xl text-gray-800 dark:text-white  leading-tight">
            {{ __('Farming Planner') }}
        </h2>
    </x-slot>


    <div class="flex items-center justify-center font-semibold text-xl text-gray-800 dark:text-white  leading-tight">
        Your Location
    </div>

    <div class="flex justify-center items-center h-screen">
        <div id="map" class="map-container mx-4 my-4" style="width: 800px; height: 600px;"></div>
        <div id="weatherData" class="text-center mt-4 text-l text-gray-800 dark:text-white"></div>
    </div>

    <div class="flex justify-center items-center h-screen">
        <iframe src="https://meteo.gov.lk/index.php?option=com_content&view=article&id=102&Itemid=360&lang=en"
            frameborder="0" height="400px" width="800px"></iframe>
    </div>





    @section('scripts')
        <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: 38.4237,
                        lng: 27.1428
                    },
                    zoom: 14
                });

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var userLocation = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        // Set the map center to the user's location.
                        map.setCenter(userLocation);

                        // Add a marker to the user's location.
                        var marker = new google.maps.Marker({
                            position: userLocation,
                            map: map,
                            title: 'Your Location'
                        });

                        // Get weather data based on user's location
                        getWeatherData(userLocation);
                    });
                }

                // Function to fetch weather data
                function getWeatherData(location) {
                    var apiKey = '89b83c7154474586baa135122230309';

                    var apiUrl =
                        `https://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${location.lat},${location.lng}&units=metric`;


                    axios.get(apiUrl)
                        .then(function(response) {
                            var weatherData = response.data;
                            var weatherDescription = weatherData.weather[0].description;
                            var temperature = weatherData.main.temp;

                            // Display weather data
                            var weatherContainer = document.getElementById('weatherData');
                            weatherContainer.innerHTML = `
                            <p>Weather: ${weatherDescription}</p>
                            <p>Temperature: ${temperature}°C</p>
                        `;
                        })
                        .catch(function(error) {
                            console.error('Error fetching weather data:', error);
                        });
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @endsection




</x-app-layout>
