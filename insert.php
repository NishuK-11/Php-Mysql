<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	
	<div class="container">
		<h1 class="text-center">Insert Data using AJAX PHP AND MYsqli</h1><br>
		<div class="col-lg-auto"></div>
		<form id="myform" action="insertphp.php" method="post">
			<div class="form-group">
				<label for="">username:</label>
				<input type="text" class="form-control" name="username">
			</div>

			<div class="form-group">
				<label for="">Password:</label>
				<input type="text" class="form-control" name="password">
			</div>
			<input type="submit" id="submit" name="submit" value="submit" class="btn btn-success">

		</form>
	</div>

	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			var form = $('#myform');
			$('#submit').click(function(){
				$.ajax({
					url:form.attr("action"),
					type: 'post',
					data:$("#myform input").serialize(),
					success:function(data){
						console.log(data);
					}

				})
			})	
		});
	</script>
</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insert Data using AJAX PHP AND MySQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1 class="text-center">Insert Data using AJAX PHP AND MySQL</h1><br>
    <form id="myform" action="insertphp.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>

        <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success">
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        // Prevent the default form submission and handle it via AJAX
        $('#myform').on('submit', function(event){
            event.preventDefault(); // Prevent form from submitting the traditional way

            var formData = $(this).serialize(); // Serialize form data

            // AJAX request
            $.ajax({
                url: $(this).attr('action'), // Use the action from the form
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle success (e.g., show a success message or refresh part of the page)
                    console.log(response); // You can also display success in the HTML here
                    alert('Data inserted successfully!');
                    $('#myform')[0].reset(); // Reset the form after successful submission
                },
                error: function(xhr, status, error) {
                    // Handle error (e.g., show an error message)
                    console.log(xhr.responseText);
                    alert('An error occurred while inserting the data.');
                }
            });
        });
    });
</script>

</body>
</html>
