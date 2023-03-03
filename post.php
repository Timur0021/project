<?php
include ('path.php');
include("admin/controller/categ.php");
$post = selectPostFromWithUserOnBlog('posts', 'users', $_GET['post']);
?>
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
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Rubik+Dirt&display=swap" rel="stylesheet">
</head>
<body>
<!--HEADER -->
<?php
include 'srt/clude/header.php';
?>
<!--HEADER-->
<!-- MAIN CONTENT  -->
<div class="container">
    <div class="content row">
        <!-- CONTENT -->
        <div class="main-content col-md-9 col-12">
            <h3><?php echo $post['title']; ?></h3>

            <div class="post_post row">
                <div class="img col-12">
                    <img src="<?=BASE_URL . 'images/foto/' . $post['img']?>" alt = "<?=$post['title']?>" class="img-thumbnail">
                </div>
                <div class="post_post_text col-12">
                    <div class="info">
                      <i class="far fa-user"><?=$post['username'];?></i>
                      <i class="far fa-calendar"><?=$post['created_date'];?></i>
                    </div>
                    <div class="post_post_text col-12">
                        <?=$post['content'];?>
                    </div>
                </div>
            </div>
        </div>


        <!--SEARCH-->
        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h2>Пошук</h2>
                <form action="search.php" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Пошук...">
                </form>
            </div>



            <div class="section topics">
                <h2>Категорії</h2>
                <ul>
                    <?php foreach ($categ as $key => $topic): ?>
                    <li><a href="<?=BASE_URL . 'topics.php?id=' . $topic['id'];?>"><?=$topic['name'];?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--SEARCH-->

<!-- FOOTER -->
<?php
include 'srt/clude/footer.php';
?>
<!-- FOOTER -->

<!-- Optional JavaScript: choose one of the two -->

<!-- Optional 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>




<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
-->
</body>
</html>