<?php

session_start();

function db_connect()
{
	$con = mysql_connect('localhost', 'root', '');
	if(!$con)
	{
		echo mysql_error();
		return false;
	}
	if(!mysql_select_db('sklep'))
	{
		echo mysql_error();
		return false;
	}
	return $con;
}

function getUser($user)
{
	$qry = "SELECT email, haslo, id_klienta, imie, nazwisko FROM klient WHERE email = '$user[email]'";
	$con = db_connect();
	$result = mysql_query($qry);
	if(!$result)
	{
		echo mysql_error;
		return false;
	}
	$array = mysql_fetch_array($result);
	if($array[0] == $user[email])
	{
		if($array[1] == md5($user[haslo]))
		{
			echo "Ok";
			$user_id = $array[2];
			$_SESSION['nazwa'] = $array[3]." ".$array[4];
			return $user_id;
		}
		else
		{
			echo "Złe hasło!";
			return false;
		}
	}
	else
	{
		echo "Nie ma takiego emaila w bazie!";
		return false;
	}
	mysql_close($con);
}

function addProduct()
{
	$id_prod = $_SESSION['id_produktu'];
	$id_klienta = $_SESSION['user_id'];
	$con = db_connect();
	
	if(!isset($_SESSION['id_koszyka'])){
		$qry1 = "INSERT INTO koszyk SET
				Klientid_klienta = '$id_klienta',
				status = 'aktywny',
				data_dodania = '2015-12-11' ";
		$result1 = mysql_query($qry1);
		if(!$result1)
		{
			echo mysql_error;
			return false;
		}
		$id_kosz = mysql_insert_id();
		$_SESSION['id_koszyka'] = $id_kosz;
	}
	else{
		$id_kosz = $_SESSION['id_koszyka'];	
	}
	
	$qry2 = "INSERT INTO zamowioneprodukty SET
				Koszykid_koszyka = '$id_kosz',
				ilosc = '1',
				Produktyid_produktu = '$id_prod'";
	$result2 = mysql_query($qry2);
	if(!$result2)
	{
		echo mysql_error;
		return false;
	}
	
	mysql_close($con);
}

function logout()
{
	if(isset($_SESSION[user_id]))
	{
		$_SESSION=array();
		session_destroy(); 
	}
}

function createUser($data)
{
	$qry = "INSERT INTO klient SET
				nazwisko = '$data[nazwisko]',
				imie = '$data[imie]',
				email = '$data[email]',
				haslo = md5('$data[haslo]'),
				data_ur = '$data[data_ur]',
				ulica = '$data[ulica]',
				nr_domu = '$data[nr_domu]',
				kod_pocztowy = '$data[kod_pocztowy]',
				miasto = '$data[miasto]',
				telefon = '$data[telefon]' ";
	$con = db_connect();
	$result = mysql_query($qry);
	if(!$result)
	{
		echo mysql_error;
		return false;
	}
	$user_id = mysql_insert_id();
	mysql_close($con);
	return $user_id;
}

?>