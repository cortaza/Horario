<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/Style.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>

<body>
    <div class="wrapper fadeInDown">

        <div id="formContent">

            <!-- Tabs Titles -->
            <h2 class="active"> Iniciar sesion</h2>
            <h2 style="cursor:pointer;" name="hand" class="inactive underlineHover">
                <a class="a" href="{{route('signup')}}">Registrarse</a></h2>
            <br/>
            <br/>


            <!-- Icon -->
            <div class="fadeIn first">
                <img src="" id="icon" alt="User Icon" class="img" />
            </div>
            <br/>
            <!-- Login Form -->
            <form>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
                <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
                <br/>
                <br/>
                <a href="../templatemo_573_eduwell/index.html" style="cursor:pointer;" name="hand" type="submit" class="fadeIn fourth" value="Ingresar">Ingresar</a>
            </form>



            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Olvido su contraseña?</a>
            </div>

        </div>

    </div>


</body>

</html>

<style>
     @import url('https://fonts.googleapis.com/css?family=Poppins');
 /* BASIC */
 
 html {
     background-color: #fff;
 }
 
 body {
     font-family: "Poppins", sans-serif;
     height: 100vh;
 }
 
 a {
     color: #5EB319;
     display: inline-block;
     text-decoration: none;
     font-weight: 400;
 }
 
 .a {
     color: #0d0d0d;
     display: inline-block;
     text-decoration: none;
     font-weight: 400;
     
 }
 
 h2 {
     text-align: center;
     font-size: 16px;
     font-weight: 600;
     text-transform: uppercase;
     display: inline-block;
     margin: 40px 8px 10px 8px;
     color: #cccccc;
 }
 /* STRUCTURE */
 
 .wrapper {
     display: flex;
     align-items: center;
     flex-direction: column;
     justify-content: center;
     width: 100%;
     min-height: 100%;
     padding: 20px;
 }
 
 #formContent {
     -webkit-border-radius: 10px 10px 10px 10px;
     border-radius: 10px 10px 10px 10px;
     background: #fff;
     padding: 30px;
     width: 90%;
     max-width: 450px;
     position: relative;
     padding: 0px;
     -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
     box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
     text-align: center;
 }
 
 #formFooter {
     background-color: #f6f6f6;
     border-top: 1px solid #dce8f1;
     padding: 25px;
     text-align: center;
     -webkit-border-radius: 0 0 10px 10px;
     border-radius: 0 0 10px 10px;
 }
 /* TABS */
 
 h2.inactive {
     color: #cccccc;
 }
 
 h2.active {
     color: #0d0d0d;
     border-bottom: 2px solid #5EB319;
 }
 /* FORM TYPOGRAPHY*/
 
 input[type=button],
 a[type=submit],
 input[type=reset] {
     background-color: #5EB319;
     border: none;
     color: white;
     padding: 15px 80px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     text-transform: uppercase;
     font-size: 13px;
     -webkit-box-shadow: 0 10px 30px 0 #5EB319;
     box-shadow: 0 10px 30px 0 #5EB319;
     -webkit-border-radius: 5px 5px 5px 5px;
     border-radius: 5px 5px 5px 5px;
     margin: 5px 20px 40px 20px;
     -webkit-transition: all 0.3s ease-in-out;
     -moz-transition: all 0.3s ease-in-out;
     -ms-transition: all 0.3s ease-in-out;
     -o-transition: all 0.3s ease-in-out;
     transition: all 0.3s ease-in-out;
 }
 
 input[type=button]:hover,
 a[type=submit]:hover,
 input[type=reset]:hover {
     background-color: #5EB319;
 }
 
 input[type=button]:active,
 a[type=submit]:active,
 input[type=reset]:active {
     -moz-transform: scale(0.95);
     -webkit-transform: scale(0.95);
     -o-transform: scale(0.95);
     -ms-transform: scale(0.95);
     transform: scale(0.95);
 }
 
 input[type=text],
 input[type=password],
 input[type=email] {
     background-color: #f6f6f6;
     border: none;
     color: #0d0d0d;
     padding: 15px 32px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
     margin: 5px;
     width: 85%;
     border: 2px solid #f6f6f6;
     -webkit-transition: all 0.5s ease-in-out;
     -moz-transition: all 0.5s ease-in-out;
     -ms-transition: all 0.5s ease-in-out;
     -o-transition: all 0.5s ease-in-out;
     transition: all 0.5s ease-in-out;
     -webkit-border-radius: 5px 5px 5px 5px;
     border-radius: 5px 5px 5px 5px;
 }
 
 input[type=text]:focus,
 input[type=password]:focus,
 input[type=email]:focus {
     background-color: #fff;
     border-bottom: 2px solid #5EB319;
 }
 
 input[type=text],
 input[type=password],
 input[type=email]:placeholder {
     color: #cccccc;
 }
 /* ANIMATIONS */
 /* Simple CSS3 Fade-in-down Animation */
 
 .fadeInDown {
     -webkit-animation-name: fadeInDown;
     animation-name: fadeInDown;
     -webkit-animation-duration: 1s;
     animation-duration: 1s;
     -webkit-animation-fill-mode: both;
     animation-fill-mode: both;
 }
 
 @-webkit-keyframes fadeInDown {
     0% {
         opacity: 0;
         -webkit-transform: translate3d(0, -100%, 0);
         transform: translate3d(0, -100%, 0);
     }
     100% {
         opacity: 1;
         -webkit-transform: none;
         transform: none;
     }
 }
 
 @keyframes fadeInDown {
     0% {
         opacity: 0;
         -webkit-transform: translate3d(0, -100%, 0);
         transform: translate3d(0, -100%, 0);
     }
     100% {
         opacity: 1;
         -webkit-transform: none;
         transform: none;
     }
 }
 /* Simple CSS3 Fade-in Animation */
 
 @-webkit-keyframes fadeIn {
     from {
         opacity: 0;
     }
     to {
         opacity: 1;
     }
 }
 
 @-moz-keyframes fadeIn {
     from {
         opacity: 0;
     }
     to {
         opacity: 1;
     }
 }
 
 @keyframes fadeIn {
     from {
         opacity: 0;
     }
     to {
         opacity: 1;
     }
 }
 
 .fadeIn {
     opacity: 0;
     -webkit-animation: fadeIn ease-in 1;
     -moz-animation: fadeIn ease-in 1;
     animation: fadeIn ease-in 1;
     -webkit-animation-fill-mode: forwards;
     -moz-animation-fill-mode: forwards;
     animation-fill-mode: forwards;
     -webkit-animation-duration: 1s;
     -moz-animation-duration: 1s;
     animation-duration: 1s;
 }
 
 .fadeIn.first {
     -webkit-animation-delay: 0.4s;
     -moz-animation-delay: 0.4s;
     animation-delay: 0.4s;
 }
 
 .fadeIn.second {
     -webkit-animation-delay: 0.6s;
     -moz-animation-delay: 0.6s;
     animation-delay: 0.6s;
 }
 
 .fadeIn.third {
     -webkit-animation-delay: 0.8s;
     -moz-animation-delay: 0.8s;
     animation-delay: 0.8s;
 }
 
 .fadeIn.fourth {
     -webkit-animation-delay: 1s;
     -moz-animation-delay: 1s;
     animation-delay: 1s;
 }
 /* Simple CSS3 Fade-in Animation */
 
 .underlineHover:after {
     display: block;
     left: 0;
     bottom: -10px;
     width: 0;
     height: 2px;
     background-color: #5EB319;
     content: "";
     transition: width 0.2s;
 }
 
 .underlineHover:hover {
     color: #0d0d0d;
 }
 
 .underlineHover:hover:after {
     width: 100%;
 }
 /* OTHERS */
 
 *:focus {
     outline: none;
 }
 
 #icon {
     width: 70px;
     height: 80px;
 }
 
 * {
     box-sizing: border-box;
 }
 
 #typeDocument {
     padding: 20px;
     width: 380px;
     background-color: rgba(223, 220, 220, 0.197);
     margin: 5px;
     color:rgba(0, 0, 0, 0.725);
     border-style: double;
     border:none;
 }
 
 option {
     background-color: rgb(255, 255, 255);
     text-align: center;
     padding: 70px;
     color: rgb(0, 0, 0);
 }
 

</style>