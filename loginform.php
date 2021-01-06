<!DOCTYPE html>
<html>
<head>
	<title> Form </title>
	<link rel="stylesheet" href="style.css"> 
</head>

<body>
	<div class="outer_div">
		<h2 align="center" style="color:red;"> Continental Hotel Reservation Form </h2>
			<div  class="inner_div">
				<form>
					<table border="1px solid" width="100%" height="550px">
						<tr>
							<td align="right">
								<b> Name </b>
							</td>
							<td>
									<input type="text" placeholder= "Enter your name" name="user_name">
							</td>
						</tr>
						<tr>
							<td align="right">
							<b> eMail </b>
							</td>
							<td>
									<input type="email" id="email" value= "info@continental.pk" name="email">
							</td>
						</tr>
						<tr>
							<td align="right">
								<b> Mobile No </b>
							</td>
							<td>
									<input type="number" placeholder= "Enter your number" name="number">
							</td>
						</tr>
						<tr>
							<td align="right">
								<b> Arrival Time </b>
							</td>
							<td>
								<input type="time" placeholder="Enter your arrival time">
							</td>
						</tr>
						<tr>
							<td align="right">
								<b> Departure </b>
							</td>
							<td colspan="3">
								<input type="date">
								<input type="time">
							</td>
						</tr>
						<tr>
							<td align="right">
								<b> Room Type </b>
							</td>
							<td>
								<input type="radio" name="radio"> Single
								<input type="radio" name="radio"> Double
								<br>
								<input type="radio" name="radio"> Presidential Suit
							</td>
						</tr>
						<tr>
							<td align="right">
								<b> Preferences </b>
							</td>
							<td>
								<input type="checkbox" name="smoking"> Non-Smoking
								<br>
								<input type="checkbox" name="internet"> Internet
								<br>
								<input type="checkbox" name="firm"> Firm Mattress
							</td>
						</tr>
						<tr>
							<td align="right">
								<b> Mode of payment </b>
							</td>
							<td colspan="3">
								<input type="checkbox" name="cash"> Cash
								
								<input type="checkbox" name="check"> Check
								<br>
								<input type="checkbox" name="card"> Credit Card
									<select>
											<option> Select Card</option>
											<option> Master Card</option>
											<option> Visa </option>
											<option> Link </option>
									</select>
									
									
							</td>
						</tr>
						<tr>
							<td colspan="4" align="center">
							<input type="file">
							<br>
							<br>
							<input type="button" value="Send Data">
								
								
							</td>
						</tr>
					</table>
				</form>
			</div>
	</div>
</body>
</html>