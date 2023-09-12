<!DOCTYPE html>
<head>
    <title>Contact us</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Bad Script|Montserrat" rel="stylesheet" />
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
       }
       body{
        
        font-family: "Montserrat", sans-serif;
        color: #141e30;
        overflow: hidden;
       }
        #left{
            width: 60vw;
            height: 100vh;
            background-color: #fff5ee;
        }
        #right{
            width: 40vw;
            height: 100vh;
            background-color: #fff;
        }
        .inner{
            box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
            width: 70vw;
            height: 70vh;
            position: absolute;
            top: 100px;
            left: 223px;
            right: 200px;
            bottom: 200px;
            z-index: 1;
        }
        .container{
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 10;
        }
        .left{
            width: 65%;
            height: 100%;
            background-color: #fff;
            float: left;
            padding-left: 60px;
            
        }
        .right{
            width: 35%;
            height: 100%;
            background-color: #F3CFC6;
        /*    #e0bfb8; */
            float: left;
        }
        .txt{
            margin-left: 60px;
            width: 400px;
            height: 150px;
            resize: none;
            border-color: #ddd;
            outline-color: #ececec;
        }
        .send{
        background:#C9A9A6;
        padding: 15px;
        color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        border: none;
        transition: all 0.5s ease-in-out;
        border-radius: 10px 10px 10px 10px;
        cursor: pointer;
        margin-left: 400px;
        }
        .send:hover {
        border-radius: 30px 30px 30px 30px;
        transition: all 0.5s ease-in-out;
      }
      .send:hover .fa-paper-plane{
        transform: rotate(24deg);
      }
      .fa-paper-plane{
        padding-left: 5px;
        transition: all 0.5s ease-in-out;
      }
      .l-header{
        padding-left: 560px;
      }
      .r-header{
        margin-bottom: 40px;
      }
      h1{
         padding-bottom: 50px;
        padding-top: 20px;
        text-transform: uppercase;
        font-weight: 800;
      }
      .fa-window-minimize{
        position: absolute;
        top:8%;
        left: 64%;
        font-size: 40px;
        color: #C9A9A6;
      }
      h3{
        margin-left: 30px;
      }
      .icon{
        font-size: 35px;
        padding-top: 100px;
      }
      .info{
        margin-left: 60px;
      }
      @media (max-width: 1200px) {
        .send{
            margin-left: 200px!important;
        }
        .txt{
            width: 300px!important;
            height: 120px!important;
      }
    }
    @media (max-width: 970px) {
        .txt{
            width: 200px!important;
            height: 90px!important;
      }
    }

      @media (max-width: 780px) {
        .send{
            margin-left: 100px!important;
        }
        .txt{
            margin-left: -10px!important;
            width: 170px!important;
            height: 70px!important;
        }
      }
      @media (max-width: 600px) {
        .inner{
            width: 100vw!important;
            height: 100vh!important;
            top: 0!important;
            left: 0!important;
}
      }

      .boton {
        margin-top: 60px;
        margin-left: 180px;
        position: relative;
        width: 133px;
        height: 35px;
        border-radius: 30px;
        background-color: white;
        border: 1px #00acee solid;
        overflow: hidden;
        cursor: pointer;
      }

      .text1 {
        font-size: 17px;
        font-weight: 700;
        margin-left: 30%;
      }

      .text2 {
        position: absolute;
        top: 25%;
        left: -60px;
        font-weight: 700;
        font-size: 14px;
        color: white;
      }

      .iconn {
        position: absolute;
        top: 0;
        left: 0;
        font-size: 20px;
        z-index: 2;
        color: #fff;
        transition: transform 0.5s;
      }
      .fa-twitter{
        padding-left: 5px;
        padding-top: 5px;
      }
      .iconn::before {
        position: absolute;
        left: -100px;
        top: 0;
        z-index: -1;
        content: "";
        width: 130px;
        height: 33px;
        border-radius: 30px;
        background-color: #00acee;
      }

      .boton:hover .iconn {
        transform: translateX(101px);
        transition: transform 0.5s;
      }
      .text2{
        display: none;
      }
      .boton:hover .text2 {
        transform: translateX(75px);
        transition: transform 0.6s;
        display: inline;
        z-index: 10;
      }

      .boton:active {
        transform: scale(1.03);
      }/*
      .boton{
        margin-top: 100px;
        margin-left: 80px;
        width: 200px;
        background-color: #fff;
        border-radius: 30px;
        border-color: #00acee;
      }
      .iconn{
        margin-left: -80px;
        font-size: 18px;
        color: #fff;
        background-color: #00acee;
        height: 30px;
        padding: 3px;
        border-radius: 30px;
      }*/

   /*   @media (max-width: 550px) {
        .send{
            margin-left: 20px!important;
        }
        .txt{
            margin-left: -25px!important;
            width: 140px!important;
            height: 50px!important;
        }
      }*/

     

    </style>
</head>
    <body>
<div id="left"></div>
<div id="right"></div>
<div class="inner"><div class="container">
    <span><i class="fa-solid fa-window-minimize"></i></span>
    <div class="left">
        <h1 class="l-header">Con</h1>
We want to hear your thoughts, help us provide better services<br><br>
If you have any feedback, complain, or suggestion, please let us know<br><br>
<textarea class="txt"></textarea><br><br>
<button class="send">Send <i class="fa-regular fa-paper-plane"></i></button>
    </div>
    <div class="right">
        <h1 class="r-header">tact Us</h1>
        <h3><span class="icon"><i class="fa-solid fa-location-dot"></i></span> Address</h3><br>
        <span class="info">El-Manyal, old cairo, Egypt</span><br><br>
        <h3> <span class="icon"><i class="fa-solid fa-circle-question"></i></span> Need Help?</h3><br>
        <span class="info">furrytails24@gmail.com</span><br><br>
        <span class="info">+2-01023456789</span><br>
        <button class="boton">
            <span class="iconn"
              ><i class="fa-brands fa-twitter"></i></span>
            <span class="text1">Follow us</span>
            <span class="text2">furry_tails24</span>
          </button>
    </div>
</div>
</div>
    </body>
    </html>
  