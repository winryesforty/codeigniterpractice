<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <p>Welcome to my CodeIgniter Sample Project CRUD.</p>
    <div class="container">
    <?php 
        if(session()->get('Message'))
        {
    ?>

            <div class="container-fluid"> <p class="alert alert-success"><?= session()->get('Message') ?></p> </div>
    <?php 
        } 
    ?>
        <?php foreach($tags as $tag): ?>
            <div class="form-group">
                <div class="">
                    <?php echo $tag['name']; ?>
                </div>
            </div>
        <?php 
            endforeach;
        ?>
    </div>
</body>
</html>