<html>
<body>


Your book <?php echo $_POST["bookname"]; ?> written by <?php echo $_POST["author"]; ?>, belongs to the category of <?php echo $_POST["genre"]; ?> and costs <?php echo $_POST["price"]; ?>. It was published by <?php echo $_POST["publisher"]; ?> in <?php echo $_POST["pubdate"]; ?>. 
The book is described as: <?php echo $_POST["desc"]; ?>.<br>

<?php
$xml = new SimpleXMLElement('<xml/>');  // root element
// add a number of tracks to this root
for ($i = 1; $i <= 8; ++$i) {
$book = $xml->addChild('book');
$book->addChild('bookname', "Titan Sinking");
$book->addChild('author', "James Dixon");
$book->addChild('genre', "Memoir");
$book->addChild('price', "20.00");
$book->addChild('pubdate', "2014");
$book->addChild('publisher', "Amazon");
$book->addChild('desc', "Djngvijrgbgb");
}
// important to display XML in a browser
Header('Content-type: text/xml');
// output the XML
print($xml->asXML());
?>
</body>
</html> 