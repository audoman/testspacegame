<!DOCTYPE html>
<html>
<link href="/css/bootstrap.min.css" rel="stylesheet" > 
<link href="/css/custom.css" rel="stylesheet" > 
<script src="/js/bootstrap.bundle.min.js" ></script> 

<body class="blackgb">

<h1 class="display-1 blackgb "> Computer waiting for input</h1><p>
  <span class="blink">....</span>
</p>
<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group cursor">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                            <i></i>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>charactername</label>
                            <input type="text" name="charactername" class="form-control">
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>




</body>
</html> 