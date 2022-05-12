<!DOCTYPE HTML>
<?php require_once  'helpers.php' ?>
<html>
<head>
    <meta charset="utf-8">
    <title>blue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel=stylesheet href="../css/style.css">
</head>
<body class="marginzero">
<div class="container-fluid" id="bottomborder">
    <div class="row">
            <div class="col-4 col-xl-3"><img src="../images/english_games_logo.png"></div>
            <div class="col-2 col-xl-5"></div>
            <div class="col-4 col-xl-1 centerverticaly"><a class="flex-content-column-center infront" style="color:#000000" href="index.php?action=loginadministration"><img src="../images/lock.png" id="lockimage"><span>Authentification</span></a></div>
            <div class="col-2 col-xl-3 centerverticaly"><h1>English games</h1></div>
    </div>
</div>

<div class="span12" id="divMain">
    <?= getFlashMessage() ?>
</div>
<?= $content; ?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>