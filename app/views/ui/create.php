<!DOCTYPE html>
<html>
<head><title>Create Student</title></head>
<body>
<h1>Create Student</h1>
<form method="post" action="/users/create">
  <label>First Name:</label><input type="text" name="first_name"><br>
  <label>Last Name:</label><input type="text" name="last_name"><br>
  <label>Email:</label><input type="email" name="email"><br>
  <button type="submit">Save</button>
</form>
<a href="/users">⬅ Back</a>
</body>
</html>
