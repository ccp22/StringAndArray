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

			echo 'myString object created. </br>';

		}

		public function __destruct() {

			echo '</br> myString Object done.';

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
			echo strcasecmp("Chandni","Chandni Patel");
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
			$str = "Chandni Patel";
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

	class myArray {

		public function __construct() {

			echo 'myArray object created. </br>';

		}

		public function __destruct() {

			echo '</br> myArray Object done.';

		}

		public function arrayPushFunc() {
			echo '<h1>Array array_push() function</h1>';
			$a=array("NJ","NY");
			array_push($a,"CA","PA");
			print_r($a);
			echo '<hr>';
		}

		public function arraySumFunc() {
			echo '<h1>Array array_sum() function</h1>';
			$a=array(123,456,78);
			echo array_sum($a);
			echo '<hr>';
		}

		public function arraySpliceFunc() {
			echo '<h1>Array array_splice() function</h1>';
			$a1=array("a"=>"NJ","b"=>"NY","c"=>"CA","d"=>"PA");
			$a2=array("a"=>"New Jersey","b"=>"New York");
			array_splice($a1,0,2,$a2);
			print_r($a1);
			echo '<hr>';
		}

		public function arraySliceFunc() {
			echo '<h1>Array array_slice() function</h1>';
			$a=array("NJ","NY","CA","PA","FL");
			print_r(array_slice($a,2));
			echo '<hr>';
		}

		public function arrayShiftFunc() {
			echo '<h1>Array array_shif() function</h1>';
			$a=array("a"=>"NJ","b"=>"NY","c"=>"CA");
			echo array_shift($a);
			print_r ($a);
			echo '<hr>';
		}

		public function sortFunc() {
			echo '<h1>Array sort() function</h1>';
			$a=array("ABC","DEF","GHI","JKL");
			sort($a);
			print_r ($a);
			echo '<hr>';
		}

		public function shuffleFunc() {
			echo '<h1>Array shuffle() function</h1>';
			$a = array("NJ","NY","CA","PA","FL");
			sort($a);
			shuffle($a);
			print_r($a);
			echo '<hr>';
		}

		public function arrayCountFunc() {
			echo '<h1>Array array_count_values() function</h1>';
			$a=array("NJ","NY","CA","PA","FL");
			print_r(array_count_values($a));
			echo '<hr>';
		}

		public function arrayFillFunc() {
			echo '<h1>Array array_fill() function</h1>';
			$a1=array_fill(1,4,"New Jersey");
			print_r($a1);
			echo '<hr>';
		}

		public function arrayChunkFunc() {
			echo '<h1>Array array_chunk() function</h1>';
			$a=array("NJ","NY","CA","PA","FL","OH");
			print_r(array_chunk($a,2));
			echo '<hr>';
		}

	}

	$arrObj = new myArray();
	
	$arrObj->arrayPushFunc();
	$arrObj->arraySumFunc();
	$arrObj->arraySpliceFunc();
	$arrObj->arraySliceFunc();
	$arrObj->arrayShiftFunc();
	$arrObj->sortFunc();
	$arrObj->shuffleFunc();
	$arrObj->arrayCountFunc();
	$arrObj->arrayFillFunc();
	$arrObj->arrayChunkFunc();


?>
</body>
</html>