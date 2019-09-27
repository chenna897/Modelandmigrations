<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
	<br><br><br>
	<h2 style="color:blue; text-align:center;">View Student Records</h2>
<table border = "1" align="center" style="font-size: 20px;">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>City Name</td>
<td>Email</td>
<td>Phone Number</td>
<td>Type of Student</td>
<td>Created At</td>
<td>Updated At</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->first_name }}</td>
<td>{{ $user->last_name }}</td>
<td>{{ $user->city_name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->phone }}</td>
<td>{{ $user->enum }}</td>
<td>{{ $user->created_at }}</td>
<td>{{ $user->updated_at }}</td>
</tr>
@endforeach
<tr>
	<td><a href="/insert">ADD</a></td>
	<td><a href="/view-records">view</a></td>
	<td><a href="/edit-records">Edit</a></td>
	<td><a href="/delete-records">Delete</a></td>
</tr>

</table>
</body>
</html>
