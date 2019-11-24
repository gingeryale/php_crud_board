<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Joblister</title>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/narrow.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

   <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Add New Listing</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE ?></h3>
      </div>
      <?php displayMessage(); ?>
