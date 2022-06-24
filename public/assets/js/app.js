var app = {
  init: function() {

    const formContact = document.querySelector("form");

    formContact.addEventListener("submit", function (e) {

      e.preventDefault();
      var data = this;

      fetch('/', {
        method: "POST",
        body: new FormData(data)
      }) 

      .then(res=>res.text())
      .then(function(result) {

        if (result === "OK") {

          const messConfirmation = document.querySelector(".message-confirmation");
          const name = document.getElementById("name").value;
          
          // On écris ne nom de l'utilisateur dans la balise <b>
          messConfirmation.querySelector("b").innerText = name;

          // On affiche le message
          messConfirmation.style.display = "block";

        } else {
          const messError = document.querySelector(".message-error");
          
          // On affiche le message
          messError.style.display = "block";
        }

      });

    });

  }
};


document.addEventListener('DOMContentLoaded', app.init);


