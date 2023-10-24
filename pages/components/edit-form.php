 <?php
    include "../controllers/edit.php"
    ?>

 <h2>Edit employee</h2>
 <?php
    if (!empty($errorMessage)) {
        echo "
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong>$errorMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                ";
    }
    ?>

 <form method="post">
     <input type="hidden" name="id" value="<?php echo $id; ?>">
     <div class="mb-3">
         <label class="form-label">Name</label>
         <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
     </div>
     <div class="mb-3">
         <label class="form-label">Email</label>
         <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
     </div>
     <div class="mb-3">
         <label class="form-label">Phone</label>
         <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
     </div>
     <div class="mb-3">
         <label class="form-label">Address</label>
         <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
     </div>
     <?php
        if (!empty($successMessage)) {
            echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                ";
        }
        ?>
     <div class="mb-3">
         <button class="btn btn-primary" type="submit">Submit</button>
         <a class="btn btn-outline-primary" href="../../index.php" role="button">Cancel</a>
     </div>
 </form>