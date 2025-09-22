<?php
if(isset($_POST['entry'])){
$author=$_POST['author'];
$title=$_POST['title'];
$edition=$_POST['edition'];
$publisher=$_POST['publisher'];
$publication_date=$_POST['publication_date'];
$call_number=$_POST['call_number'];
$accession_number=$_POST['accession_number'];
$isbn=$_POST['isbn'];
$connect= mysqli_connect('localhost','root','','library1');
           $query="INSERT INTO `books`(`Author`, `Title`, `Edition`, `Publisher`, `Publication Date`, `Call Number`, `Accession Number`, `ISBN`) VALUES ('$author','$title','$edition','$publisher','$publication_date','$call_number','$accession_number','$isbn')";
           mysqli_query($connect,$query);
}?>