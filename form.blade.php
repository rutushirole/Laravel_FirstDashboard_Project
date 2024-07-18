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

    

   
   <center><h1 class="text-primary">Customer Registration</h1></center>

    <div class="container bg-dark">
    <form action="{{url('/')}}/customer" method="POST">
        @csrf
      <div class="form-row">
        <div class="form-group col-md-6 required">
          <label for="inputEmail4">Name</label>
          <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Name">
        </div>
        <div class="form-group col-md-6 required">
          <label for="inputPassword4">Email</label>
          <input type="text" class="form-control" name="email" id="inputPassword4" placeholder="Email">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6 required">
          <label for="inputEmail4">Password</label>
          <input type="password" class="form-control" name="password" id="inputEmail4" placeholder="Password">
        </div>
        <div class="form-group col-md-6 required">
          <label for="inputPassword4"> Confirm Password</label>
          <input type="password" class="form-control" name="confirm_password" id="inputPassword4" placeholder=" Confirm Password">
        </div>
      </div>

      <div class="form-row">
        
        <div class="form-group col-md-6">
          <label for="inputEmail4">Country</label>
          <input type="text" class="form-control" name="country" id="inputEmail4" placeholder="Country">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">State</label>
          <input type="text" class="form-control" name="state" id="inputPassword4" placeholder="State">
        </div>
      </div>

           <button type="submit" class=" container btn btn-primary">Submit</button>
    </form>
  </div>


    
    
    
  </body>
</html>