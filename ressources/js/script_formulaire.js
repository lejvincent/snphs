
//===== Script gérant les formulaires de la page d'inscription =====

//======  JQuery  =====//

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

// on cache les spans d'aide au début
  $aide.hide();	

// Appel de la fonction de validation en cours de frappe
  $('#form-inscrip .form-control').on('blur', function() {
    var variable = $(this);
    var input = variable.val();
    var input_id = variable.attr('id');
    var regex = new RegExp("^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$");
    var aide = variable.siblings('span');
    var error = false;

    switch (input_id){

      case "Pseudo":
      error = (input.length<4);
      break;

      case "AdMail":
      error = (!regex.test(input));
      break;

      case "flatpickr":
      error= ($flatpickr.val()=="");
      break;

      case "Mdp":
      error = (input=="");
      break;

      case "Mdp2":
      error = (input!=$mdp.val());
      break;

      case "choix":
      error=!$choix.is(":checked");
      break;

      default :
      console.log("t'es dans le default");
      error=false;
    }

    if (error) {
      aide.show();
      variable.addClass('error');
    }
    else{
     aide.hide();
     variable.removeClass('error');
   }

 });

//========= Fonction de validation globale lors de la souscription (en JQuery) ========== :

$('#FormuInscription').on('submit', function(event) {
  event.preventDefault();

      $('#form-inscrip .form-control').blur();
      VerifDate($flatpickr.val());
      // console.log($('#form-inscrip .form-control.error').eq(0));
      $('#form-inscrip .form-control.error').eq(0).focus();
      
      // les if de la version 1.5 sont remplacés par la fonction ci-dessus !!!!!!
    });
});

//======  Javascript  =====//

// 1- Fonction qui vérifie que la date de naissance est correcte !

function VerifDate(date){
  console.log(date);
  var verifTable=[];

  // if (date=="") {
  //   alert("Votre date de naissance !");
  //   return false;
  //   }

  verifTable=date.split('-');

  if (verifTable.length!=3){
    alert("Votre date de naissance est incorrecte !");
    return false;
  }

  if ((verifTable[2]>2000) || (verifTable[2]<1900) || (verifTable[1]>12 || (verifTable[0]>31))) {
    alert("Votre date de naissance est incorrecte !");
    return false;
  }

  if ((verifTable[1]==02) && (verifTable[0]>28) && (!(verifTable[2] % 4 === 0))) {
    alert("il n'y a que 28 jours dans le mois de février !");
    return false;
  }

  if ((verifTable[1]==02) && (verifTable[0]>29) && ((verifTable[2] % 4 === 0))) {
    alert("il n'y a que 29 jours dans le mois de février les années bissextiles !");
    return false;
  }


  if (((verifTable[1]==04) || (verifTable[1]==06) || (verifTable[1]==9) || (verifTable[1]==11)) && (verifTable[0]>30)){
    alert("il n'y a que 30 jours dans votre mois de naissance !");
    return false;
  }
  
  return true;
}

// 2- Fonction qui permet à l'utilisateur de visualiser la "sécurité" de son mot de passe !


// function SecureMDP_Color(mdp)
// {
//   var regex_01=/[a-z]+/
//   var regex_02=/[A-Z]+/
//   var regex_03=/[0-9]+/
//   var regex_04=/[àèéç&#@]+/
//   var score=0

//   if (regex_01.test(mdp.value)) {
//     score++;
//   }

//   if (regex_02.test(mdp.value)) {
//     score++;    
//   }

//   if (regex_03.test(mdp.value)) {
//     score++;
//   }

//   if (regex_04.test(mdp.value)) {
//     score++;
//   }

//   if (mdp.value.length>5 && mdp.value.length<=9) {
//     score++;
//   }

//   if (mdp.value.length>9) {
//     score+=2;
//   }

//   if (score>6) {
//     score=6;
//   }
//   // Formule pour passer d'une couleur rouge à vert !
//   mdp.style.backgroundColor='rgb('+Math.round(255-((score*255)/6))+','+Math.round((score*255)/6)+',0)';
// }

// 3- Fonction qui vérfie que les champs soient bien remplis lors de la submission du formulaire

// function verif_globale(form){

// 	if (form.AdMail.value == ""){
// 	  form.AdMail.style.border="solid 2px red";
//     document.getElementById("AdMail").focus(); 
// 	  return false;
// 	  }

// 	if (form.Pseudo.value == ""){
// 	  form.Pseudo.style.border="solid 2px red";
//     document.getElementById("Pseudo").focus(); 
// 	  return false;
// 	  }

// 	if(!VerifDate(form.flatpickr)){
// 	   form.datepicker.style.border="solid 2px red";
//      document.getElementById("datepicker").focus();
// 	   return false;
// 	  };

// 	if (form.Mdp.value == ""){
// 	  form.Mdp.style.border="solid 2px red";
//     document.getElementById("Mdp").focus();    
// 	  return false;
// 	  }
// 	if (form.Mdp.value != form.Mdp2.value){
// 	  form.Mdp.style.border="solid 2px red";
// 	  form.Mdp2.style.border="solid 2px red";
//     document.getElementById("Mdp").focus();
// 	  return false;
// 	  }
// 	if (form.choix.checked == false){
// 		alert("Coche la case !")
//     document.getElementById("choix").focus();
// 	  return false;
// 	  }  
// };

// function Reset(formu){
// 	if (formu.style.borderColor=="red"){
// 		formu.style.border="solid 1px #ced4da";
// 	}
// }