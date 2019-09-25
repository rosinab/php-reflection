<?php
require_once('vendor/autoload.php');
use Scriptotek\GoogleBooks\GoogleBooks;

$books = new GoogleBooks(['key' => 'AIzaSyCfYE15opugfr1QzGR4SpuQC4OR8FiaIQw', 'maxResults' => 10]);

$volume = $books->volumes->get('kdwPAQAAMAAJ');

foreach ($books->volumes->search('Poison Study') as $vol) {
    echo $vol->title . "\n";
}

?>
