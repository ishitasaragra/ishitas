
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 <link rel="stylesheet" href="style1.css">
</head>
<body>

<form action="index.php" method="post"id=payment>
	<fieldset>
		<legend>Your details</legend>
		<ol>
			<li>
				<label for=name>Name</label>
				<input id=name name=name type=text placeholder="First and last name" required autofocus>
			</li>
			<li>
				<label for=email>Email</label>
				<input id=email name=email type=email placeholder="example@domain.com" required>
			</li>
			<li>
				<label for=phone>Phone</label>
				<input id=phone name=phone type=tel placeholder="Eg. +447500000000" required>
			</li>
		</ol>
	</fieldset>
	<fieldset>
		<legend>Delivery address</legend>
		<ol>
			<li>
				<label for=address>Address</label>
				<textarea id=address name=address rows=5 required></textarea>
			</li>
			<li>
				<label for=postcode>Post code</label>
				<input id=postcode name=postcode type=text required>
			</li>
			<li>
				<label for=country>Country</label>
				<input id=country name=country type=text required>
			</li>
		</ol>
	</fieldset>
	<fieldset>
		<legend>Card details</legend>
		<ol>		
			<li>
				<fieldset>
					<legend>Card type</legend>
					<ol>
					
							<li>
							<input type="radio" id="visa" name="cardtype">
							<label for=visa><img src="image\Visa-Logo-Free-Download-PNG.png" height=20px width=20px>VISA<b>&nbsp</b></label>
                            </li>
						    <li>
							<input type="radio" id="amex" name="cardtype">
							<label for=amex><img src="image\179431.png" height=20px width=20px><b>&nbsp</b>AMEX</label>
                             </li>
                             <li>
							<input type="radio" id="mastercard" name="cardtype">
							<label for=mastercard><img src="image\mcbc_debit-rev_84px.png" height=20px width=20px>MASTERCARD<b>&nbsp</b></label>
                            </li>
					</ol>
				</fieldset>
			</li>
			<li>
				<label for=cardnumber>Card number</label>
				<input id=cardnumber name=cardnumber type=number required>
			</li>
			<li>
				<label for=secure>Security code</label>
				<input id=secure name=secure type=number required>
			</li>
			<li>
				<label for=namecard>Name on card</label>
				<input id=namecard name=namecard type=text placeholder="Exact name as on the card" required>
			</li>
		</ol>
	</fieldset>
	<fieldset>
		<button type=submit name="submit">Buy it!</button>
	</fieldset>
</form>

</body>
</html>