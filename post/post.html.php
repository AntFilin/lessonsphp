<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Публикации</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <nav class="navbar navbar-inverse">
        <a class="blog-nav-item" href="#">Название сайта</a>
        <a class="blog-nav-item" href="#">Публикации</a>
        <a class="blog-nav-item" href="#">О проекте</a>
    </nav>

<div class="container">
    <div class="row">
        <div class="col-md-8">
<?php foreach($posts as $post) { ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"> <?php echo htmlspecialchars($post['title']); ?> </h3>
        </div>
        <div class="panel-body">
            <h3 class="panel-title"><?php echo htmlspecialchars($post['body']); ?>
        </div>
    </div>
<?php } ?>
        </div>
        <div class="col-md-4">
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Сортировать по дате <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Самые новые</a></li>
                    <li><a href="#">Самые старые</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/scripts.js"></script>

</body>
</html>