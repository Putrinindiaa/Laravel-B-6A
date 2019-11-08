<!DOCTYPE html>
<html>
<head>
    <title>User create</title>
    </head>
    <body>
    <h1>User - Create</h1>
    <br>
    <form action="{{URL::to('/adduser')}}" method="POST">
        {!! csrf_field()!!}
        Name: <input type="text" name="name">
        <br>
        Email: <input type="text" name="email">
        <br>
        Password: <input type="Password" name="password">
        <br>
        Birth date: <input type="date" name="birthdate">
        <br>
        <input type="submit" value="Add User"> 
    </body>
</html>
