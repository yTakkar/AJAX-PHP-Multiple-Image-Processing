<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon/">
    <title>PHP, jQuery, AJAX Image Uploading &amp; Cropping</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/tool.css">
  </head>
  <body>

    <div class="wrapper">
      <form class="form" action="needs/tool.php" method="post" enctype="multipart/form-data" id="one">
        <div class="file_div">
          <input type="file" name="file[]" value="Choose A File" class="file" multiple>
          <input type="submit" name="submit" value="submit">
        </div>
      </form>
    </div>

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>
