
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Simple Crud Application</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../../dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        
</head>
<body>
  
  <div class="section no-pad-bot" id="index-banner">
  <h3 class="header center orange-text">Create Section</h3>
    <div class="container">
      <br><br>
      
  <div class="container">
    <form action="/posts" method="POST">

        <?php echo csrf_field(); ?>

        <div class="row">
    <div class="input-field col s4">
      <input value="" id="name" type="text" class="validate" placeholder="Name" name="name">
      <label class="active" for="name">Name:</label>
    </div>
    <div class="input-field col s4">
      <input value="" id="course" type="text" class="validate" placeholder="Course" name="course">
      <label class="active" for="course">Course:</label>
    </div>
    </div>

  <div class="row">
  <div class="input-field col s3">
      <input value="" id="age" type="text" class="validate" placeholder="Age" name="age">
      <label class="active" for="age">Age:</label>
    </div>
  <div class="input-field col s3">
      <input value="" id="status" type="text" class="validate" placeholder="Status" name="status">
      <label class="active" for="status">Status:</label>
    </div>

  <div class="input-field col s6">
      <input value="" id="previous_job" type="text" class="validate" placeholder="Previous Job" name="previous_job">
      <label class="active" for="previous_job">Previous Job:</label>
    </div>

  <button class="btn waves-effect waves-light">Submit
  </button>
    </form>
    <a href="/posts" class="btn waves-effect waves-light">Back
  </a>
  </div>
  </div>
  </div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../../bin/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="js/javascript"> 
  $(document).ready(function() {
    M.updateTextFields();
  });
  </script>
 
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\simple_crud\resources\views/posts/create.blade.php ENDPATH**/ ?>