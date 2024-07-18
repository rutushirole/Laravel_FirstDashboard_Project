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

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>


   <br>
   <br>

   <center><h1 class="text-primary">Customer Registration</h1></center>
   

    <div class="container">
    
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