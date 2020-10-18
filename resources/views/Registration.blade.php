<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h1 style="text-align: center">Employee Register</h1>
<div class="container">
  <div class="row">
     <div class="col-md-12">
     <form action="/action_page.php">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" placeholder="Lavkush Giri....." id="name" name="name">
  </div>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="lav@gmail.com" id="email" name="email">
  </div>

  <div class="form-group">
    <label for="username">User Name:</label>
    <input type="text" class="form-control" placeholder="lavkush98" id="username" name="username">
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" placeholder="************" id="password" name="password">
  </div>

  <div class="form-group">
    <label for="date_of_birth">Date of birth:</label>
    <input type="date" class="form-control" placeholder="10/05/1998" id="date_of_birth" name="date_of_birth">
  </div>

  <div class="form-group">
    <label for="mobile">Mobile:</label>
    <input type="mobile" class="form-control" placeholder="9999-777-222" id="mobile" name="mobile">
  </div>

  <div class="form-group">
  <label for="select">Designation List:</label>
  <select class="form-control" id="select" name="designation">
    <option>Developer</option>
    <option>UI/UX Developer</option>
    <option>business Developer</option>
    <option>Senior HR Executive</option>
  </select>
</div>

  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

     </div>
  </div>
</div>

</body>
</html>
