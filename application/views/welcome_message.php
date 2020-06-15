<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Dashboard</title>
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <h1 class="title">NewsScraper</h1>
        </div>

        <div class="logg">

        <?php if(!$this->session->userdata('logged_in')) : ?>
            <div class="login">
            <li class="logoutTit"><a class="logoutTit" href="<?php echo base_url(); ?>user/login">Login</a></li>
            </div>

            <div class="register">
            <li class="logoutTit"><a class="logoutTit" href="<?php echo base_url(); ?>user/create">Register</a></li>
            </div>
          <?php endif; ?>

          <?php if($this->session->userdata('logged_in')) : ?>
            <div class="logout">
            <li class="logoutTit"><a href="<?php echo base_url(); ?>user/logout" class="logoutTit">LogOut</a></li>
            </div>
          <?php endif; ?>
        
        </div>
    </div>

    <div class="cnt">

    <?php if($this->session->flashdata('user_loggedin')): ?>
        <script>
            swal("Success!", "You logged in correctly", "success");
        </script>
      <?php endif; ?>

        <div class="banner">

            <h1 class="reddit-title">LAST TOP10 REDDIT NEWS</h1>

        </div>

        <div class="cnt-data">

            <div class="top10">

                <?php include('loadPHPDom.php'); ?>

            </div>

          <?php if($this->session->userdata('logged_in')) {

                include('view.php'); 

                } else {
                    
                }

          ?>



        </div>

    </div>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

    <?php  if(!$this->session->userdata('logged_in')) : ?>
    

        <script>
 

            for(let i=0;i<10;i++){

            const btnsavePin = document.querySelectorAll('button.savePin')[i];

            btnsavePin.addEventListener('click', mustlogin);

            function mustlogin(e){
                swal("Error!", "You must login for saving this pin", "warning");
                e.preventDefault();
            }

            } 


        </script>


    <?php endif; ?>
</body>
</html>