<?php include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="bg2.jpg" width="100px">
<div class="container">
        <div class="row" style="margin-top:35px;margin-left:40px;">
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                <div class="card">
                    <img src="on.jpg" height="203px" class="responsive" id="on">
                    <div class="card-body">
                     <h5 class="card-title">Onion</h5>
                     <p class="card-text">Price: Rs.25/kg</p>
                     <button type="submit" name="Add To Cart" class="btn btn-info">Add to cart</a>
                     <input type="hidden" name="Item_Name" value="Onion">
                     <input type="hidden" name="Price" value="25">

                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                <div class="card">
                    <img src="gr.jpg" height="203px" class="responsive" id="gr">
                    <div class="card-body">
                     <h5 class="card-title">Garlic</h5>
                     <p class="card-text">Price: Rs.49/kg</p>
                     <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</a>
                     <input type="hidden" name="Item_Name" value="Garlic">
                     <input type="hidden" name="Price" value="49">
                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                <div class="card">
                    <img src="pt.png" height="203px" class="responsive">
                    <div class="card-body">
                     <h5 class="card-title">Potato</h5>
                     <p class="card-text">Price: Rs.25/kg</p>
                     <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</a>
                    <input type="hidden" name="Item_Name" value="Potato" id="pt">
                    <input type="hidden" name="Price" value="25">
                    </div>
                </div>
                </form>
            </div>
        </div>        
    </div>
    <style>
@media screen and (max-width: 700px) 
{

.container
{   
    display:flex;
    flex-direction: right;
}
}
</style>
</body>
</html>