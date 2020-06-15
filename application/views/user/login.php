<h2><?php $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('user/login'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password"></input>
  </div>
  <button type="submit" class="btn btn-primary" style="background-color: #E64C60;border:none;">Submit</button>
</form>