<html>
    <head>
        <title>RecipeApp</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>

    <style>

      body{
        background: #303F50;
      }

      label{
        color: #fff;
      }

      p{
        color: red;
      }

      </style>
</body>
<nav class="navbar" style="background-color:#E64C60;">
  <a class="navbar-brand" href="<?php base_url(); ?>" style="color:#fff; text-decoration:none;">
    <img src="https://a.thumbs.redditmedia.com/08tpP0BeZkMyb7QKRqpLfskGb0dRHf8pi8d4oEoxPT4.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    NewsScraper
  </a>
</nav>
<div class="container">

      <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>