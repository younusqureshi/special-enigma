<?php
session_start();
$con=mysqli_connect("sql213.unaux.com","unaux_32514607","gsrjc5pf2t61","unaux_32514607_alm");

if(mysqli_connect_error()){
    echo "<script>
    alert('cannot connect to database');
    window.location.href='cart.php';
    </script>";
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        
        $query1="INSERT INTO `shipping_details` (`Email`,`Address`, `Landmark`, `Pincode`, `City`, `District`) VALUES ('$_POST[mail]','$_POST[addr]','$_POST[land]','$_POST[pin]','$_POST[city]','$_POST[dis]')";
        if(mysqli_query($con,$query1))
        {
            $Order_Id=mysqli_insert_id($con);
            $query2="INSERT INTO `booked_products` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                alert('Order Placed');
                window.location.href='index.html';
                </script>";
            }
            else
            {   
                echo "<script>
                alert('SQL Query Prepare Error');
                window.location.href='cart.php';
                </script>";
            }
        }
        else
        {   
        echo "<script>
            alert('SQL Error');
            window.location.href='cart.php';
            </script>";
        }
    }    
}
?>
