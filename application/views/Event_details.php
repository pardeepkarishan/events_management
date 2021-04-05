
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
​
<div class="container">
  <h2>Event Details</h2>
            
  <table class="table">
    <thead>
      <tr>
        <th>Event name</th>
        <th>Event Description</th>
        <th>Location</th>
        <th>Location Description</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    	<?php

    		foreach ($response as $key => $value) {
    			echo '<tr id='.$value['event_id'].'>
			        <td>'.$value['event_name'].'</td>
			        <td>'.$value['event_des'].'</td>
			        <td>'.$value['loc_name'].'</td>
			        <td>'.$value['location_des'].'</td>
			        <td>'.$value['event_date'].'</td>
			      </tr>';
    		}
    	?>
      
      
    </tbody>
  </table>
</div>
​
</body>
</html>
​
