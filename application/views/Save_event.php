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

<div class="container">
  <h4>Add new event</h4>
  <!-- <form class="form-horizontal" action="./Add_event/save_event_data" method="post"> -->
  <form class="form-horizontal" action="CreateEvent" method="post">

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Event Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="e_name" placeholder="Enter Event Name" name="e_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Event Description</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="e_des" placeholder="Enter Description" name="e_des">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Event Date</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="e_date" placeholder="Enter Date" name="e_date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Location Name</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="loc_name" placeholder="Enter Location" name="loc_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Location Description</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="loc_des" placeholder="Enter Location Description" name="loc_des">
      </div>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" id='save_event'>Submit</button>
    </div>
  </div>
  </form>

</div>

</body>
</html>
