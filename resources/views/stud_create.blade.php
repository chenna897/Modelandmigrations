<!DOCTYPE html>
<html>
<head>
<title>Student Management | Add</title>
<style>
li{
	list-style: none;
}
</style>
</head>
<body>
<form action = "/create" method = "post" id="userdetail">
	<script>
		document.getElementById('userdetail').addEventListener('submit', function(event){
    if(document.getElementById('terms').checked == false){
        event.preventDefault();
        alert("By Add student, you must accept our terms and conditions!");
        return false;
    }
});
	</script>
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<br><br><br>
<div style="background-color: #0000003b;margin: 65px auto 0;padding:53px 0;height: 300px;  box-shadow: 5px 8px 8px 7px #888888;width: 30%;align:center">
<h2 align="center"><span style="color:white;">Insert Student Details</span></h2>
@if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li style="color:green;">&emsp;&emsp;&emsp;&emsp;{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif
<table align="center">
<tr>
<td>First Name<sup><span style="color:red">*</span></sup></td>
<td><input type='text' name='first_name' required pattern="[A-Za-z]{3,}" placeholder="Enter your firstname" /></td>
<tr>
<td>Last Name<sup><span style="color:red">*</span></sup></td>
<td><input type="text" name='last_name' required pattern="[A-Za-z]{3,}" placeholder="Enter your lastname" /></td>
</tr>
<tr>
<td>City Name<sup><span style="color:red">*</span></sup></td>
<td>
<select name="city_name" required>
<option value="">Selet One City</option>
<option value="AAA">AAA</option>
<option value="BBB">BBB</option>
</select></td>
</tr>
<tr>
<td>Email<sup><span style="color:red">*</span></sup></td>
<td><input type="email" name='email' required  placeholder="Enter email id" /></td>
</tr>
</tr>
<tr>
	<td>Phone Number<sup><span style="color:red">*</span></sup></td>
	<td><input type="text" name='phone' required 
       maxlength="10" pattern="[6789]{1}[0-9]{9}" placeholder="Enter 10 digit mobile number" /></td>
</tr>
<tr>
<td>Select Type<sup><span style="color:red">*</span></sup></td>
<td>
<select name="enum" required>
<option value="">Select One Type</option>
<option value="type1">type1</option>
<option value="type2">type2</option>
<option value="type3">type3</option>
</select></td>
</tr>
<tr>
	<td><input type="checkbox" name="check" name="terms" id="terms" >Terms&Conditions<sup><span style="color:red">*</span></sup></td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Add student"/>
</td>
</tr>
</table>
</div>
</form>
</body>
</html>