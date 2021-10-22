<?php
	//Data will be automatically fetched from database
	//Without Any Refreshing based on your Network
	include('connection.php');
	//Get City Name From API Fetching
	//Set City
	$city_set = "SELECT * FROM city_selection WHERE id=1";
	$city_set_result = mysqli_query($conn, $city_set);
	$row = mysqli_fetch_assoc($city_set_result);
	$cityname = $row['cityname'];

	if($cityname != ''){
		//Data View from Database
		//Limit of showing result is now 5
		//You Can update it as want as more
		$city_search = "SELECT * FROM search WHERE name='$cityname' ORDER BY id DESC LIMIT 5";
		$result = mysqli_query($conn, $city_search);

		$num = mysqli_num_rows($result);
		if ($num> 0) {
		for($i = 0; $i < $num; $i++){
		  while($row = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $row["date_search"]; ?></td>
			<td><?php echo $row["name"]; ?></td>
			<td><?php echo $row["temperature"]; ?>&deg; C</td>
			<td><?php echo $row["description"]; ?></td>
			<td><?php echo $row["humidity"]; ?>%</td>
		</tr>
		<?php
		  }
		  }
		}else{
		?>
		<td><?php echo "No Results found"; ?></td>
		<?php
		}
		mysqli_close($conn);
	}
?>