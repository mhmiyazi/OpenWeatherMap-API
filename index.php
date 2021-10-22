<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Refreshing -- Weather App</title>
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
<!-- display GET request from people.js using getUsers() and query ajax.php gettable -->
  <div class="container-full" style="background-color: #2A3D8E">
    <div class="row">
      <div class="col-7" style="color: #ffffff; padding-left: 150px; padding-top:20px" >
        <a href="index.php"><img src="images/logo.png" alt="weatherlogo" class="img-fluid" ></a>
            <h4 style="margin-top: 60px; ">Enter City Name </h4>
            <input type='text' id='cityInput' name="cityname" style="width: 300px">
            <input type='submit' id='addweather-button' onclick="showWeather()" name="search" value='Search' />
            <div id='show'>
                <p><b> Name : </b><span id="city"></span></p>
                <p><b> Temperature : </b><span id="temperature"></span>&deg; C</p>
                <p><b> Humidity : </b><span id="humidity"></span>%</p>
                <p><b> Description: </b><span id="description"></span></p>
                <p><img src="" alt="Weather-Icon" id="icon"></p>
            </div>
            <div id='output'>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>


<h5 class="city" >Search History</h5>
<table class="table table-borderless"  id='searchletable' style="color:black; width: 700px; padding: 10px;" >
    <thead>
        <tr>
            <th>Date</th>
            <th>City</th>
            <th>Temperature</th>
            <th>Description</th>
            <th>Humidity</th>
        </tr>
    </thead>
    <tbody id='table_data'></tbody><!-- Realtime Data will be shown here -->
</table>

<!-- All Script -->
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="fetchapi.js"></script>
<script type="text/javascript" src="realtime_data_views.js"></script>
</body>
</html>
