<!DOCTYPE html>
<head>
    <title>log in</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Bad Script|Montserrat" rel="stylesheet" />
    <style>
        :root{
           --main-color:#F3CFC6;
           --color:#fff5ee;
        }
        *{
            box-sizing: border-box;
            margin: 0;
       }
       body{
        background-color: var(--main-color);
        font-family: 'Bad Script', sans-serif;
        overflow: hidden;
        height: 100vh;
        width: 100vw;
       }
       .container{
        width: 80%;
        height: 80%;
        margin-top: 5%;
        margin-left: 10%;
        border-bottom: 5px solid #C9A9A6;
        border-right:  5px solid #C9A9A6;
        box-shadow: #C9A9A6 2.4px 2.4px 3.2px;
       }
       .left,.right{
        height: 100%;
        width: 50%;
        float: left;
       }
       .left{
        background-color: var(--color);
       }
       .right{
        background-color: var(--main-color);
       }
       .img{
        margin-left: 10%;
        margin-top: 20%;
       }
       .welcome{
        font-weight: bold;
        margin-left: 10%;
       }
       .text{
        margin-left: 10%;
       }
       .create{
        margin-left: 10%;
        background-color: #fff;
        background-position: 0 90%;
        background-repeat: repeat no-repeat;
        background-size: 4px 3px;
        border-radius: 15px 225px 255px 15px 15px 255px 225px 15px;
        border: solid 2px;
        box-shadow: rgba(0, 0, 0, .2) 15px 28px 25px -18px;
        color: #41403e;
        font-weight: bold;
        cursor: pointer;
        display: inline-block;
        font-size: 1rem;
        line-height: 23px;
        outline: none;
        padding: .75rem;
        transition: all 235ms ease-in-out;
        border-bottom-left-radius: 15px 255px;
        border-bottom-right-radius: 225px 15px;
        border-top-left-radius: 255px 15px;
        border-top-right-radius: 15px 225px;
        font-family: 'Bad Script', sans-serif;
       }
       .create:active {
        box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
        transform: translate3d(0, 2px, 0);
  }
  .logo{
    color:#f794a4;
    text-shadow: #C9A9A6 2.4px 2.4px 3.2px;
    text-align: center;
    margin-top: 20%;
  }
  .labels{
    color: #41403e;
    font-size: 20px;
    margin-left: 25%;
  }
  input{
    margin-left: 30%; 
    margin-top: 5px;
    box-shadow:  #F3CFC6 0px 18px 36px -18px inset;
    border: solid 0.5px;
    border-color: #f794a4;
    border-radius: 9px;
    height: 30px;
    width: 200px;
  }
  .signin{
    font-family: 'Montserrat', sans-serif;
    background-color: #F3CFC6;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    line-height: 1.25;
    min-height: 3rem;
    padding:3px;
    margin-left: 10%;
   transition: all 250ms;
   vertical-align: baseline;
   width: 100px;
  }
  .signin:hover {
  transform: translateY(-1px);
  box-shadow: rgba(0, 0, 0, 0.02) 2.4px 2.4px 3.2px;
}

.signin:active {
transform: translate3d(0, 2px, 0);
}
   @media (max-width: 600px) {
    .container{
        width: 100vw;
        height: 100vh;
        margin-left: 0%!important;
        margin-top: : 0%!important;
    }
   }

    </style>
</head>
    <body>
<div class="container">
    <div class="left">
<h1 class="logo">FurryTails</h1><br>
<label class="labels">Email <sup style="color: red">*</sup></label><br>
<input type="email"><br><br>
<label class="labels">Password <sup style="color: red">*</sup></label><br>
<input type="password"><br><br>
<span style="color: #41403e; font-weight:bold;margin-left: 25%; font-size:15px;">Forgot your passord?</span>
<button class="signin">Sign in</button>
    </div>
    <div class="right">
        <img src="../imgs/dog.png" alt="dog" class="img"><br>
        <h2 class="welcome">Welcome back!</h2><br>
        <h3 class="text">Log in and use the opportunities offered by our portal</h3><br>
        <h4 class="text">You don't have an account?</h4><br>
        <form method="get" action="{{ route('signup') }}">
            @csrf
            <button class="create" type="submit">Create account</button>
          </form>
        
    </div>
</div>
    </body>
    </html>
  