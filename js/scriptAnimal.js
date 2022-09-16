$(document).ready(function () {
  const select = document.getElementById("select");
  select.addEventListener("change", function () {
    var valeur = select.options[select.selectedIndex].value;
    valeur = parseInt(valeur);

    $.ajax({
      type: "POST",
      url: "./php/carnetSante.php",
      data: { id: valeur },
      success: function (data) {
        carnetSante(data);
      },
      error: "Impossible d'accéder au carnet de sante",
    });
  });

  function carnetSante(retour) {
    $("#container").empty();

    let tab = retour.split(";");

    for (let i = 0; i < tab.length; i++) {
      let node = document.getElementById("container");
      let newP = document.createElement("p");
      let newBR = document.createElement("br");
      let newText = tab[i];
      node.prepend(newP);
      newP.append(newText);
      node.append(newBR);
    }
  }
});
