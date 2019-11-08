<!DOCTYPE html>
<html>
<head>
<title>Show Data User</title>
</head>

<body>
<h1>User-Show Data</h1>
<br>
<table border="2">
<tr>
   <td>No. </td>
   <td>Nama</td>
   <td>Email</td>
   <td>Birthdate</td>
   <td>Action</td>
</tr>
@foreach($myusers as $item)
<tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->email }}</td>
    <td>{{ $item->birthdate }}</td>
    
    <td><a href = "{{URL::to('/delete/id',$item->id)}}"><input type="submit" value="Delete">
</tr></a></td>
@endforeach
</table>
<br>
<a href="{{URL::to('/create')}}">Insert</a>


</body>
</html>