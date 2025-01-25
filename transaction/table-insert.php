<?php
require "db-connection.php";
try {
	$conn->autocommit ( FALSE );

	$conn->query ( "INSERT INTO `turnover4`.`turnover` (`product_name`, `product_price`, `product_sale`) VALUES ('Хліб', 20.50, '250');" );
	$conn->query ( "INSERT INTO `turnover4`.`turnover` (`product_name`, `product_price`, `product_sale`) VALUES ('Молоко', 60.48, '176');" );
	$conn->query ( "INSERT INTO `turnover4`.`turnover` (`product_name`, `product_price`, `product_sale`) VALUES ('Шоколад', 62.15, '73');" );
    $conn->query ( "INSERT INTO `turnover4`.`turnover` (`product_name`, `product_price`, `product_sale`) VALUES ('Печиво', 48.99, '110');" );
    $conn->query ( "INSERT INTO `turnover4`.`turnover` (`product_name`, `product_price`, `product_sale`) VALUES ('Яйця', 4.30, '360');" );
    $conn->query ( "INSERT INTO `turnover4`.`turnover` (`product_name`, `product_price`, `product_sale`) VALUES ('Машинка', 245.99, '22');" );
    $conn->query ( "INSERT INTO `turnover4`.`turnover` (`product_name`, `product_price`, `product_sale`) VALUES ('Батарейки', 18.35, '360');" );
	$result = $conn->query ( "SELECT `product_name`, `product_price`, `product_sale` FROM turnover;" );

	$conn->commit ();
	echo "Транзакція пройшла успішно\n";
	if ($result->num_rows > 0) {		
		while ( $row = $result->fetch_assoc () ) {
			echo $row ["product_name"] . "; Price: " . $row ["product_price"] . "; Sales: " . $row ["product_sale"] . "\n";
		}
	} else {
		echo "results: 0";
	}
  } catch ( Exception $e ) {
	$conn->rollback ();
	echo "Здійснено відкат транзакції: " . $e->getMessage ();
}
mysqli_close ( $conn );