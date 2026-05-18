function WyslijForm(imie, telefon, email, wiadomosc) {

	var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
	
    if (imie.value=='') 
    {
		alert('Musisz wpisać swoje imię');
        imie.focus();
        return false;
    }
	
    if ((regex.test(email.value)==false) || (email.value=='')) 
    {
		alert('Musisz wpisać adres e-mail');
        email_kurs.focus();
        return false;
    }

    if (wiadomosc.value=='') 
    {
		alert('Musisz wpisać wiadomość');
        wiadomosc.focus();
        return false;
    }
	
	var data = new FormData()
	data.append('imie', imie.value);
	data.append('email', email.value);
	data.append('telefon', telefon.value);
	data.append('wiadomosc', wiadomosc.value);
	
	var url="pobierz_dane.php";
	xmlhttp=GetXmlHttpObject();
	xmlhttp.onreadystatechange=stateChangedWyslijForm;
	xmlhttp.open("POST",url,true);
	xmlhttp.send(data);		
	
}

function stateChangedWyslijForm() {
	if (xmlhttp.readyState==4)
	{	
		
		
		document.getElementById('form_kontakt').innerHTML=xmlhttp.responseText;

		
	}
}


function GetXmlHttpObject()
{
if (window.XMLHttpRequest)
 {
 return new XMLHttpRequest();
 }
return null;
}