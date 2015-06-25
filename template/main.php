<?php include 'header.php';
list($navbarInspectClass, $navbarEditClass, $navbarListClass) = setClassOfElement($include);

?>
<div class="well well-sm"><?=htmlProtect($headerMessage)?></div>
<?php if ($successfulRegister) : ?>
<div class="alert alert-success" role="alert"><?=htmlProtect($successfulRegister)?></div>
<?php endif ?>
       <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Главная</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php if ($password !='') : ?>
                    <li <?=$navbarInspectClass ?>><a href="index.php?ID=self"><?= ($ID != 'self') ? 'Просмотр профиля' : 'Мой профиль' ?></a></li>
                    <li <?=$navbarEditClass ?>><a href="index.php?page=registration">Редактировать профиль<span class="sr-only">(current)</span></a></li>
                   <?php else : ?>
                    <li <?=$navbarEditClass ?>><a href="index.php?page=registration">Регистрация</a></li>
<?php endif ?>
                </ul>
                <form class="navbar-form navbar-left" role="search" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control" name="search" placeholder="<?=htmlProtect(($search != '') ? $search : 'Поиск...') ?>">
                    </div>
                    <button type="submit" class="btn btn-default">Искать!</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li <?=$navbarListClass ?>><a href="index.php?page=list">Список абитуриентов</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

<?php include 'footer.php';?>
