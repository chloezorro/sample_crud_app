
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
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      
      
    
  


  <div class="container">
    <form action="/posts/<?php echo e($post->id); ?>" method="POST">
    
        <?php echo method_field('PUT'); ?>

        <?php echo csrf_field(); ?>


        <div class="row">
    <div class="input-field col s4">
      <input value="<?php echo e($post->name); ?>" id="name" type="text" class="validate" placeholder="Name" name="name">
      <label class="active" for="name">Name:</label>
    </div>
    <div class="input-field col s4">
      <input value="<?php echo e($post->course); ?>" id="course" type="text" class="validate" placeholder="Course" name="course">
      <label class="active" for="course">Course:</label>
    </div>
    </div>

  <div class="row">
  <div class="input-field col s3">
      <input value="<?php echo e($post->age); ?>" id="age" type="text" class="validate" placeholder="Age" name="age">
      <label class="active" for="age">Age:</label>
    </div>
  <div class="input-field col s3">
      <input value="<?php echo e($post->status); ?>" id="status" type="text" class="validate" placeholder="Status" name="status">
      <label class="active" for="status">Status:</label>
    </div>

  <div class="input-field col s6">
      <input value="<?php echo e($post->previous_job); ?>" id="previous_job" type="text" class="validate" placeholder="Previous Job" name="previuos_job">
      <label class="active" for="course">Previous Job:</label>
    </div>

  <button class="btn waves-effect waves-light">Submit
  </button>
    </form>
  </div>
  </div>
  </div>
  <footer class="page-footer orange" style="position: absolute; bottom: 0; width: 100%;
">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3">Rodel Christian Aranas</a>
      </div>
    </div>
  </footer>


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
<?php /**PATH C:\xampp\htdocs\laravel\simple_crud\resources\views/applicants/edit.blade.php ENDPATH**/ ?>