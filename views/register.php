<h1 class="text-center">Register</h1>
<form action="" method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input 
        type="text" 
        name="name" 
        value="<?php echo $model->name ?>"  
        class="form-control<?php echo $model->hasError('name') ? ' is-invalid' : '' ?>" 
      >
      <div class="invalid-feedback">
         <?php echo $model->getErrorMessage('name') ?>
      </div>

    <label class="form-label">Email</label>
    <input 
        type="text" 
        class="form-control<?php echo $model->hasError('email') ? ' is-invalid' : '' ?>" 
        name="email"
        value="<?php echo $model->email ?>"  
      >
      <div class="invalid-feedback">
         <?php echo $model->getErrorMessage('email') ?>
      </div>
    <label class="form-label">Password</label>
    <input 
        type="password" 
        class="form-control<?php echo $model->hasError('password') ? ' is-invalid' : '' ?>"
        name="password"
        value="<?php echo $model->password ?>"  
      >
      <div class="invalid-feedback">
         <?php echo $model->getErrorMessage('password') ?>
      </div>
    <label class="form-label">Confirm Password</label>
    <input 
        type="password" 
        class="form-control<?php echo $model->hasError('confirm_password') ? ' is-invalid' : '' ?>"
        name="confirm_password" 
        value="<?php echo $model->confirm_password ?>" 
      >
      <div class="invalid-feedback">
         <?php echo $model->getErrorMessage('confirm_password') ?>
      </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>