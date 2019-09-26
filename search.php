<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/search.css">
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Josefin+Sans&display=swap" rel="stylesheet">

<?php

require_once('vendor/autoload.php');
use Scriptotek\GoogleBooks\GoogleBooks;

include 'header.php';

$books = new GoogleBooks(['key' => 'AIzaSyCfYE15opugfr1QzGR4SpuQC4OR8FiaIQw', 'maxResults' => 10]);
$query = $_GET['query'];
?>

</head>

<body>

<div class="boxspot">
<div class="searches">
<?php
foreach ($books->volumes->search($query) as $vol) {
  echo "<br>\n";
  echo "<p class='titles'>$vol->title</p>";
  echo "<br>";
  echo $vol->description;
  echo "\n<br>";
  echo "<a href='https://books.google.co.uk/books?id=$vol->id' target='_blank'> Find Here</a>";
  echo "<br><br>";
}
?>
</div>
</div>

<div class="boxspot">
<div class="return">
  <a href="books.php" class="booklink">Return to Search</a>
</div>
</div>

<?php
include 'footer.php';
?>
