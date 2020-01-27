<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<br><br><br><br>


<div><form id="myForm" name="myForm">
	<input type="text" name="name[]" placeholder="name"><input type="text" name="id[]" placeholder="id"><br>
	<input type="text" name="name[]" placeholder="name"><input type="text" name="id[]" placeholder="id"><br>
	<input type="text" name="name[]" placeholder="name"><input type="text" name="id[]" placeholder="id"><br>
	<input type="text" name="name[]" placeholder="name"><input type="text" name="id[]" placeholder="id"><br>
	<input type="text" name="name[]" placeholder="name"><input type="text" name="id[]" placeholder="id"><br>
	<button id="button" type="button"> submit</button> 
</form></div>

<div id="demo"></div>
<script  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
  		

  		$("#button").click(function(){
  			//var myForm = document.getElementById('myForm');
			//var formData = new FormData(myForm)[0];
			var formData = $("#myForm").serialize()

			$.ajax({	
			  			url: 'json.php',
			  			type: 'POST',
			  			dataType: 'html',
			  			data: formData,
			  		})
			  		.done(function(data) {
			  			//console.log(data);
			  			$("#demo").html(data);
			  		})
			  		.fail(function() {
			  			//console.log("error");
			  			alert("Error");
			  		})
			  		.always(function() {
			  			console.log("complete");
			  		});
  		});

  		setInterval(function(){
  			var formData = $("#myForm").serialize()

			$.ajax({	
			  			url: 'json.php',
			  			type: 'POST',
			  			dataType: 'html',
			  			data: formData,
			  		})
			  		.done(function(data) {
			  			//console.log(data);
			  			$("#demo").html(data);
			  		})
			  		.fail(function() {
			  			//console.log("error");
			  			alert("Error");
			  		})
			  		.always(function() {
			  			console.log("complete");
			  		});

  		}, 10000);
  		
  		
  		  	});
  </script>
</body>
</html>