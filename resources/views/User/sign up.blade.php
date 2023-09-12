<!DOCTYPE html>
<head>
    <title>register</title>
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
        width: 40%;
        height: 95%;
        margin-top: 1%;
        margin-left: 30%;
        box-shadow: #C9A9A6 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
        background-color: #fff;
       }
      
  .logo{
    color:#f794a4;
    text-shadow: #C9A9A6 2.4px 2.4px 3.2px;
    text-align: center;
  }
  .labels{
    color: #41403e;
    font-size: 15px;
    margin-left: 25%;
  }
  .input{
    margin-left: 30%; 
    margin-top: 5px;
    box-shadow:  #F3CFC6 0px 18px 36px -18px inset;
    border: solid 0.5px;
    border-color: #f794a4;
    border-radius: 9px;
    height: 30px;
    width: 40%;
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
    margin-left: 40%;
   transition: all 250ms;
   width: 100px;
  }
  .signin:hover {
  transform: translateY(-1px);
  box-shadow: rgba(0, 0, 0, 0.02) 2.4px 2.4px 3.2px;
}

.signin:active {
transform: translate3d(0, 2px, 0);
}
.radiobtn{
margin-left: 30%;
}
.radio{
    accent-color: #F3CFC6;
}
@media (max-width: 900px) {
    .container{
        width: 100vw;
        height: 100vh;
        margin-left: 0%!important;
        margin-top: : 0%!important;
    }
    body{
        background-color: #fff;
    }
   }

    </style>
</head>
    <body>
<div class="container">
<h1 class="logo">FurryTails</h1><br>
<label class="labels">Full Name <sup style="color: red">*</sup></label><br>
<input class="input" type="text"><br><br>
<label class="labels">Email <sup style="color: red">*</sup></label><br>
<input class="input" type="email"><br><br>
<label class="labels">Password <sup style="color: red">*</sup></label><br>
<input class="input" type="password"><br><br>
<label class="labels">Confirm Password <sup style="color: red">*</sup></label><br>
<input class="input" type="password"><br><br>
<div class="radiobtn">
      <input class="radio" type="radio" name="type"/>
      <span>I have a pet for adoption</span><br>
      <input class="radio" type="radio" name="type"/>
     <span>I'd like to adopt a pet</span><br><br>
  </div>
<button class="signin">Sign up</button>
</div>
    </body>
    </html>
  