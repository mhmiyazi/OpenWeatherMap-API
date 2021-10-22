function showWeather() {
    //API Calling Section
    //Show Search
    document.getElementById("show").style.display="block";

    //Select City Name From Search
    var city_name = document.getElementById("cityInput").value;
    // var author_name = "MH Miyazi";
    //Secret Key
    var secret_key = '54bc42f490a0a0568f5d20da7c7901ca';
    var data_link = 'https://api.openweathermap.org/data/2.5/weather?q='+city_name+'&appid='+secret_key;

    //variables
    var city;
    var description;
    var temperature ;
    var humidity;
    var icon;

    //Fethching API Data From URL/data_link
    fetch(data_link)
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      console.log(data);
      //Box Data
      //********
      //storing Data in Variable
      //Further We can process anything with variable
      //Soo Easily
      city = data.name;
      description = data.weather[0].description;
      get_temperature = data.main['temp'];
      temperature = (get_temperature - 273).toFixed(2);
      humidity = data.main['humidity'];
      icon = 'http://openweathermap.org/img/wn/'+data.weather[0].icon+'.png';

      //Set Data to empty data Table
      document.getElementById("city").innerHTML = city;
      document.getElementById("description").innerHTML = description;
      document.getElementById("temperature").innerHTML = temperature;
      document.getElementById("humidity").innerHTML = humidity;
      document.getElementById("icon").src = icon;
      //********

      //AJAX Auto POST Method Section
      //AJAX method to pass data to insertdata.php
      $.ajax({
          url:'insert.php',
          method:'POST',
          data:{
              city:city,
              description:description,
              temperature:temperature,
              humidity:humidity
          },
         success:function(data){
             // alert(data);
         }
      });
    });

}