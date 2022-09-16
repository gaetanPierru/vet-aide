$(document).ready(function () {
  $(".animaux").hide();

  if ($("#login").text() != "Se connecter") {
    $(".animaux").show();
  }

  $(".login").click(function (event) {
    //charge la page de connexion
    //on cache les balises de class in
    $("#login").load("./login.php");
    $(".in").hide();
    $(".login").hide();
  });

  //clique sur le bouton connexion
  $(".connexion").click(function (event) {
    //envoie une requete dans la base de donnée avec le nom et le mot de passe
    //si la reponse est un succée on utilise la fonction session sinon on charge impossible d'acceder a l'utilisateur
    $.ajax({
      type: "POST",
      url: "./php/verifconnection.php",
      data: { email: $(".email").val(), psw: $(".password").val() },
      success: function (data) {
        session(data);
      },
      error: "Impossible d'accéder a l'utilisateur",
    });
  });

  function session(retour) {
    //si la variable de retour de la verification est err cela signifie que l'utilisateur est inconnu
    //sinon on decharge la div login et fait reaparaitre les classes in
    //le lien de connection devient le nom prenom de la personne connecté

    if (retour == "errMail") {
      alert("l'email est invalide");
    }
    if (retour == "errMDP") {
      alert("le mot de passe est invalide");
    }
    if (retour == "err") {
      alert("utilisateur inconnu");
    } else {
      $("#login").empty();
      $("#login").text(retour);
      $(".in").show();
      $(".connecter").show();
      window.location.replace("./");
    }
  }

  $("#completeRDV").click(function (event) {
    //envoie une requete dans la base de donnée avec le nom et le mot de passe
    //si la reponse est un succée on utilise la fonction session sinon on charge impossible d'acceder a l'utilisateur
    $.ajax({
      type: "POST",
      url: "./php/RendezVous.php",
      data: {
        raison: $("#raison").val(),
        animal: $("#select").val(),
        date: $("#datetimeRDV").val(),
      },
      success: function (data) {
        insert(data);
      },
      error: "Impossible d'enregister le rendez vous",
    });
  });

  $("#completeAnimal").click(function (event) {
    //envoie une requete dans la base de donnée avec le nom et le mot de passe
    //si la reponse est un succée on utilise la fonction session sinon on charge impossible d'acceder a l'utilisateur
    $.ajax({
      type: "POST",
      url: "./php/registerAnimal.php",
      data: {
        nom: $("#animalNom").val(),
        proprietaire: $("#select").val(),
        date: $("#datetimeAnimal").val(),
        race: $("#animalRace").val(),
      },
      success: function (data) {
        insert(data);
      },
      error: "Impossible d'enregister l'animal'",
    });
  });

  function insert(retour) {
    if (retour == "error") {
      alert("veuillez remplir tous les champs");
    } else {
      window.location.replace("rendezvous");
    }
  }

  $("#register").click(function (event) {
    $.ajax({
      type: "POST",
      url: "./php/registerUser.php",
      data: {
        civilite: $("#select").val(),
        nom: $("#Nom").val(),
        prenom: $("#Prenom").val(),
        email: $("#Email").val(),
        psw: $("#password").val(),
        cpsw: $("#checkPassword").val(),
      },
      success: function (data) {
        window.location.replace("./login");
      },
      error: "Impossible d'accéder au carnet de sante",
    });
  });

  $(".accueil").click(function (event) {
    window.location.replace("./");
  });

  $(".addAnimal").click(function (event) {
    window.location.replace("./formulaireAnimaux");
  });

  $(".animaux").click(function (event) {
    window.location.replace("animaux");
  });

  $(".register").click(function (event) {
    window.location.replace("register");
  });

  $(".veterinaire").click(function (event) {
    window.location.replace("rendezvous");
  });

  $(".addRDV").click(function (event) {
    window.location.replace("formulaireRendezvous");
  });

  $(".contact").click(function (event) {
    window.location.replace("contact");
  });
});
