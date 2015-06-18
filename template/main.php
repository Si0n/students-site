<?php include 'header.php'; ?>
<div class="well well-sm"><?=htmlProtect($headerMessage)?></div>
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
                    <li <?=$navbarEditClass ?>><a href="index.php?page=registration">Редактировать профиль<span class="sr-only">(current)</span></a></li>
                    <li <?=$navbarInspectClass ?>><a href="index.php?page=inspect">Посмотреть мои данные</a></li>

                </ul>
                <form class="navbar-form navbar-left" role="search" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control" name="search" placeholder="Поиск">
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
