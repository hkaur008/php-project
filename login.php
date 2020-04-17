<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6">
        
        <h2> login here</h2>
    <form action="validation.php" method="post">

    <div class="form-group">
        <label>username</label>
        <input type="text" name="username" class="form-control" required>
         </div>

         <div class="form-group">
        <label>password</label>
        <input type="password" name="password" class="form-control" required>
         </div>
        <button type="submit" class="btn btn-primary">submit</button>
         </form>
            </div>
<div class="col-md-6">
        
        <h2> SIGN UP </h2>
    <form action="registration.php" method="post">

    <div class="form-group">
        <label>username</label>
        <input type="text" name="username" class="form-control" required>
         </div>

         <div class="form-group">
        <label>password</label>
        <input type="password" name="password" class="form-control" required>
         </div>
        <button type="submit" class="btn btn-primary">submit</button>
         </form>
            </div>
</div>
</div>
</body>
</html>