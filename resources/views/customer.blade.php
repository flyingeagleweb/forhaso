<!DOCTYPE html>
<html>
	<head>
		<title>Laravel</title>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<form action="/customers" method="POST">
		
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<h2>Add Customer</h2>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<label>Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="number" name="phone" maxlength="10" class="form-control">
					</div>
					<div class="form-group">
						<label>City</label>
						<input type="text" name="city" class="form-control">
					</div>
					<input type="submit" name="submit" class="btn btn-info" value="Submit">
				</div>
			</div>
		</div>
		</form>
<div class="container">
<table class="table table-responsive">
<thead>
	<tr><td>Name</td><td>Phone</td><td>City</td>
	<td>Action</td><td></td>
	</tr>
</thead>
<tbody>
@foreach($customers as $customer)
<tr><td><?php echo $customer['name']; ?></td>
<td><?php echo $customer['phone']; ?></td>
<td><?php echo $customer['city']; ?></td>
<td><a href="/customers/{{$customer['id']}}" class="btn btn-success">Update</a></td>
<td><a href="/customers-delete/{{$customer['id']}}" class="btn btn-danger">Delete</a></td></tr>
@endforeach()
</tbody>
</table>
</div>
</body>
</html>