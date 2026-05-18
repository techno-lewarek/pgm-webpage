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
		<? require_once  ('include/zakladki/menu-normal.php');  ?>
	</div>
	<div class="ukryj_nie_mobile">
		<? require_once  ('include/zakladki/menu-mobile.php');  ?>
	</div>
</div>	
<div class="max_wymiar_full_hd">	
	<div class="tlo_siwe">
        <div class="max_wymiar">        
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 do_srodka">
				<img src="images/zdj1.webp" alt="20 lat doświadczenia" class="zdj_home" />
				<div class="odstep_25 ukryj_nie_mobile"></div>
			</div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="cz_niebieska cz_bold cz_18"><? echo menu1; ?></div>
				<div class="odstep_10"></div>
				<h1 class="cz_36 cz_normal"><? echo menu2; ?></h1>
				<div class="odstep_20"></div>
				<div class="tresc">
					<? $zakladkib->WyswietlZakladkiTresc(2); ?> 
				</div>
				<div class="odstep_20"></div>
				<div class="cz_20 cz_bold cz_upper cz_niebieska"><? echo menu3; ?></div>
				<div class="odstep_20"></div>
				<div class="home_ticky_l">	
					<img src="images/strzalka.webp" alt="strzałka" /> <? echo menu4; ?>
					<div class="odstep_5"></div>
					<img src="images/strzalka.webp" alt="strzałka" /> <? echo menu5; ?>
					<div class="odstep_5"></div>
					<img src="images/strzalka.webp" alt="strzałka" /> <? echo menu6; ?>
				</div>
				<div class="home_ticky_p">	
					<img src="images/strzalka.webp" alt="strzałka" /> <? echo menu7; ?>
					<div class="odstep_5"></div>
					<img src="images/strzalka.webp" alt="strzałka" /> <? echo menu8; ?>
					<div class="odstep_5"></div>
					<img src="images/strzalka.webp" alt="strzałka" /> <? echo menu9; ?>		
				</div>
				<div class="odstep_50"></div>
				<div class="do_prawej">	
					<a href="o-nas"><div class="button"><? echo menu10; ?></div></a>
				</div>	
			</div>			
		</div>	
	</div>
</div>	
<div class="max_wymiar_full_hd">
	<div class="odstep_30"></div>
	<div class="max_wymiar">        
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 do_srodka">
			<div class="cz_niebieska cz_bold cz_18"><? echo menu11; ?></div>
			<div class="odstep_5"></div>
			<div class="cz_24 cz_bold"><? echo menu12; ?></div>
			<div class="odstep_10"></div>
			<div class="cz_18">
				<? $zakladkib->WyswietlZakladkiTresc(3); ?> 
			</div>
			<div class="odstep_30"></div>
			<a href="relokacje-serwis-maszyn"><div class="box">
				<img src="images/box-ik1.webp" alt="Relokacje i Serwis maszyn" />
				<div class="box_tytul">
					<span class="cz_14 cz_bold cz_upper"><? echo menu13; ?></span>
					<div class="odstep_5"></div>
					<div class="do_prawej"><? echo menu10; ?></div>
				</div>
			</div></a>
			<a href="maszyny-dla-poligrafii"><div class="box box_kolor">
				<img src="images/box-ik2.webp" alt="MASZYNY DLA POLIGRAFII" />
				<div class="box_tytul">
					<span class="cz_14 cz_bold cz_upper"><? echo menu14; ?></span>
					<div class="odstep_5"></div>
					<div class="do_prawej"><? echo menu10; ?></div>
				</div>
			</div></a>
			<div class="box2 box2_zdj1">
				
			</div>	
			<div class="box2 box2_zdj2">
			
			</div>
			<a href="zaladunki-rozladunki"><div class="box">
				<img src="images/box-ik3.webp" alt="ZAŁADUNKI, ROZŁADUNKI" />
				<div class="box_tytul">
					<span class="cz_14 cz_bold cz_upper"><? echo menu15; ?></span>
					<div class="odstep_5"></div>
					<div class="do_prawej"><? echo menu10; ?></div>
				</div>
			</div></a>
			<a href="wynajem-widlakow"><div class="box box_kolor">
				<img src="images/box-ik4.webp" alt="WYNAJEM WIDLAKÓW" />
				<div class="box_tytul">
					<span class="cz_14 cz_bold cz_upper"><? echo menu16; ?></span>
					<div class="odstep_5"></div>
					<div class="do_prawej"><? echo menu10; ?></div>
				</div>
			</div></a>			
		</div>
	</div>
	<div class="odstep_30"></div>
</div>	
<div class="max_wymiar_full_hd">
	<div class="tlo_czarne">
        <div class="max_wymiar">        
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 do_srodka">
				<img src="images/zdj2.webp" alt="Zobacz jak pracujemy" class="zdj_home" />
			</div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="odstep_40"></div>
				<div class="cz_bold cz_16"><? echo menu17; ?></div>
				<div class="odstep_10"></div>
				<div class="cz_30 cz_normal"><? echo menu18; ?></div>
				<div class="odstep_20"></div>
				<div class="tresc">
					<? $zakladkib->WyswietlZakladkiTresc(4); ?> 
				</div>				
				<div class="odstep_20"></div>
				<div class="cz_20 cz_bold cz_upper"><? echo menu19; ?></div>
				<div class="odstep_20"></div>				
				<div class="belka_slogan">
					<? echo menu20; ?>
				</div>
				<div class="belka_slogan">
					<? echo menu21; ?>
				</div>
				<div class="belka_slogan">
					<? echo menu22; ?>
				</div>
				<div class="belka_slogan">
					<? echo menu23; ?>
				</div>	
			</div>			
		</div>	
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
				