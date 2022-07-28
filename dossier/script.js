/*window.onload = ()=>{
    var w=window.innerWidth;
    alert(w);
}*/
function darkmode(){
    var body=document.querySelector("body");
    var html=document.querySelector('html')
    
        html.style.color='white';
        body.style.backgroundColor='black'
    
}
// form de contact 
var nom=document.getElementById('nom');
var prenom=document.getElementById('prenom');
var email=document.getElementById('mail');
var tel=document.getElementById('tel');
var message=document.getElementById('message');
var submit=document.getElementById('bttn');
function valide(){
    if(nom.value=="" || !isNaN(nom.value)){
        document.getElementById('formerreur').style.color='red';
        document.getElementById('formerreur').innerHTML='*vous voullez saisir votre nom ';
        return false;
    }
    if(prenom.value=="" || !isNaN(nom.value)){
       document.getElementById('formerreur').style.color='red';
        document.getElementById('formerreur').innerHTML='*vous voullez saisir votre prenom';
        return false;
    }
    if(email.value==""){
        document.getElementById('formerreur').style.color='red';
        document.getElementById('formerreur').innerHTML='*vous voullez saisir votre email';
        return false;
    }
    if(tel.value==""){
        document.getElementById('formerreur').style.color='red';
        document.getElementById('formerreur').innerHTML='*vous voullez saisir votre numero telephone';
        return false;
    }
    if(message.value==""){
        document.getElementById('formerreur').style.color='red';
        document.getElementById('formerreur').innerHTML='*vous voullez saisir votre message';
        return false;
    }
    else{
        document.getElementById('formerreur').style.color='green';
        document.getElementById('formerreur').innerHTML=': les données est envoyé';
        return true;
    }
}
