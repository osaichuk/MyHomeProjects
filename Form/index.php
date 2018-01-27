<form action="index.php" method="get">
    Name<input type="text" name="name"/> <br><br> 
    Email<input type="text" name="email"/> <br> <br> 
    Phone<input type="tel" name="Phone"/> <br> <br> 
    <input type="submit"/>
</form>
<?php
	echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    echo $str = serialize($_GET);
    
?>