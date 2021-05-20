<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            padding: 9px;
        }
        *{
            box-sizing: border-box;
        
        }
        .row{
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 -16px;
        }
        .row{
            display: -ms-flexbox;
            display: flex;
            margin: 0 -15px;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .col-1{
            flex: 26%;
            -ms-flex: 26%;
            padding: 0 15px;
        }
        .col-2{
            flex: 50%;
            -ms-flex: 50%;
            padding: 0 15px;
        }
        .col-3{
            flex: 76%;
            -ms-flex:76% ;
            padding: 0 15px;
        }
        .container{
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgray;
            border-radius: 4px;
        }
        label{
            margin-bottom: 10px;
            display: block;
        }
        input[type=text]{
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .icon-container{
            margin-bottom: 20px;
            padding: 8px 0;
            font-size: 25px;
        }
        .btn{
            color: white;
            background-color: #4CAF50;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover{
            background-color: #45a049;
        }
        a{
            color: #2196F3;
        }
        hr{
            border: 1px solid lightgray;
        }
        span.price{
            float: right;
            color: gray;
                    }
        @media(max-width:800px){
            .row{
                flex-direction: column-reverse;
            }
            .col-1{
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="row"  style="padding: 100px 300px;">
    <div class="col-2">
        <div class="container">
            <form action="payscript.php" method="POST" style="padding: 25px;">
            <div class="row">
              <div class="col-1">
                  <h3 style="text-align: center;margin: 20px 10px;">Checkout Form</h3>

                  <label for="fname"><i class="fa fa-user"></i>&nbsp   Full Name</label>
                  <input type="text" id="fname" name="name" placeholder="Enter Name">
                  <label for="email"><i class="fa fa-envelope"></i>&nbsp  Email</label>
                  <input type="text" id="email" name="email" placeholder="Enter email">
                  <input type="hidden" value=" <?php echo 'OID'.rand(100,1000);?>" name="orderid">
                  <input type="hidden" value=" <?php echo  1;?>" name="amount">
                  <label for="city"><i class="fa fa-tablet"></i>  &nbsp   Mobile</label>
                  <input type="text" name="mobile" id="city" placeholder="Mobile Number">
                  <label for="adr"><i class="fa fa-address-card-o"></i>  &nbsp    Address</label>
                  <input type="text" id="adr" name="address" placeholder="Enter Address">
                  <label for="adr"><i class="fa fa-inr"></i>  &nbsp   Ammount</label>
                  <input type="text" id="amt" name="ammount" placeholder="Enter Ammount">
                
                </div>
              <input type="submit" value="Pay Now" class="btn">
            </div>
        </form>
        </div>
    </div></div>
</body>
</html>