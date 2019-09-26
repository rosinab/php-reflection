<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/extra.css">
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Josefin+Sans&display=swap" rel="stylesheet">

</head>

<body>

<!-- HEADER -->
<?php include 'header.php' ?>

<div class="boxes">
<div class="boxspot">
<div class="extrabox">
<h2>UK Book Request Opportunities</h2>
<p>I know personally how much of a pain it can be to find places to request ARCs (Advanced Reader Copies). And obviously half of the fun of book reviewing is getting the chance to read books early and encourage people to read them as they come out.</p>
<p>But there are a couple of places to look so check them out.</p>
<ul class="center">
<li><a href="https://www.netgalley.co.uk/" class="list" target="_blank">NetGalley (e-books only)</a></li>
<li><a href="https://www.bookbridgr.com" class="list" target="_blank">Bookbridgr (physical books only)</a></li>
<li><a href="https://www.readersfirst.co.uk/" class="list" target="_blank">Readers First (physical & e-books)</a></li>
<li><a href="http://darkroomtours.fayerogers.co.uk/" class="list" target="_blank">Darkroom Tours (physical books only)</a></li>
</ul>
</div>
</div>


<div class="boxspot">
<div class="formbox">
<h2>Got a Book Request Site Recomendation?</h2>
<p>New tours pop up from time to time as well as other ARC request sites. If you know of one that sends books to the UK then shoot it our way.</p>
<form action="connect.php" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="name" id="box" placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="email" id="box" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="Website">Website</label>
    <input type="text" class="website" id="box" placeholder="HTTPS Urls Only" name="website">
  </div>
  <div class="g-recaptcha form-label-group" data-sitekey="<?php echo getenv('SITE_KEY'); ?>"></div>
  <button type="submit" class="btncolor" id="box">Submit</button>
</form>
</div>
</div>
</div>



<!-- FOOTER -->

<?php include 'footer.php' ?>

</body>

</html>