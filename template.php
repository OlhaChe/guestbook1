<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Начало</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" />
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" name="message"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary form-control" value="Create" />
        </div>
            <?php foreach ($all_posts as $post): ?>
                <div class="row jumbotron">
                    <div class="col-md-4"><div>Ваше имя:</div> <?php echo $post['name'];?></div>
                    <div class="col-md-4"><div>Ваше Эмейл:</div> <?php echo $post['email'];?></div>

                    <div class="col-md-4"> <?php echo $post['date']; ?></div>
                    <div class="col-md-12"><div>Ваше Сообщение:</div> <?php echo $post['message'];?></div>

                </div>
            <?php endforeach; ?>

    </form>

</div>
</body>
</html>