<?php
require_once('header.php');
?>


<style>
    #fh5co-header-section
    {
        background: black;
    }
    .form1{
        margin-top: 4%;
        display: flex;
        justify-content: center;
        align-items: center;
        height:100vh;
        background: url('images/log99.jpg') center center no-repeat;
        background-size:cover;
    }
    .form-container {
        width: 300px;
        height: 430px;
        overflow: hidden;
        position: relative;
    }
    .register {
        width: 300px;
        height: 400px;
        background: rgb(149,0,255);
        background: gray;
        background-size: 300%;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center; 
        animation: bg-animation 5s infinite alternate;
    }
    .title {
        text-align: center;
        padding-top: 10px;
        font-family: 'Baloo 2', cursive;
        font-size: 28px;
        font-weight: 700;
        color: white;
        
    }

    .black {
        color: black;
    }

    .form {
        margin-left: 0px;
        display: flex;
        flex-direction: column;
        align-items: center; 
    }

    input,select {
        padding: 5px;
        border-radius: 5px;
        border: none;
        background-color: #fff;
        color: black;
    }

    .btn {
        padding: 10px 30px;
        border-radius: 5px;
        background-color: black;
        color: #fff;
        border: none;
    }

    .dark-btn {
        background-color: #0077b6;
    }

    .login {
        width: 300px;
        height: 450px;
        background-color: black;
        border-radius: 50px;
        position: absolute;
        top: 475px;
        transition: 0.3s ease-out;
        
    }

    .login:hover {
        top: 70px;
        border-radius: 10px;
    }

    .login:hover + .register-hover {
        font-size: 20px;
    }

    @keyframes bg-animation {
        0% {
            background-position: left;
        }
        
        100% {
            background-position: right;
        }
    }


</style>

<div class="form1">

    <div class = 'form-container'>
        <div class = 'register'>
            <h2 class = 'title register-hover'>Log In</h2>
            <form action="backend/access.php" method="post" class = 'form'>
                <input type="text" id="username" name="email" required placeholder="Email"><br>
                <input type="password" id="password" name="password" required placeholder="Password"><br>
                <p><button type="submit" name="login" class = 'btn dark-btn'>Login</button></p>
                <a href="forgot.php" style="color:white;">Forgot Password?</a>
                <br>
                <a href="signup.php" style="color:white;">Not have account?</a>
                
                
            </form>
        </div>
    </div>

</div>
    


<?php
require_once('footer.php');
?>