<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- css files -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/css/global.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/css/signin.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/css/signup.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/css/sidebar.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/css/admin.css" type="text/css" media="all" /> 
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
<!-- //web-fonts -->
    
</head>
<body style="height: 100%; overflow: hidden">
    <main class="" style="height: 100vh;">
        <div class="row h-100 g-0">
            <div class="col-2">
                <?php $this->render('admin/components/sidebar') ?>
            </div>
            <div class="col-10">
                <div class="bg-body">
                    <div class="p-3 d-flex justify-content-between">
                        <div class="section-search">
                            <div class="input-group">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="search" id="form1" class="form-control" placeholder="Search" />
                                </div>
                                <button type="button" class="btn btn-primary" data-mdb-ripple-init>
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="section-user-info d-flex gap-2">
                            <div class="avatar">
                                <img src="<?php echo _WEB_ROOT; ?>/public/assets/images/default-avatar.jpg" />
                            </div>
                            <div class="info d-flex flex-column">
                                <h3 class="username">Apollosuny</h3>
                                <span class="user-role">Superadmin</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $this->render($content, $sub_content); ?>
            </div>
        </div>
    </main>

    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>