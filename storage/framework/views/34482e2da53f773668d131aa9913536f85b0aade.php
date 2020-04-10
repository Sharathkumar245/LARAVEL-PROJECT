<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Uploading a bug</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
      .c
      {
        color: white;
        background-color: rgb(6, 18, 44);
        border-radius: 10px;
        opacity: 0.75;
      }
      .c:hover
      {
        border-radius: 20px;
        opacity: 1.0;
        transition-duration: 0.2s;
        transition-delay: 0.2s;
      }
  </style>
</head>
<body class="con">
    <div class="container ">
        <div class="col-lg-12">
<form action="/read" method="POST" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<h2 class="text-center">Select file to upload</h2>
<br>
<br>
<input type="file" name="upfile">
<br>
<button name="submit" class="form-control c">Upload</button>
<br>
<p class="text-right">Please upload the png, jpg, jpeg, mp3, mp4, pdf.</p>
</form>
</div>
</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarsbootsdtrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sharath\manilara\resources\views/uploadbug.blade.php ENDPATH**/ ?>