<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form action="myaccountdb.php">
<div class="form-group">
  <label for="email">Email address:</label>
  <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
</div>
<div class="form-group form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox"> Remember me
  </label>
</div>
<button type="submit" class="btn btn-primary">LOG IN</button>
</form>

</body>
</html>

