<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <a href="{{route('customer.create')}}">
        <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Confirm Password</th>
                    <th>Country</th>
                    <th>State</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $customers as $customer )
                    
                
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->password}}</td>
                    <td>{{$customer->confirm_password}}</td>
                    <td>{{$customer->country}}</td>
                    <td>{{$customer->state}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    
  </body>
</html>