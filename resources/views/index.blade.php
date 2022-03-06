<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>lushidev</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="{{asset("style.css")}}"/>
  
</head>

<body>
   <main>
     <div class="big-wrapper light">
        <img src="{{asset("img/shape.png")}}" alt="" class="shape" />

        @include("Inc/header")
                  <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Le future est ici</h1>
                
              </div>
              <p class="text">
                
                Rejoignez la plate-forme <em>lushidev</em>. Une plate-forme de passionnés de l'apprentissage. <br>
                <ul>
                  <li>Articles sur le blog</li>
                  <li>projets opensource</li>
                  <li>groupe telegram</li>
                </ul>
              </p>
              <div class="cta">
                <a href="#" class="btn">Rejoindre</a>
              </div>
            </div>

            <div class="right">
              <img src="{{asset("img/Person.png")}}" alt="Person Image" class="person" />
            </div>
          </div>
        </div>
             
       <div class="bottom-area">
          <div class="container">
            <button class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
  </main>

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="{{asset("Main.js"))}}"></script>
</body>
</html>