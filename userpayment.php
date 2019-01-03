<html lang="en">
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Charity Fund</title>
    <link rel="icon" href="images/fav.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link href="css/admin.css" rel="stylesheet">
</head>
<body>
     <!--header & Navbar div-->
    <div class="row header container-fluid">
        <div class="col-md-8">
            <center><a href="fst.php"><img src="images/logo.png" alt="Charity Fund"></a></center>
        </div>
         <div class="col-md-4">
         </div>
       </div>

<div class="agile-login">
		<h1>Payment</h1>
			<div class="w3ls-form">
				<form  action="userdone.html" method="post">
					<label>Account Holder Name</label>				
          	<input type="text" name="name" placeholder="Account Holder Name" /></br>

					<label>Account Number</label>
                    <input type="text" name="acc_number" placeholder="Account Number"  /></br>

                    <label>CVV</label>
                    <input type="text" name="acc_cvv" placeholder="CVV"  /></br>

                    
                    <label>Expiry Date</label>
                    <input type="text" name="exp_date" placeholder="Expiry Date"  /></br>

                    <label>Amount</label>
					<input type="text" name="amount" placeholder="Enter the amount"  /></br>
       				<div class="row">
                      <div class="form-group col-xs-4">
                          <button class="btn btn-primary" type="submit"><a href="userdone.html">DONE</a></button>
                      </div>
                  </div>				</form>
			</div>
			
		
		</div>
		<br>
		
	</div>
	
</body>
</html>