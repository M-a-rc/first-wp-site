<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    wp_head()
  ?>
</head>
<body>

<div class="navbar px-4">
  <a href="/"class="btn btn-primary">Home</a>
  <a href="/"class="btn btn-primary">Posts</a>
</div>
<div class="container">
  <h1 class="mt-2"><?php the_title() ?></h1>
