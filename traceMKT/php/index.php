<!DOCTYPE html>
<html>
    <head>
      <title id="title">Home</title>
        <meta charset="utf-9">
        <meta name="viewport"content='width=device-width, initial-scale=1'>
        <link href="../css/home.css" rel="stylesheet">
        <link href="../css/theme.css" rel="stylesheet">
        <link href="../css/footerCss.css" rel="stylesheet">
        <link href="../fa/css/all.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="../script/fxn.js"></script>
    </head>
<body>
    <?php require('header.php'); ?>
    <div class='body-container' id='bd-container'></div>
    <?php require ('footer.php'); ?>
</body>
<script>
    $(document).ready(function(){
        $('#bd-container').load('../html/home.html');
    });
    </script>
</html>