
<header class="container-fluid">
     <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="<?php echo BASE_URL ?>"> PROJECT </a><i class="fa-solid fa-paw"></i>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL ?>">Головна</a></li>
                    <li><a href="<?php echo BASE_URL . 'about';?>">Про нас</a></li>
                    <li><a href="#">Послуги</a></li>
                    <li>
                        <?php if(isset($_SESSION['id'])):?>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <?php echo $_SESSION['login']; ?>
                            </a>
                            <ul>
                                <?php if($_SESSION['admin']):?>
                                <li><a href="<?php echo BASE_URL . 'admin/posts/index.php';?>">Адмін панель</a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo BASE_URL . 'logout.php';?>">Вихід</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . 'log.php';?>">
                                <i class="fa fa-user"></i>
                                Увійти
                            </a>
                            <ul>
                                <li><a href="<?php echo BASE_URL . 'reg.php';?>">Реєстрація</a></li>
                            </ul>
                        <?php endif; ?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
   </header>
