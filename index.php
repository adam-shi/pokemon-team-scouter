<!DOCTYPE html>

<head>

</head>
<body>
	<form action="search_action.php" method="post" id="team_form">
		<p>Enter username:</p> 
		<input type="text" name="username">
		<input type="submit" value="Submit">
	</form>

	<select name = "tier" form="team_form">
		<p>Select tier:</p>
		<option value="ou">OU</option>
		<option value="uu">UU</option>
		<option value="ru">RU</option>
		<option value="gen5ou">BW2 OU</option>
		<option value="gen4ou">DPP OU</option>
		<option value="gen4uu">DPP UU</option>
		<option value="gen3ou">ADV OU</option>
		<option value="gen2ou">GSC OU</option>
		<option value="gen1ou">RBY OU</option>
	</select>

</body>

