<div class="post">
	<h1>Rejestracja konta</h1>
	<form action="index.php?view=zarejestruj" method="post" id="regform">
		<table>
			<tr>
				<td>Imię <span class="red">*</span></td>
				<td><input type="text" id="imie" name="user[imie]" class="textBox" maxlength="25" minlength="2" required="true"></input></td>
			</tr>
			<tr>
				<td>Nazwisko <span class="red">*</span></td>
				<td><input type="text" id="nazwisko" name="user[nazwisko]" class="textBox" maxlength="25" minlength="2" required="true"></input></td>
			</tr>
			<tr>
				<td>Email <span class="red">*</span></td>
				<td><input type="email" id="email" name="user[email]" class="textBox" maxlength="50" minlength="5" required="true"></input></td>
			</tr>
			<tr>
				<td>Hasło <span class="red">*</span></td>
				<td><input type="password" id="haslo" name="user[haslo]" class="textBox" maxlength="30" minlength="8" required="true"></input></td>
			</tr>
			<tr>
				<td>Powtórz hasło <span class="red">*</span></td>
				<td><input type="password" id="phaslo" name="user[phaslo]" class="textBox" maxlength="30" minlength="8" required="true"></input></td>
				<td><div id="errorphaslo" class="red"></div></td>
			</tr>
			<tr>
				<td>Data urodzenia <span class="red">*</span></td>
				<td><input type="date" id="data_ur" name="user[data_ur]" class="textBox" min="1900-01-01" max="1997-12-31" required="true"></input></td>
			</tr>
			<tr>
				<td class=bold>Dane kontaktowe</td>
			</tr>
			<tr>
				<td>Ulica <span class="red">*</span></td>
				<td><input type="text" id="ulica" name="user[ulica]" class="textBox" maxlength="35" minlength="2" required="true"></input></td>
			</tr>
			<tr>
				<td>Numer domu <span class="red">*</span></td>
				<td><input type="text" id="nr_domu" name="user[nr_domu]" class="textBox" maxlength="10" minlength="1" required="true"></input></td>
			</tr>
			<tr>
				<td>Kod pocztowy <span class="red">*</span></td>
				<td><input type="text" id="kod_pocztowy" name="user[kod_pocztowy]" class="textBox" maxlength="6" minlength="6" required="true"></input></td>
			</tr>
			<tr>
				<td>Miasto <span class="red">*</span></td>
				<td><input type="text" id="miasto" name="user[miasto]" class="textBox" maxlength="25" minlength="2" required="true"></input></td>
			</tr>
			<tr>
				<td>Numer telefonu <span class="red">*</span></td>
				<td><input type="text" id="telefon" name="user[telefon]" class="textBox" maxlength="9" minlength="9" required="true"></input></td>
			</tr>
			<tr>
				<td><input type="submit" name="submitRejestruj" id="submitRejestruj" value="Zarejestruj się"></input></td>
				<td><div class="clear"></div></td>
			</tr>
		</table>
	</form>	
<div class="clear"></div>