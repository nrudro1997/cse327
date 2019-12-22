 <?php
mysql_connect("localhost","root","") or die("could not connect");
mysql_select_db("bookshop") or die("could not find db");

//collect 
if(isset($_POST['searchVal']{
     $searchq = $_POST['searchVal'];
     $searchq = preg_replace("#[^0-9a-z]#i","", $searchq);


     $query = mysql_query("SELECT * FROM books WHERE bookname LIKE'%$searchq%' OR author LIKE '%$searchq%'") or die ("could not search");
     $count = mysql_num_rows($query);
     if($count == 0){
     	$output = 'There was no search results!';
     	else{
     		while ($row = mysql_fetch_array($query)) {
     			$bookname = $row['bookname'];
     			$authorname = $row['author'];

     			$output .='<div>'.$bookname.''.$authorname.'</div>';

     		}
     	}
     }
}

echo($output);
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title
<script type="text/javascript" src=""https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
function searchq(){
     var searchTxt = $("input[name='search']").val();

     $.post("search.php",{searchVal: searchTxt}, function(output){
       $("#output").html(output);
     });
}
</head>
<body>
	<form action ="index.html" method ="post">
							<input type="text" name="search"  placeholder="What are you looking for"onkeydown="searchq();"/> <input type="submit" value="??"/>
                                   </form>
							
			<div id="output">
               </div>
               </body>
               </html>