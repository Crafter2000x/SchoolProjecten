<?php
function printallresults ($conn){
    if(!empty($_POST)){
        $iSearchNum = $_POST['iSearchNum'];
        $iLoopedNum = 1;
        $oQuery = mysqli_query($conn,"SELECT * FROM `tbl_orders` WHERE `iOrderID` =" .$iSearchNum);
        if (!$oQuery){
            echo("No results found");
            return null;        
        }
        echo('-----------------------Manual Search------------------------------');
        $aAllRows = mysqli_fetch_all($oQuery);
        foreach ($aAllRows as $row){
            echo('<br>Result ' .$iLoopedNum);
            echo('<br>Order ID:  ' .$row[0]);
            echo('<br>Customer name:  ' .$row[1]);
            echo('<br>Product name:  ' .$row[2]);
            echo('<br>NASA number:  ' .$row[3]);
            echo('<br>Amount ordered:  ' .$row[4]);
            echo('<br>Arrive date:  ' .$row[5]);
            echo('<br>Pickup date:  ' .$row[6]);
            echo('<br>Orderd in MOMO?:  ');
            if($row[7] == 1){
                echo('Yes');
            } else{
               echo('No');
            }
            echo('<br>Reapting order?:  ');
                    if($row[8] == 1){
                echo('Yes');
            } else{
               echo('No');
            }
            echo('<br>Orderd by:  ' .$row[9]);
            echo('<br>');
            $iLoopedNum++; 
        }
    }    
};
printallresults($conn);
?>

        <form method="post">
            <input type="number" name="iSearchNum" required="" placeholder="Input order ID">
            <input type="submit" value="Submit">  
        </form>

