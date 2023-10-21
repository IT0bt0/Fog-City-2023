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
        background: url('images/login.jpeg') center center no-repeat;
        background-size:cover;
    }
    .form-container {
        width: 300px;
        height: 330px;
        overflow: hidden;
        position: relative;
    }
    .register {
        width: 300px;
        height: 300px;
        background: rgb(149,0,255);
        background: linear-gradient(45deg, rgb(192 177 8) 0%, rgb(172 124 49) 25%, rgb(183 182 0) 52%, rgb(169 165 14) 76%, rgba(0,78,255,1) 98%);
        background-size: 300%;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center; 
        animation: bg-animation 5s infinite alternate;
    }
    .title {
        text-align: center;
        padding-top: 50px;
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
        background-color: #cac9d4;
        color: black;
    }

    .btn {
        padding: 10px 30px;
        border-radius: 5px;
        background-color: #00b4d8;
        color: white;
        border: none;
    }

    .dark-btn {
        background-color: #0077b6;
    }

    .login {
        width: 300px;
        height: 450px;
        background-color: #ffffff;
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
            <h2 class = 'title register-hover'>Reset Password</h2>
            <form action="backend/forgot.php" method="post" class = 'form'>
                <input type="email" id="email" name="email" required placeholder="Enter Your Email"><br>
                <button type="submit" name="forgot" class='btn'>Send Email</button>
            </form>
        </div>
    
    </div>

</div>
    


<?php
require_once('footer.php');
?>