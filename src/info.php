<?php
use App\Services\Page;
include ('path.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
          <!--  REQUIRED META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> PROJECT </title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/681833e5f2.js" crossorigin="anonymous"></script>
        <!-- Custom styling -->
        <link rel="stylesheet" href="src/css/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Rubik+Dirt&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- header -->
        <?php
        Page::part("header");
        ?>
        <!-- header -->
        <!-- info -->
        <div class="container reg_form">
        <form class="row justify-content-center" method="post" action="info.php">
           <h2>Форма для скарги</h2>
           <div class="mb-3 col-12 col-md-4">
               <p><?=$errmsg?></p>
           </div>
           <div class="w-100"></div>
           <div class="mb-3 col-12 col-md-4">
              <label for="formGroupExampleInput" class="form-label">Ваш пошта</label>
              <input name="email" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
           <div class="w-100"></div>
           <div class="mb-3 col-12 col-md-4">
              <label for="exampleFormControlTextarea1" class="form-label">Напишіть скаргу</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
               <button type="submit" class="btn btn-info" name="button-info">Відправити</button>
            </div>
        </form>
        <!-- info -->
        <!-- footer -->
        <?php
        Page::part("footer");
        ?>
        <!-- footer -->


    
           <!-- Optional JavaScript: choose one of the two -->

          <!-- Optional 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>




         <!--
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
          -->
    </body>
</html>