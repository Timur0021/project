<!doctype html>
<html lang="en">
<head>
    <!--  REQUIRED META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> project </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/681833e5f2.js" crossorigin="anonymous"></script>
    <!-- Custom styling -->
    <link rel="stylesheet" href="stil/min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Rubik+Dirt&display=swap" rel="stylesheet">
</head>

<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="index.php">
        <h2>Скарга</h2>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Ваша пошта</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleFormControlTextarea1" class="form-label">Напишіть скаргу</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" class="btn btn-info" name="button-inf">Увійти</button>
        </div>
    </form>
</div>


