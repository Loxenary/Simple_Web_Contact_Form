 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Web Contact Form</title>
    <link rel="stylesheet" href="Style.css" />
    <!-- include libraries(jQuery, bootstrap) -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link
      href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css"
      rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  </head>
  <body>
    <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        include "header.php";

        if($page === 'detail'){
          include 'detail.php';
        }else{
          include 'form.php';
        }
    ?>
</body>
</html>