<!DOCTYPE html>
<html>
<head>
    <title> Show Data User</title>
</head>
<body>
    <h1>User - Show Data</h1>
    <br>

  <table border="2">
  <tr>
  <td>First Name</td>
  <td>Last Name</td>
  <td>Email Address</td>
  <td>Phone Number</td>
  <td>Message</td>

  </tr>
  @foreach($myusers as $item)
  <tr>
  <td>{{ $item->first }}</td>
  <td>{{ $item->last }}</td>
  <td>{{ $item->email }}</td>
  <td>{{ $item->phone }}</td>
  <td>{{ $item->message}}</td>
    
  @endforeach
  </table>
  <br>
 <a href="{{URL::to('/create')}}">Insert</a>

</body>
</html>