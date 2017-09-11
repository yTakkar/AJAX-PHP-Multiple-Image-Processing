<?php
  if (isset($_FILES['file']['name'][0])) {

    $failed = array();
    $uploaded = array();
    $allowed = array('png', 'jpg', 'jpeg', 'gif');

    foreach ($_FILES['file']['name'] as $key => $file_name) {
      $tmp_name = $_FILES['file']['tmp_name'][$key];
      $size = $_FILES['file']['size'][$key];
      $error = $_FILES['file']['error'][$key];
      $ext = strtolower(end(explode('.', $file_name)));
      if (in_array($ext, $allowed)) {
        if ($error == 0) {
          if ($size <= 2097152) {
              $name = time(). '.' .$ext;
              $path = "uploads/".$name;
              if (move_uploaded_file($tmp_name, "../uploads/".$name)) {
                echo "string";
              }
            }
          }
        }
      }

    if (!empty($uploaded)) {
      echo "<pre>", print_r($uploaded), "</pre>";
    }

    if (!empty($failed)) {
      echo "<pre>", print_r($failed), "</pre>";
    }

  }
?>
