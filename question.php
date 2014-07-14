<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
session_start();
?>
<html>
 
<head>
<link rel="stylesheet" media="all" type="text/javascript"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

<title>Questions</title>
 
</head>
 
<body>

<style>
html {
font-size: 12px;
}

p {
font-size: 1.3rem;
font-family:Verdana, Arial;
text-align:center;
}

label {
text-align:center;
font-family:Verdana, Arial;
}

input {
text-align:center;
font-family:Verdana, Arial;
}


</style>

<!--index-->

    <div data-role="page" id="index">
        <div data-role="header" width="100%">
            <h1>Quel apprenant êtes-vous ?</h1>
        </div>
        <div role="main" class="ui-content">

		<br><img src="logo.png" width="100%" height="100%" alt="Photo"/></br>
			<form method="post">

    	<fieldset align="left">
        	<br>
			<label for="nom">Comment vous appellez-vous ?</label>
			<input type="text" name="nom" id="nom" size="25" maxlength="20" value="">
			
			<label for="date">Votre date de naissance :</label>
			<input type="date" name="date" id="date" size="35" maxlength="10" value="">
			<br/>
			
	<label for="select-native-fc">Votre niveau d'études</label>
    <select name="select-native-fc" id="select-native-fc">
        <option value="bac">Bac</option>
        <option value="bac +1">Bac +1</option>
        <option value="bac +2">Bac +2</option>
		<option value="bac +3">Bac +3</option>
		<option value="bac +4">Bac +4</option>
		<option value="bac +5">Bac +5</option>
    </select>
			<br>
			<a href="#foo" class="ui-btn ui-shadow ui-corner-all">Instructions</a>
            <a href="#bar" class="ui-btn ui-shadow ui-corner-all">Commencer le test !</a>
        </div>
    </div>

<!--questions-->
    
    <div data-role="page" id="foo">
        <div data-role="header">
            <h1>Réalisez le test :</h1>
        </div>
        <div role="main" class="ui-content">
            <p>Vous trouverez ci-dessous 9 catégories de 4 mots. 
            <br>Il s'agit de classer les mots de chaque catégorie qui caractérisent le mieux votre mode d'apprentissage en leur affectant un ordre d'intensité de 1 à 4 (4 pour le mot le plus adapté jusqu'à 1 pour celui l'est le moins).</br>
            Il n'y a pas de bonne ou de mauvaise réponse, tous les choix sont acceptables. 
            <br>Le but de ce test est de décrire votre manière d'apprendre, non pas d'évaluer votre aptitude à l'apprentissage.</br>
            </p>
            <a href="#index" class="ui-btn ui-shadow ui-corner-all">Faire le test</a>
        </div>
    </div>
 
 
 <!--SERIE1-->
    <div data-role="page" id="bar" align="center">	
            <div data-role="header">
                <div class= "ligne1">SÉRIE 1</div>
            </div><!-- /header -->
            <div role="main" class="ui-content">
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="differencier">Différencier :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="essayer">Essayer :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="s_impliquer">S'impliquer :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="etre_pratique">Etre pratique :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
                <a href="#foo" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Retour</a>
                <a href="#second" class="ui-btn ui-shadow ui-corner-all">Suivant</a>
            </div>
    </div>
	
<!--SERIE2-->	
	<div data-role="page" id="second" align="center">
            <div data-role="header">
                <div class= "ligne2">SÉRIE 2</div>
            </div><!-- /header -->
            <div role="main" class="ui-content">
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="receptif">Réceptif :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="logique">Logique :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="methodique">Méthodique :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="impartial">Impartial :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
                <a href="#bar" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Retour</a>
                <a href="#third" class="ui-btn ui-shadow ui-corner-all">Suivant</a>
            </div>
    </div>
 
<!--SERIE3-->	
	<div data-role="page" id="third" align="center">
            <div data-role="header">
                <div class= "ligne3">SÉRIE 3</div>
            </div><!-- /header -->
            <div role="main" class="ui-content">
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="ressentir">Ressentir : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="faire_attention">Faire attention : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="reflechir">Réfléchir :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="faire">Faire :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
                <a href="#second" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Retour</a>
                <a href="#four" class="ui-btn ui-shadow ui-corner-all">Suivant</a>
            </div>
    </div>

<!--SERIE4-->	
	<div data-role="page" id="four" align="center">
            <div data-role="header">
                <div class= "ligne4">SÉRIE 4</div>
            </div><!-- /header -->
            <div role="main" class="ui-content">
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="accepter">Accepter : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="prendre_des_risques">Prendre des risques : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="evaluer">Evaluer :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="prendre_conscience">Prendre conscience :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
                <a href="#third" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Retour</a>
                <a href="#fifth" class="ui-btn ui-shadow ui-corner-all">Suivant</a>
            </div>
    </div>
 
<!--SERIE5-->	
	<div data-role="page" id="fifth" align="center">
            <div data-role="header">
                <div class= "ligne5">SÉRIE 5</div>
            </div><!-- /header -->
            <div role="main" class="ui-content">
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="intuitif">Intuitif : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="productif">Productif : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="logique">Logique :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="interrogateur">Interrogateur :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
                <a href="#four" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Retour</a>
                <a href="#six" class="ui-btn ui-shadow ui-corner-all">Suivant</a>
            </div>
    </div>
 
<!--SERIE6-->	
	<div data-role="page" id="six" align="center">
            <div data-role="header">
                <div class= "ligne6">SÉRIE 6</div>
            </div><!-- /header -->
            <div role="main" class="ui-content">
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="abstrait">Abstrait : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="observateur">Observateur : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="concret">Concret :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="actif">Actif :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
                <a href="#fifth" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Retour</a>
                <a href="#seven" class="ui-btn ui-shadow ui-corner-all">Suivant</a>
            </div>
    </div>
 
<!--SERIE7-->	
	<div data-role="page" id="seven" align="center">
            <div data-role="header">
                <div class= "ligne7">SÉRIE 7</div>
            </div><!-- /header -->
            <div role="main" class="ui-content">
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="oriente_vers_le_present">Orienté vers le présent : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="reflechissant">Réfléchissant : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="oriente_vers_le_futur">Orienté vers le futur :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="pragmatique">Pragmatique :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
                <a href="#six" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Retour</a>
                <a href="#eight" class="ui-btn ui-shadow ui-corner-all">Suivant</a>
            </div>
    </div>
	
<!--SERIE8-->	
	<div data-role="page" id="eight" align="center">
            <div data-role="header">
                <div class= "ligne8">SÉRIE 8</div>
            </div><!-- /header -->
            <div role="main" class="ui-content">
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="partir_de_son_experience">Partir de son expérience : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="observer">Observer : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="penser">Penser :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="experimenter">Expérimenter :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
                <a href="#seven" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Retour</a>
                <a href="#nine" class="ui-btn ui-shadow ui-corner-all">Suivant</a>
            </div>
    </div>
 
<!--SERIE9-->	
	<div data-role="page" id="nine" align="center">
            <div data-role="header">
                <div class= "ligne9">SÉRIE 9</div>
            </div><!-- /header -->
            <div role="main" class="ui-content">
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="intense">Intense : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="reserve">Réservé : </legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="rationnel">Rationnel :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend class="responsable">Responsable :</legend>
        <input type="radio" name="numero1" id="numero1" value="1">
        <label for="numero1">1</label>
        <input type="radio" name="numero2" id="numero2" value="2">
        <label for="numero2">2</label>
        <input type="radio" name="numero3" id="numero3" value="3">
        <label for="numero3">3</label>
        <input type="radio" name="numero4" id="numero4" value="4">
        <label for="numero4">4</label>
    </fieldset>
					<br/>
                <a href="#eight" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Retour</a>
                <a href="#resultats" class="ui-btn ui-shadow ui-corner-all">Résultats</a>
            </div>
    </div> 
 
      
</div>   

<!--resultats-->

<div data-role="page" id="resultats">
<div data-role="header">
<h1>Les résultats de votre test :</h1>
</div>

 <div role="main" class="ui-content">
<?php
//mots disponible en JSON sous JS
//Ã  rÃ©cupÃ©rer dans un script JS via
echo "dataMotsJSON=$dataMotsJSON;\n"
$dataMotsJSON='{"question":[{ "mot": [{"libelle":"diffÃ©rencier","categorie":null},{"libelle":"essayer","categorie":"OR"},
{"libelle":"s\'impliquer","categorie":null},{"libelle":"Ãªtre pratique","categorie":"EA"}] },
{ "mot": [{"libelle":"rÃ©ceptif","categorie":"EC"},{"libelle":"logique","categorie":null},{"libelle":"mÃ©thodique","categorie":"CA"},{"libelle":"impartial","categorie":null}] },
{ "mot": [{"libelle":"ressentir","categorie":"EC"},{"libelle":"faire attention","categorie":"OR"},{"libelle":"rÃ©flÃ©chir","categorie":"CA"},{"libelle":"faire","categorie":"EA"}] },
{ "mot": [{"libelle":"accepter","categorie":"EC"},{"libelle":"prendre des risques","categorie":null},{"libelle":"Ã©valuer","categorie":"CA"},{"libelle":"prendre consience","categorie":null}] },
{ "mot": [{"libelle":"intuitif","categorie":"EC"},{"libelle":"productif","categorie":null},{"libelle":"logique","categorie":"CA"},{"libelle":"interrogateur","categorie":null}] },
{ "mot": [{"libelle":"abstrait","categorie":null},{"libelle":"observateur","categorie":"OR"},{"libelle":"concret","categorie":null},{"libelle":"actif","categorie":"EA"}] },
{ "mot": [{"libelle":"orientÃ© vers le prÃ©sent","categorie":"EC"},{"libelle":"rÃ©flechissant","categorie":"OR"},{"libelle":"orientÃ© vers le futur","categorie":null},{"libelle":"pragmatique","categorie":"EA"}] },
{ "mot": [{"libelle":"partir de son expÃ©rience","categorie":"EC"},{"libelle":"observer","categorie":"OR"},{"libelle":"penser","categorie":"CA"},{"libelle":"expÃ©rience","categorie":"EA"}] },
{ "mot": [{"libelle":"intense","categorie":null},{"libelle":"rÃ©servÃ©","categorie":"OR"},{"libelle":"rationnel","categorie":"CA"},{"libelle":"responsable","categorie":"EA"}]}] }';

//mots disponibles via Array PHP = tableau associatif
//$dataMotsArrayObject=json_decode($dataMotsJSON,true);

//mots disponibles via une class en PHP
$dataMotsClassObject=json_decode($dataMotsJSON,false);

//rajout d'une propriÃ©tÃ© score, ex. pour la question 0, mot 0 
//$dataMotsClassObject->question[0]->mot[0]->score=4;

?>
  
  
 <!-- if ($calcul_EC > $calcul_OR && $calcul_EC > $calcul_CA && $calcul_EC > $calcul_EA)
  {
  echo "<div class=titre>Score élevé en : Expérience concrète</div><br>
Cela correspond à une approche de l’apprentissage basée sur la réceptivité et l’expérience, 
  ce qui dépend essentiellement de jugements inspirés par le sentiment. Des sujets à score élevé en EC 
  ont tendance à être empathiques et orientés vers les autres. Ils trouvent en général que les apports théoriques 
  sont sans utilité et préfèrent traiter chaque situation comme un cas unique. Ils apprennent mieux à partir d’exemples 
  particuliers dans lesquels ils peuvent être engagés. Dans leur approche de l’apprentissage, des sujets qui privilégient 
  l’expérience concrète s’orientent davantage vers leurs pairs que vers les autorités et ils tirent davantage de l’échange 
  et de la discussion avec les sujets qui sont eux aussi à dominante EC.</br>";
  }else if ($calcul_OR > $calcul_EC && $calcul_OR > $calcul_CA && $calcul_OR > $calcul_EA)
  {
  echo "<div class=titre>Score élevé en : Observation réfléchie</div><br>

Cela indique une approche de l’apprentissage basée sur l’expérimentation, conduite de manière impartiale et réfléchie. 
Des sujets au score élevé en OR se basent beaucoup sur une observation minutieuse pour formuler un jugement et préfèrent 
des situations d’apprentissage comme des exposés qui leur permettent d’adopter le rôle d’observateur impartial et objectif. 
Ces sujets ont tendance à être introvertis.</br>";
}else if ($calcul_CA > $calcul_EC && $calcul_CA > $calcul_OR && $calcul_CA > $calcul_EA)
  {
  echo "<div class=titre>Score élevé en : Conceptualisation abstraite</div><br>
Cela correspond à une approche analytique et conceptuelle de l’apprentissage qui est en rapport avec la pensée logique 
et l’évaluation rationnelle. Des sujets à score élevé en CA s’intéressent aux objets et aux symboles plus qu’aux personnes. 
Ils apprennent mieux dans des situations d’apprentissage structurés de manière autoritaire et impersonnelle qui mettent l’accent 
sur la théorie et l’analyse systématique. Ils sont frustrés par des démarches non structurées d’apprentissage par découverte, 
comme des exercices et des simulations et ils en tirent peu de bénéfice.</br>";
}else if ($calcul_EA > $calcul_EC && $calcul_EA > $calcul_OR && $calcul_EA > $calcul_CA)
  {
  echo "<div class=titre>Score élevé en : Expérimentation active</div><br>

Cela indique une orientation vers un apprentissage par l’action, basé sur l’expérimentation. Des sujets au score élevé en EA 
apprennent mieux lorsqu’ils peuvents s’engager dans des projets, du travail à la maison ou des discussions en petits groupes. 
Ils n’aiment pas les situations d’apprentissage passives comme les cours. Ces sujets ont tendance à être extravertis.</br>
";
}

if ($CA_EC >=3){

if($EA_OR >=3){
echo "<br><div class=titre>Votre profil est : Convergent</div>
<br>Les aptitudes d'apprentissage dominantes du convergent sont la conceptualisation abstraite (ca) et l'expérimentation active (ea). 
 La force la plus importante de ce type de sujet réside dans l'application pratique des idées. Une personne ayant ce type semble le mieux 
 réussir dans des situations analogues aux tests d'intelligence, où il n'y a qu'une réponse correcte ou solution à une question ou un problème. 
 La connaissance de cette personne est organisée de telle sorte qu'elle peut se centrer sur des problèmes spécifiques en utilisant une pensée 
 hypothéticodéductive. La recherche concernant ce mode d'apprentissage montre que les convergents sont relativement peu émotifs, 
 préférant s'occuper de choses plutôt que de personnes. Ils ont des intérêts techniques étroits et cherchent à se spécialiser en science physiques. 
 Ce mode d'apprentissage est caractéristique de bon nombres d'ingénieurs.</br></br>";
}else{
echo "<br><div class=titre>Votre profil est : Assimilateur</div>
<br>L'assimilateur a des aptitudes d'apprentissage dans le domaine de la conceptualisation abstraite (ca) et de l'observation réfléchie (or).
 Une telle personne a surtout des possibilités dans le domaine de la création des modèles théoriques. <br /> <br />Elle réussit particulièrement bien dans 
 le domaine du raisonnement inductif et dans l'organisation d'observations disparates en une explication cohérente. Elle est, comme le convergent, 
 moins intéressée par les autres que par les concepts abstraits ; mais elle se sent moins concernée par l'emploi pratique des théories. 
 Pour un tel sujet, il est plus important que la théorie soit satisfaisante d'un point de vue logique ; dans une situation dans laquelle 
 une théorie ne s'accommoderait pas aux faits, l'assimilateur aurait plutôt tendance à négliger ou à réexaminer les faits. Ce mode 
 d'apprentissage est plutôt caractéristique des sciences de base et des mathématiques que des sciences appliquées. On trouve ce mode d'apprentissage 
 chez les praticiens de la recherche ou de la planification.</br></br>";
}

}else{
if($EA_OR >=3){
echo "<br><div class=titre>Votre profil est : Accomodateur</div>
<br>L'accomodateur a des orientations opposées à celles de l'assimilateur. Il réussit mieux dans les domaines de 
 l'expérience concrète (ec) et l'expérimentation active (ea). Il est surtout capable de réaliser des choses - en mettant en pratique des 
 plans et des expériences - et de s'engager dans de nouvelles expériences.Il a tendance à prendre davantage de risques que les 
 sujets caractéristiques des trois autres catégories. On a retenu le terme accommodateur car un tel sujet réussit particulièrement bien dans 
 des situations ou il s'agit de s'adapter à des circonstances pécifiques.Dans des situations dans lesquelles une théorie ne 
 correspond pas aux faits, cette personne remet le plan ou la théorie en question. Elle a tendance à résoudre les problèmes d'une manière 
 intuitive par essai et erreur, s'appuyant plus sur l'information des autres que sur leur aptitude à l'analyse. Elle est à l'aise avec les 
 autres,mais est souvent perçue comme impatiente et brusque. Sa formation se situe souvent dans le domaine technique ou pratique 
 comme les affaires. On retrouve des personnes ayant ce mode d'apprentissage dans des métiers orientés vers l'action, comme les métiers du commerce.</br></br>";
}else{
 echo "<br><div class=titre>Votre profil est : Divergent</div>
 <br>Le divergent a des possibilités d'apprentissage opposées à celles du convergent. Un tel sujet est le plus à l'aise dans une situation 
 d'expérience concrète (ec) et d'observation réfléchie (or). Sa force réside dans l'imagination. Il parvient très bien à percevoir des 
 situations concrètes en adoptant des perspectives variées.  Nous avons appelé ce style divergent car une personne ayant ce mode d'apprentissage réussit  
 mieux dans des situations qui supposent la création d'idées comme  par exemple des sessions de brainstorming. La recherche montre que 
 les divergents s'intéressent à autrui et font preuve d'imagination et  d'émotion. Ils ont des intérêts culturels étendus et tendent à se spécialiser 
 dans le domaine  artistique. Les conseillers, les spécialistes du développement, les chefs du personnel  sont souvent caractérisés par ce mode 
 d'apprentissage.</br></br>";
}
} -->

  <a href="#index" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Refaire le test</a>
  </div>
</div>     
</body>
 
</html>