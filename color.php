<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="body">

<div class="container">
  <h2>Dynamic Background Color Change using AJAX</h2>

  <form method="post" enctype="multipart/formdata" style="width:40%">
    <div class="form-group">
      <label for="username">Choose Color to Change Background :-</label>
      <select name="t1" class="form-control t1">
		<option value="">Choose Color </option>
		<option value="#000000"> Black </option>
		<option value="#0000ff"> Blue </option>
		<option value="#a52a2a"> Brown </option>
		<option value="#00ffff"> Cyan </option>
		<option value="#006400"> Dark Green </option>
		<option value="#808080"> Grey </option>
		<option value="#008000"> Green </option>
		<option value="#ffa500"> Orange </option>
		<option value="#ffc0cb"> Pink </option>
		<option value="#800080"> Purple </option>
		<option value="#ff0000"> Red </option>
		<option value="#ffffff"> White </option>
		<option value="#ffff00"> Yellow </option>
	 </select>
    </div>
  </form>
</div>
<script>
$(document).on("change",".t1",function(){
var color=$('.t1').val();
jQuery.ajax({
            type: "post",
            url: "ajax.php",
            data: "color=" + color,
            success: function(data) {
               $('.body').css("background",data);
            }
        });
		});
</script>
</body>
</html>