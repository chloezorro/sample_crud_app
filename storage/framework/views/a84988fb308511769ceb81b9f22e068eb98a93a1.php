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
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        
</head>
<body>
  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Simple Crud Application</h1>
      <br><br>
    
     <div class="row-center">
     <table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Course</th>
              <th>Age</th>
              <th>Status</th>
              <th>Previous Job</th>
              <th>Actions</th>
          </tr>
        </thead>

        <tbody>
       
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td><?php echo e($post->name); ?></td>
        <td><?php echo e($post->course); ?></td>
        <td><?php echo e($post->age); ?></td>
        <td><?php echo e($post->status); ?></td>
        <td><?php echo e($post->previous_job); ?></td>
        <td><a href="/posts/<?php echo e($post->id); ?>/edit">Edit<a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
        </tbody>
      </table>
     </div>
<br><br>
     <a href="posts/create" class="btn waves-effect waves-light">Add Data
  </a>
    </div>
  </div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../../bin/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\simple_crud\resources\views/posts/index.blade.php ENDPATH**/ ?>