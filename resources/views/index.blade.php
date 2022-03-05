<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>lushidev</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="style.css" />
</head>

<body>
   <main>
        @include("Inc/header")
             @yield("content")
         @include("Inc/footer") 
  </main>

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="./app.js"></script>
</body>
</html>