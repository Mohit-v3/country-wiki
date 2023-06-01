<?php include "partials/header.php" ?>
<?php include "dbsConnect.php" ?>


<?php 

if(isset($_POST['submit'])){
	$key = htmlspecialchars($_POST['code']);
	$searchKeyword = strtoupper($key);

	// echo $searchKeyword;

	if(strlen($searchKeyword) > 3 || strlen($searchKeyword) == 0){
		echo '<h3>'. 'Not a valid code'. '<h3>';
		mysqli_close($conn);
	}


// Prepare SQL statement to check if the keyword already exists
$checkQuery = "SELECT keyword FROM search_keywords WHERE search_keywords.keyword = '$searchKeyword'";
$checkResult = mysqli_query($conn, $checkQuery);



if(mysqli_num_rows($checkResult) > 0){

	// Keyword exists, update the count
    $updateQuery = "UPDATE search_keywords SET count = count + 1 WHERE keyword = '$searchKeyword'";
    mysqli_query($conn, $updateQuery);
} else{

	// Keyword doesn't exist, insert a new record
    $insertQuery = "INSERT INTO search_keywords (keyword, count) VALUES ('$searchKeyword', 1)";
    mysqli_query($conn, $insertQuery);
}


header("Location: /country-wiki/showByCode.php?code=".urlencode($searchKeyword));


mysqli_close($conn);

}

?>


<br> <br> <br>




<div class="search-bar">
	
<form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
		<div>
			
		<label for="code"></label>
		<input type="text" name="code" id="code"  class="search-area" placeholder="Search By Code">
	<button type="submit" name="submit" value="submit" class="search-button" > Search </button>
	
		</div>

			
		
	
</form>

</div>



<br><br><br>
<br>

 <?php include "partials/footer.php" ?>