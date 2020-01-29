<?php
if(!empty($_POST)){
$iSearchNum = $_POST['iSearchNum'];

$sql = "SELECT * FROM `tbl_orders` WHERE `iOrderID` !=".$iSearchNum;

$result = $conn->query($sql);
} else {
    echo 'Search by order ID';
}


if(!empty($_POST)){
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $iOrderID = $row["iOrderID"];
        $sCustomerName = $row["sCustomerName"];
        $sProductName = $row["sProductName"];
        $iNasaNum = $row["iNasaNum"];
        $iAmount = $row["iAmount"];
        $dArriveDate = $row["dArriveDate"];
        $dPickupDate = $row["dPickupDate"];
        $bOrderMomo = $row["bOrderMomo"];
        $bRepeat = $row["bRepeat"];
        $sUsername = $row["sUsername"];
    }
} else {
    echo "0 results";
}
$conn->close();};
?>


        <?php
        if(!empty($_POST)){
        if($result->num_rows > 0){
            echo("Order ID: ".$iOrderID ."<br>Customer name: ".$sCustomerName ."<br>Product name: ".$sProductName ."<br>NASSA nummer: ".$iNasaNum ."<br>Amount: " .$iAmount ."<br>Arrive date: ".$dArriveDate ."<br>Pickup date: ".$dPickupDate ."<br>Ordered?: ".$bOrderMomo ."<br>Repeat?: " .$bRepeat ."<br>Ordered by: ".$sUsername);
        };};
        ?>