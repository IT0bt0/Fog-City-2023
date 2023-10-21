<?php
require_once('header.php');
?>

<style>

    .about
    {
    background:url('https://s-media-cache-ak0.pinimg.com/736x/f4/ac/6a/f4ac6aac3afb587f6cae04155656fca3.jpg');
    }

    .containers
    {
    width:550px;
    height:100vh;
    margin-left:10px;
    
    }

    .pic
    {
    box-shadow: 6px 6px 7px #888888;
    width:300px;
    height:300px;
    position: relative;
    overflow: hidden;
    margin-top:100px;
    margin-left:135px;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    }
    .pic:before
    {
    content: '';
    margin-top:-63px;
    margin-left:-80px;
    position: absolute;
    width: 450px;
    height: 450px;
    background: url('http://ultraimg.com/images/a0ed6d.jpg') center center;
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    }

    .pic:hover , .box1:hover , .box2:hover , .social1:hover , .social2:hover , .social3:hover 
    {
    box-shadow: 3px 3px 7px #888888;
    cursor:pointer;
    }

    .box1
    {
    box-shadow: 6px 6px 7px #888888;
    width:100px;
    height:100px;
    position: relative;
    overflow: hidden;
    margin-top:-124px;
    margin-left:16px;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    }
    .box1:before
    {
    content: '';
    margin-top:-25px;
    margin-left:-31px;
    position: absolute;
    width: 200px;
    height: 200px;
    background: url('http://creek.themebucket.net/wp-content/uploads/2015/09/8.jpg') center center;
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    }

    .box2
    {
    box-shadow: 6px 6px 7px #888888;
    position: relative;
    overflow: hidden;
    width:194px;
    height:99px;
    margin-top:14px;
    margin-left:78px;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    }
    .box2:before
    {
    
    content: '';
    margin-top:-74px;
    margin-left:-31px;
    position: absolute;
    width: 300px;
    height: 300px;
    background: url('http://i-cdn.phonearena.com/images/articles/220901-image/Here-is-how-the-start-screen-of-Google-Maps-looks-like.jpg') center center;
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    }

    .social1
    {
    box-shadow: 6px 6px 7px #888888;
    width:80px;
    height:80px;
    background-color:#3b5998;
    margin-top:-57px;
    margin-left:305px;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    }

    .social1 > i
    {
    font-size:60px;
    margin-top:13px;
    margin-left:20px;
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    color:#ffffff;
    }

    .social2
    {
    box-shadow: 6px 6px 7px #888888;
    width:80px;
    height:80px;
    background-color:#C73B6F;
    margin-top:-142px;
    margin-left:370px;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    }
    .social2 > i
    {
    font-size:60px;
    margin-top:8px;
    margin-left:13px;
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    color:#ffffff;
    }

    .social3
    {
    box-shadow: 6px 6px 7px #888888;
    width:80px;
    height:80px;
    background-color:#000000;
    margin-top:-143px;
    margin-left:435px;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    }
    .social3 > i
    {
    font-size:60px;
    margin-top:9px;
    margin-left:9px;
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    color:#ffffff;
    }

    .content
    {
    height:100%;
    width:500px;
    margin-top: 5%;
    margin-bottom: 5%;
    }

    p
    {
    font-family: 'Open Sans Condensed', sans-serif;
    }

    h2
    {
    font-family: 'Dancing Script', cursive;
    }

    .contentHead
    {
    font-family: 'Open Sans Condensed', sans-serif;
    font-size:60px;
    font-weight:500;
    text-decoration:underline;
    }

    sup
    {
    font-family: 'Open Sans Condensed', sans-serif;
    font-style: italic;
    font-size:smaller;
    }

    span
    {
    color:pink;
    }


</style>

<div class="about">

    <div class="row">
        <div class="containers col-lg-6 col-md-6">
        
        <div class="pic"></div>
        
        <div class="box1"></div>
        <div class="box2"></div>
        
        <div class="social1">
            <i class="fa fa-facebook" aria-hidden="true"></i> 
        </div>
        <div class="social2">
        <i class="fa fa-youtube" aria-hidden="true"></i>
        </div>
        <div class="social3">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </div>
        </div>

        <div class="content col-md-offset-6 col-lg-offset-6">
        <center><h1 class="contentHead">ABOUT ME</h1></center>
        
            <br/><br/><h2>Hi Everyone, <br/><br/>
            Hey, we are a website specialized in booking tourist tickets and events, and our goal is to give the tourist the best tourism experience in the city of Al Bahah.
            <br/><br/>

        </h2>
        </div>
    </div>   


</div>


<?php
require_once('footer.php');
?>