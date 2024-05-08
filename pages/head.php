<!--?php
session_start();

if(!isset($_SESSION["id"]))
{
  header("Location: login");
}

?-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo empty($title) ? "BeYou" : $title; ?></title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>