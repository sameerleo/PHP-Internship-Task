<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <header class="container-fluid bg-primary h1 py-5 text-center">LogIn Page</header>
    <div class="container">
        <div class="row"> 
            <div class="col-md-4 my-5 border p-3 offset-md-4">
            <form method="post" action="process_login.php">
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" required class="form-control" id="exampleInputPassword1"  name="password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<p class="my-3">  Not Registered Yet <a href="userregistration.php">Click Here </a></p>
            </div>
        </div> 
    </div>
    <footer class="container-fluid bg-primary h6 py-2 text-center">&copy Designed by Sameeruddin</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>