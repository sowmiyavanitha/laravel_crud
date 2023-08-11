<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>
<body>
    <div class="container">
    <div class="list-head">
        <a href="<?php echo e(url('/addfield')); ?>" class="btn btn-dark mb-3">Add New</a>

        <form  action="<?php echo e(url('search/')); ?>" method="GET" style="float:right; display:flex;">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>search</label>
                <input type="search" name="search" placeholder="search here" >
            </div>
        </form>
    </div>
        <table class="table table-hover text-center">
          <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Gender</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php $__currentLoopData = $newuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newusers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($newusers->id); ?></td>
                <td><?php echo e($newusers->name); ?></td>
                <td><?php echo e($newusers->email); ?></td>
                <td><?php echo e($newusers->gender); ?></td>
                <td></td>

                <td>
                  <a href="<?php echo e(url('editfield',$newusers->id)); ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                  <a href="<?php echo e(url('delete',$newusers->id)); ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                </td>
              </tr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>

</body>
</html>
<?php /**PATH D:\xamp\htdocs\user_crud\resources\views/userlist.blade.php ENDPATH**/ ?>