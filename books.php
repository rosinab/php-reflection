<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/books.css">
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Josefin+Sans&display=swap" rel="stylesheet">

</head>

<body>

<!-- HEADER -->
<?php include 'header.php' ?>


<div class="boxspot">
<div class="formbox">
<h2>Search for Books?</h2>
<p>You can search for books here using Google Books!</p>
<form action="search.php" method="get">
  <div class="form-group">
    <input type="search" class="books" id="books" placeholder="Enter a title or keyword" name="query">
  </div>
  <button type="submit" class="btncolor" id="search">Search</button>
</form>
</div>

<div id="blank">


</div>

</div>
</div>


<!-- FOOTER -->

<div class="push"></div>
<div class="foot">
<?php include 'footer.php' ?>
</div>

</body>

</html>


