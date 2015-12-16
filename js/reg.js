function areFieldsEqual(pole1, pole2)
{
	if(pole1.value != pole2.value){
		document.getElementById("error"+pole2.id).innerHTML = "Hasła nie są zgodne!";
		return false;
	}
	else{
		document.getElementById("error"+pole2.id).innerHTML = "";
		return true;
	}
}
// Komunikat o niezgodności haseł nie jest wyświetlany w przypadku niewypełnionych wszystkich pól rejestracji,
// ponieważ każde z nich zostało w HTML5 ustowione jako required, więc submit nie zadziała i nie uruchomi skryptu,
// dopóki wszyskie pola nie będą wypełnione
window.onload = function()
{
	document.getElementById("regform").onsubmit = function()
	{
		if(areFieldsEqual(this.haslo, this.phaslo)){
			return true;
		}
		else{
			return false;
		}
	}
}