<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Simple form</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


<!-- form to fill in -->
	<form id="user_form" method="post" action="Insert.php">
		<div>
			<h2>Personal details</h2>

			<label>Name:  </label>
			<input type="text" name="name">

			<label>Date of Birth:</label>
			<input type="Date" name="dob">

			<label>Sex: Male or Female</label>
			<input type="text" name="sex">
		</div>
		<div>
			<h2>Educational info</h2>

			<label>College: </label>
			<input type="text" name="college">

			<label>Degree Course: </label>
			<input type="text" name="degree">
		</div>
		<div>
			<h2>Contact Info</h2>

			<label>P.O.Box:</label>
			<input type="text" name="poBox">

			<label>Phone Number: </label>
			<input type="tel" name="number">

		</div>

		<button type="submit" value="submit">Submit</button>
		


	</form>
<form action="Methods.php"><button type="submit" name="presonal_details"> Whats in the database? </button></form>

<!-- Calling on methods.php -->



<h1>AJAX DATA REQUEST</h1>

	
        <div class="container">
            <h4>User data</h4>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Sex</th>
                    <th>P.O Box</th>
                    <th>Mobile Number</th>
                    <th>Degree course</th>
                    <th>College</th>

                </tr>
                <tbody id="table">

                </tbody>
                <script>
					$.ajax({
						url: "data.php",
						type: "POST",									//applying data.php script here in the table
						cache: false,
						success: function(data){
							alert(data);
							$('#table').html(data); 
						}
					});
				</script>
			
                
				

            </table>
        </div>

        



</body>
</html>