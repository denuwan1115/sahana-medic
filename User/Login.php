<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.rtl.min.css"> 
    <link rel="stylesheet" href="./css/login_style.css">

    <title>Admin Login</title>

</head>

<body>

<form method="post" action="..\Controllers\handi.php">

<div class="container-fluid d-flex align-items-center justify-content-center" style="height:100vh;" id="log-page">
    <div class="container col-11 col-md-6  " id="container-center" >
        <div class="row  mt-4 ">
            <div class="container col-12 d-flex align-items-center justify-content-center">
                <h1 class="text-h col-12 col-sm-8" >LOG IN</h1>
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="container col-12 d-flex align-items-center justify-content-center">
                <input class=" col-12 col-sm-8" type="email" name="login-email" id="InputEmail1" placeholder="Enter Your Email" >
            </div>
        </div>
        <div class="row mt-4 ">
            <div class="container d-flex align-items-center justify-content-center">
                <input class=" col-12 col-sm-8" type="password" name="login-pw" id="InputPwd" placeholder="Enter Your Password" >
            </div>
        </div>
        <div class="row mt-4 mb-1">
            <div class="container d-flex align-items-center justify-content-center ">
                <button class="text-white text-button col-12 col-sm-8 btn text-a" type="submit" id="button"> 
                    Log in
                </button>
            </div>
        </div>
        <div class="row mt-1 mb-2">
                <div class="container d-flex align-items-center justify-content-center ">
                    or
                </div>
        </div>
        <div class="row  mb-5">
            <div class="container d-flex align-items-center justify-content-center ">
                <button class="text-white text-button col-12 col-sm-10 btnsub" type="submit" id="buttonLog"> 
                        <a href="Signup.php" class="text-b" >Sign Up</a> 
                </button>
            </div>
        </div>
</div>
</form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>