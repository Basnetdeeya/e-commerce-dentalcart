<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="http://localhost/web_projects/InternWorks/e-commerce-dentalkart/">

  <!-- External CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <!-- Font Aswome 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Poppins:wght@400;600&family=Questrial&display=swap"
    rel="stylesheet">

  <title> E-commerce Website</title>

  <script>
  function change_image(image) {
    var container = document.getElementById("main-image");
    container.src = image.src;
  }
  document.addEventListener("DOMContentLoaded", function(event) {});
  </script>
</head>

<body>

  <!-- top section -->
  <nav class="container border-bottom">
    <div class=" d-flex justify-content-between align-items-centers">
      <div>
        <p class="time text-black pt-3"> +977-981827364
        </p>
      </div>
      <div class="mt-3 fs-5">
          <a href="https://www.facebook.com/" target="_blank" class="rightlink text-black "><i
              class="fab fa-facebook-f f-icon"></i></a>
          <a href="https://twitter.com/i/flow/signup" target="_blank" class="rightlink text-black mx-2"><i
              class="fab fa-twitter t-icon"></i></a>
          <a href="https://twitte.com/i/flow/signup" target="_blank" class="rightlink text-black "><i
              class="fab fa-linkedin-in l-icon"></i></a>
          <a href="https://www.youtube.com/" target="_blank" class="rightlink text-black mx-2"><i class="fab fa-youtube y-icon"></i></a>
        </div>
    </div>
  </nav>

  <!-- second section -->
  <div class="second-nav">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <div class="col-md-3">
          <a href="index.php"><h2 class="mega my-4">LOTUS <span style="color: rgb(51, 51, 88);">SHOP</span></h2></a>
        </div>

        <div class="col-md-9">
          <form class=" search-bar my-3">
            <input class="form-control" type="text " placeholder="Search our catalogue........... " aria-label="Search ">
          </form>
        </div>
      </div>
    </div>
  </div>