<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Table</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
           <h3>Add New User</h3>
           <p class="text-muted">Complete the form below to add a new user</p>
        </div>

        <div class="container d-flex justify-content-center">
           <form action="" method="post" style="width:50vw; min-width:300px;">
            <?php echo csrf_field(); ?>
              <div class="row mb-3">

                 <div class="col">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" >
                 </div>
              </div>

              <div class="mb-3">
                 <label class="form-label">Email:</label>
                 <input type="email" class="form-control" name="email" >
              </div>

              <div class="form-group mb-3">
                 <label>Gender:</label>
                 &nbsp;
                 <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                 <label for="male" class="form-input-label">Male</label>
                 &nbsp;
                 <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                 <label for="female" class="form-input-label">Female</label>
              </div>

              <div>
                 <button type="submit" class="btn btn-success" name="submit">Save</button>
                 <a href="index.php" class="btn btn-danger">Cancel</a>
              </div>
           </form>
        </div>
     </div>

</body>

</html>
<?php /**PATH D:\xamp\htdocs\user_crud\resources\views/addfield.blade.php ENDPATH**/ ?>