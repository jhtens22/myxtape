<?php 
    require_once('./header.php');
?>
<div class="heading text-center mt-5">
    <h1>Register</h1>
    <img src="./img/logo_transparent_background.png" alt="Myxtape logo" width="150px" height="150px">
</div>
<section id="register_form">
    <form method="POST" action="user_insert.php">
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="mb-3 col-6">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="mb-3 col-6">
                <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="mb-3 col-6">
                <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="mb-3 col-6">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="text-center mt-3">
            <input type="submit" class="btn text-center" value="Register" />
        </div>
    </form>
</section>


<?php 
    require_once('./footer.php');
?>