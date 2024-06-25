<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <Form action="/register" method="post">
        @csrf
    <h1>Buat Account Baru</h1>
    <h1>Sign Up Form</h1>
    <label>First name:</label><br><br>
    <input type="text" name="firstName"><br>
    <p>Last name:</p>
    <input type="text" name="lastName"><br><br>
    <label>Gender:</label><br><br>
    <input type="radio" name="gender">Male<br>
    <input type="radio" name="gender">Female<br>
    <input type="radio" name="gender">Other<br><br>
        <label>Nationality:</label> <br><br>
        <select name="Indonesia">
        <option value="Indonesia">Indonesia</option>
        <option value="Malaysia">Malaysia</option>
        <select><br><br>
        <label>Languange Spoken:</label><br><br>
        <input type="checkbox" name="Languange Spoken">Basaha Indonesia<br>
        <input type="checkbox" name="Languange Spoken">English<br>
        <input type="checkbox" name="Languange Spoken">Other<br><br>
        <label>Bio:</label><br><br>
        <textarea name="message" rows="10" cols="30"></textarea>
        <br><br>
        <input type="submit" value="Sign Up">
 </Form>


</body>
</html>