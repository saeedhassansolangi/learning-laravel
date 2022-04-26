<!DOCTYPE html>
<html lang="en">

<head>
  <title>Post/{{$postId}}</title>
</head>

<style>
  .postId {
    color: red;
    font-size: 50px;
    font-weight: bolder;
  }

  p {
    font-size: 50px;
    color: darkblue;
    font-weight: bolder;
  }
</style>

<body>

  <h1>You visit Post <span class='postId'> {{$postId}}</span> </h1>
  <p>{{$adminName}}</p>

  <ul>
    <li>Total Users: {{count($users)}}
      <ul>
        <li>{{$users[0]}}</li>
        <li>{{$users[1]}}</li>
        <li>{{$users[2]}}</li>
      </ul>
    </li>
  </ul>
</body>

</html>