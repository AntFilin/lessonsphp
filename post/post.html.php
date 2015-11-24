<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Публикации</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

</head>
<body>
<?php foreach($posts as $post) { ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"> <?php echo $post['title']; ?> </h3>
        </div>
        <div class="panel-body">
            <h3 class="panel-title"><?php echo $post['body']; ?>
        </div>
        <div class="panel-heading">
            <h3 class="panel-title"> <?php echo $post['title']; ?> </h3>
        </div>
        <div class="panel-body">
            <h3 class="panel-title"><?php echo $post['body']; ?>
        </div>
    </div>
<?php } ?>
</body>
</html>