<div class="post">
	<h1>Logowanie</h1>
	<form action="index.php?view=zaloguj" method="post" id="logform">
		<table>
				<tr>
					<td>Email <span class="red">*</span></td>
					<td><input type="text" id="email" name="user[email]" class="textBox"></input></td>
				</tr>
				<tr>
					<td>Hasło <span class="red">*</span></td>
					<td><input type="password" id="haslo" name="user[haslo]" class="textBox"></input></td>
				</tr>
				<tr>
					<td><div id="errorlog" class="red""></div></td>
				</tr>
				<tr>
					<td><input type="submit" name="submitLoguj" id="submitLoguj" value="Zaloguj się"></input></td>
					<td>Nie masz konta? <a href="index.php?view=rejestracja">Zarejestruj się</a>
					<td><div class=clear"></div></td>
				</tr>
		</table>
	</form>	
<div class="clear"></div>