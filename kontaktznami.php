<?
	session_start();
	require_once  ('jezyki/jezyki.php');
?>
<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><? require_once  ('include/tagi/title.php');  ?></title>
<meta name="description" content="<? require_once  ('include/tagi/opis.php'); ?>" />
<meta name="keywords" content="<? require_once  ('include/tagi/kluczowe.php');  ?>" />
<meta name="author" content="Projekt i wykonanie: www.devilart.pl" />
<meta name="robots" content="index, follow" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >	
<link rel="stylesheet" href="style.css" >	
<? require_once  ('include/zakladki/head.php');  ?>
	
</head>
<body class="pgm-modern">
<? require_once  ('include/zakladki/index_id.php');  ?>	
<div class="max_wymiar_full_hd">
	<div class="ukryj_mobile">
		<? require_once  ('include/zakladki/menu-normal-podstrona.php');  ?>
	</div>
	<div class="ukryj_nie_mobile">
		<? require_once  ('include/zakladki/menu-mobile.php');  ?>
	</div>
</div>
<div class="max_wymiar_full_hd">
	<div class="max_wymiar">        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1 class="cz_24 cz_upper cz_niebieska do_srodka"><? require_once  ('include/zakladki/tytul.php');  ?></h1>
			<div class="odstep_15"></div>
			<div class="linia"></div>
			<div class="odstep_15"></div>
            <div class="tresc">  
            	<? require_once  ('include/zakladki/index.php');  ?> 
				<? require_once  ('include/zdjecia/index.php');  ?> 
			</div>	
		</div>
	</div>	
	<div class="odstep_30"></div>
</div>	
<div class="max_wymiar_full_hd">
	<div class="mapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44252.129137225675!2d20.645102372678274!3d52.136435003085225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4719490e6b89e121%3A0xa980a18cd2ecea79!2sSowia%201%2C%2005-822%20Milan%C3%B3wek!5e0!3m2!1spl!2spl!4v1704555314526!5m2!1spl!2spl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</div>
<div class="max_wymiar_full_hd">
	<div class="odstep_30"></div>
	<div class="max_wymiar">  
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<div class="cz_niebieska cz_bold cz_18"><? echo menu24; ?></div>
			<div class="odstep_10"></div>
			<h1 class="cz_36 cz_normal"><? echo menu25; ?></h1>
			<div class="odstep_20"></div>
			<div class="tresc">
				<? $zakladkib->WyswietlZakladkiTresc(5); ?> 
			</div>
			<div class="odstep_20"></div>
			<div class="belka_slogan cz_biala cz_24 cz_bold">
				<? echo menu26; ?>
			</div>
			<div class="odstep_30"></div>
			<div class="box3">
				<span>20 +</span>
				<div class="odstep_5"></div>
				<? echo menu27; ?>
			</div>
			<div class="box3">
				<span>500 +</span>
				<div class="odstep_5"></div>
				<? echo menu28; ?>
			</div>
			<div class="box3">
				<span>800 +</span>
				<div class="odstep_5"></div>
				<? echo menu29; ?>
			</div>
			<div class="box3">
				<span>10 +</span>
				<div class="odstep_5"></div>
				<? echo menu30; ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 do_srodka">
			<img src="images/zdj3.webp" alt="Najwyższa jakość maszyn na rynku" class="zdj_home" />
		</div>
	</div>
</div>	
<div class="max_wymiar_full_hd">	
    <div class="stopka">
        <div class="max_wymiar">        
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	
				<? require_once  ('include/zakladki/stopka.php');  ?>
			</div>
		</div>
	</div>
</div>
<?
if ($_SESSION['cookie']!=2016) { ?>
<div class="cookie" id="cookie">
	<script type="text/javascript">
		function SchowajCookies() {		
			document.getElementById('cookie').style.display="none";
			jQuery('#cookie').load('include/zapisz-sesje-cookie.php');
		}
	</script> 
	<? echo menu31; ?>
    <a href="#" onclick="SchowajCookies(); return false;"><img src="images/cookie_yes.png" alt="Submit cookie" height="20px"></a>
</div>
<? } ?>  

 
</body>
</html>	
				