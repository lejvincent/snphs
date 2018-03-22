//===== Script gérant les formulaires de la page d'inscription =====

$(document).ready(function() {

 var $pseudo = $('#Pseudo');
 var $mdp = $('#Mdp');
 var $confirmation = $('#Mdp2');
 var $mail = $('#AdMail');
 var $birth = $('#birth');
 var $envoi = $('#envoi');
 var $aide=$('.text-danger');
 var $aide1=$('#aide1');
 var $aide2=$('#aide2');
 var $flatpickr = $('#flatpickr');
 var $choix = $('#choix');

function verifier (event) {
	event.preventDefault();

	// Simuler l'appel de chaque fonction 'blur' de tous less champs à valider.
	$('input').blur();
}

// Fonction de colorisation de la pertinence du mot de passe
 $mdp.on('keyup', function(){
  var regex_01=/[a-z]+/;
  var regex_02=/[A-Z]+/;
  var regex_03=/[0-9]+/;
  var regex_04=/[àèéç&#@]+/;
  var score=0;
  var $value_mdp=$mdp.val();

  if (regex_01.test($value_mdp)) {
    score++;
  }  
  if (regex_02.test($value_mdp)) {
    score++;    
  }  
  if (regex_03.test($value_mdp)) {
    score++;
  }  
  if (regex_04.test($value_mdp)) {
    score++;
  }
  if ($value_mdp.length>5 && $value_mdp.length<=9) {
    score++;
  }
  if ($value_mdp.length>9) {
    score+=2;
  }  
  if (score>6) {
    score=6;
  }
	// Formule pour passer d'une couleur rouge à vert !
  $mdp.css('backgroundColor','rgb('+Math.round(255-((score*255)/6))+','+Math.round((score*255)/6)+',0)')
});

function toggleError (input,error){
	var label = input.siblings('label').html();

	if (error) {
		var msgErreur = $('<span>');
		msgErreur.addClass('error1');
		input.addClass('error');
		msgErreur.html(label + " non valide");
	//TESTER SI DEJA UN FRERE
		if (input.siblings('span').length == 0) {
			input.after(msgErreur);
		}
	}

	else {
		input.siblings('span').remove();
		input.removeClass('error');
		}
}

// Fonctions de verif particulières

function verifTaille (event) {
	var nom = $(event.target);
	var error = nom.val().length < nom.attr('taille');
	toggleError(nom, error);
}

function verifEmail (event) {
	var courriel = $(event.target);
	var regex = /^[a-zA-Z0-9-._]+@[a-z0-9-]+\.[a-z]{2,4}$/;
	toggleError(courriel, !regex.test(courriel.val()));
}

function verifCase (event){

	var cgu = $(event.target);
	var check = !cgu.is(":checked");
	var msgErreur = $('<span>');

	if (check){
		msgErreur.addClass('error1');
		msgErreur.html("    Il faut cocher !");
		if (cgu.siblings('span').length == 0) {
			cgu.after(msgErreur);
		}
	}
	else {
		cgu.siblings('span').remove();
		}
}

function verifMdp (event){
	var mdp=$('#Mdp');
	var mdp2=$(event.target);
	var error=((mdp.val()!==mdp2.val())||(mdp2.val()==""))
	toggleError(mdp2, error);
}

function verifDate(event){
	var verifTable=[];
	var test=$(event.target);
	var msgErreur = $('<span>');
	var date=$flatpickr.val();
	var type_error="";

	if (date=="") {
		type_error="La date est vide !";
	}
	else{
		verifTable=date.split('-');
		if (verifTable.length!=3){
		type_error="Votre date de naissance est incorrecte !";
	}
		else{
			if ((verifTable[2]>2000) || (verifTable[2]<1900) || (verifTable[1]>12 || (verifTable[0]>31))){
				type_error="Votre date de naissance est incorrecte !";
			}
			else{
				if ((verifTable[1]==02) && (verifTable[0]>28) && (!(verifTable[2] % 4 === 0))){
					type_error="Il n'y a que 28 jours dans le mois de février !";
				}
				else{
					if((verifTable[1]==02) && (verifTable[0]>29) && ((verifTable[2] % 4 === 0))){
						type_error="Il n'y a que 29 jours dans le mois de février les années bissextiles !";
					}
					else{
						if (((verifTable[1]==04) || (verifTable[1]==06) || (verifTable[1]==9) || (verifTable[1]==11)) && (verifTable[0]>30))
					type_error="Il n'y a que 30 jours dans votre mois de naissance !";
					}
				}
			}
		}
	}
	console.log(type_error)
	if (type_error!=""){
		test.addClass('error');
		msgErreur.addClass('error1');
		msgErreur.html(type_error);
		test.siblings('span').remove();	
		test.after(msgErreur);
	}
	else {
		test.siblings('span').remove();
		test.removeClass('error');
	}

}

// Verifications

//Va chercher tous les input qui possèdent l'attribut "taille".
$('input[taille], select[taille]').on('blur', verifTaille);
$('#AdMail').on('blur',verifEmail);
$('#choix').on('blur',verifCase);
$('#Mdp2').on('blur',verifMdp);
$('#form-inscrip').on('submit', verifier);
$('#flatpickr').on('blur',verifDate);

})
