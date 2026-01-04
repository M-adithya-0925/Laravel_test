<!DOCTYPE html>
<html>
<head>
    <title>Simple Laravel Form</title>
</head>
<body>

<h2>Enter Details</h2>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<form method="POST" action="/store">
    @csrf

    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <button type="submit">Save</button>
</form>

</body>
</html>
