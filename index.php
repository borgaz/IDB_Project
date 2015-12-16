<?php
include ($_SEREVER['DOCUMENT_ROOT'].'/fns/funkcje.php');
session_start();

$controller = 'galeria';

$view = empty($_GET['view']) ? 'index' : $_GET['view'];

switch($view) {
	case 'index' :
	break;
	
	case 'kategoria' :
	break;
	
	case 'kategorie' :
	break;
	
	case 'produkt' :
	break;
	
	case 'rejestracja' :
	break;
	
	case 'dodaj' :
		
		if(isset($_POST['submitDodaj'])){
			addProduct();
			header("Location: index.php?view=koszyk");
		}
	break;
	
	case 'zarejestruj' :
		
		if(isset($_POST['submitRejestruj'])){
			if($new_id = createUser($_POST['user'])){
				$_SESSION['user_id'] = $new_id;
				header("Location: index.php?view=logowanie");
			}
		}
	break;
	
	case 'wyloguj' :
		logout();
		header("Location: index.php");
		break;
	
	case 'zaloguj' :
		if(isset($_POST['submitLoguj'])){
			if($new_id = getUser($_POST['user'])){
				$_SESSION['user_id'] = $new_id;
			}
			header("Location: index.php");
		}
		break;
	
	case 'koszyk' :
	break;
}
include ($_SERVER['DOCUMENT_ROOT'].'/views/layouts/'.$controller.'.php');
?>