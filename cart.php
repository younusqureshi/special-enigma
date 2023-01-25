<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cart</title>
</head>
<body background="cbg.jpeg" width="100px" height="100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            
            <div class="col-lg-8">
              <table class="table">
               <thead class="text-center">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                <?php
                
                    if(isset($_SESSION['cart']))
                    {
                    foreach($_SESSION['cart'] as $key => $value)
                        {   
                            $sr=$key+1;                            
                            echo"
                                <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]/kg<input type='hidden' class='iprice' value='$value[Price]'</td>
                                    <td>
                                    <form action='manage.php' method='POST'>
                                    <input class='text-center iquantity' name='Mod_quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='500'></td>
                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                    <td class='itotal'></td>
                                    <td>
                                      <form action='manage.php' method='POST'>
                                        <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button></td>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                      </form>
                                    </td>
                                </tr>
                            ";
                        } 
                    }    
                ?>    
                            
                </tbody>
              </table>
            </div>  

            <div class="col-md-4">
                <div class="border bg-light rounded p-4">
                    <h4>Grand Total:</h4>
                    <h5 class="text-left" id="gtotal"></h5>
                    <br>
                    <h6>SHIPPING DETAILS:</h6>
                    <?php
                        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                        {
                    ?>
                    <form action="purchase.php" method="POST"> 
                        <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="mail" maxlength="30" required>
                        </div>
                        <div class="form-group">
                                <label>Address</label>
                                <textarea type="text" class="form-control" name="addr" maxlength="50" required></textarea>
                        </div>
                        <div class="form-group">
                                <label>Landmark</label>
                                <input type="text" class="form-control" name="land" maxlength="25" required>
                        </div>
                         <div class="form-group">
                                <label>Pincode</label>
                                <input type="tel" class="form-control" name="pin" maxlength="6" required>
                        </div>
                        <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" name="city" maxlength="15" required>
                        </div>
                        <div class="form-group">
                                <label>District</label>
                                <input type="text" class="form-control" name="dis" maxlength="15" required>
                        </div>
                         
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cash on delivery<br>
                            Only COD available due to some restrictions.
                            Product Will be delivered within 3-4 days.
                        </label>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block" name="purchase">Proceed to Checkout</button>
                    </form>
                    <?php
                        }
                    ?> 
                </div>
            </div>
        </div>    
    </div> 
    <script>

    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    function subTotal()
    {   
      gt=0;  
      for(i=0;i<iprice.length;i++)
      {
        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

        gt=gt+(iprice[i].value)*(iquantity[i].value);
      }
      gtotal.innerText=gt;   
    }

    subTotal();
    </script>

</body>
</html>