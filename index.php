<html>
<head>
	<title>My New Website</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	class myString {
	
		public function __construct() {

			echo 'hello i\'m an Object </br>';

		}

		public function __destruct() {

			echo '</br> I\'m Done';

		}

		public function chopFunc() {
			echo '<h1>String chop() function</h1>';
			$str = "Chandni Patel<br>";
			echo chop($str,"Patel");
			echo '<hr>';
		}

		public function splitStringFunc() {
			echo '<h1>String str_split() function</h1>';
			print_r(str_split("Hello"));
			echo '<hr>';
		}

		public function caseCompareStringFunc() {
			echo '<h1>String strcasecmp() function</h1>';
			echo strcasecmp("NJIT","njit");
			echo '<hr>';
		}

		public function lengthOfStringFunc() {
			echo '<h1>String strlen() function</h1>';
			echo strlen("Hi, I am Chandni.");
			echo '<hr>';
		}

		public function findFirstOccurStringFunc() {
			echo '<h1>String stristr() function</h1>';
			echo stristr("Chandni Patel","and");
			echo '<hr>';
		}

		public function firstOccPosFunc() {
			echo '<h1>String stripos() function</h1>';
			echo stripos("I am Chandni Patel.","Patel");
			echo '<hr>';
		}

		public function strchrFunc() {
			echo '<h1>String strchr() function</h1>';
			echo strchr("Chandni Patel","Patel");
			echo '<hr>';
		}

		public function implodeFunc() {
			echo '<h1>String implode() function</h1>';
			$arr = array('I','am','Chandni','Patel.');
			echo implode(" ",$arr);
			echo '<hr>';
		}

		public function countCharsFunc() {
			echo '<h1>String count_char() function</h1>';
			$str = "Chandni Patel";
			echo count_chars($str,4);
			echo '<hr>';
		}

		public function chunkSplitFunc() {
			echo '<h1>String chunk_split() function</h1>';
			$str = "Chandni Dobi";
			echo chunk_split($str,1,".");
			echo '<hr>';
		}


	}

	$strObj = new myString();
	$strObj->chopFunc();
	$strObj->splitStringFunc();
	$strObj->caseCompareStringFunc();
	$strObj->lengthOfStringFunc();
	$strObj->findFirstOccurStringFunc();
	$strObj->firstOccPosFunc();
	$strObj->strchrFunc();
	$strObj->implodeFunc();
	$strObj->countCharsFunc();
	$strObj->chunkSplitFunc();


?>
</body>
</html>