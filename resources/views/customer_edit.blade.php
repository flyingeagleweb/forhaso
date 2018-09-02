<!DOCTYPE html>
<html>
	<head>
		<title>Update</title>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<form action="/customers-update" method="POST">
		
		<div class="container">
		<h3>Update Customer Details</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<label>Name</label>
						<input type="hidden" name="id" value="{{$customer['id']}}">
						<input type="text" name="name" class="form-control" value="{{$customer['name']}}">
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="number" name="phone" maxlength="10" class="form-control" value="{{$customer['phone']}}">
					</div>
					<div class="form-group">
						<label>City</label>
						<input type="text" name="city" class="form-control" value="{{$customer['city']}}">
					</div>
					<input type="submit" name="submit" class="btn btn-success" value="Update">
				</div>
			</div>
		</div>
		</form>
		
	</body>
</html>
