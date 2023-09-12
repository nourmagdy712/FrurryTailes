<!DOCTYPE html>
<head>
    <title>Home</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Bad Script|Montserrat" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/styling.css')}}">
</head>

<body>
    <section id="header">
    <header>
        <h1 id="nav-title">
            <a style="font-family: Bad Script;font-size:30px;font-weight:bold;color:#fff;" href="{{route('home')}}" class="logo">FurryTails</a>
        </h1>
        <nav>
            <ul>
                <li>
                    <a href="{{route('contact')}}" class="contact ">Contact us</a>
                </li>
                <li>
                    <a href="{{route('signin')}}"><i class="fa fa-fw fa-user"></i></a>
                </li>
            </ul>
        </nav>
    </header>
    <section id="story">
    <h1>Our story</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam,<br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
</section>
</section>
<section id="services">
<h1>Our services</h1>
<figure class="figure" style="margin-left: 15%;">
    <img
      src="../imgs/adopt.jpg"
      alt="Adopt don't shop"
    />
    <figcaption>
      <div>
        <h2>Adopt don't shop</h2>
      </div>
      <div>
        <p>you can choose from various pets in our shelter</p>
      </div>
    </figcaption>
  </figure>
  
  <figure class="figure">
    <img
      src="../imgs/shelter.jpg"
      alt="safe shelter"
    />
    <figcaption>
      <div>
        <h2>A safe shelter</h2>
      </div>
      <div><p>Can't take care of your pet anymore? we got this.<br>we grant safe shelter for your pet until they find a new family</p></div>
    </figcaption>
  </figure>
  
  <figure class="figure">
    <img
      src="../imgs/vet.jpg"
      alt="medical care"
    />
    <figcaption>
      <div>
        <h2>Warm Haven</h2>
      </div>
      <div><p>we gather street animals and provide a home and good medical care for them</p></div>
    </figcaption>
  </figure>
<svg style="width: 300px;height:300px; position: absolute;left:1%; z-index:-1;" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
    <path fill="#F794A4" d="M14.8,-13.5C29.6,-0.1,59,0,67.9,9C76.9,17.9,65.4,35.9,50.6,49.6C35.9,63.3,17.9,72.7,2.3,70.4C-13.3,68,-26.6,54,-39.7,40.3C-52.9,26.6,-65.8,13.3,-67.7,-1.9C-69.7,-17.1,-60.5,-34.2,-47.4,-47.7C-34.2,-61.1,-17.1,-71,-8.5,-62.4C0,-53.9,0.1,-27,14.8,-13.5Z" transform="translate(100 100)" />
  </svg>
  <svg style="width: 300px;height:300px; position: absolute;right:1%; z-index:-1;" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
    <path fill="#F794A4" d="M40.6,-43C49.3,-31.9,50.8,-16,54.2,3.4C57.6,22.8,63,45.6,54.3,58.2C45.6,70.7,22.8,73,8.2,64.8C-6.5,56.7,-12.9,38,-26.6,25.5C-40.3,12.9,-61.2,6.5,-66.6,-5.4C-72,-17.3,-61.9,-34.6,-48.3,-45.7C-34.6,-56.8,-17.3,-61.6,-0.7,-60.9C16,-60.3,31.9,-54.1,40.6,-43Z" transform="translate(100 100)" />
  </svg>
</section>
</body>

</html>