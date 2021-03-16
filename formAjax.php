<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <title>Formulaire AJAX</title>
</head>
<body>
  <p id="message" class="out">Identifiants incorrects</p>

  <input type="text" id="pseudo">
  <input type="password" id="pwd">
  <button id="submit">Envoyer</button>

  <script type="text/javascript">
    document
      .querySelector("#submit")
      .addEventListener('click', () => {

      let pseudo = document.querySelector("#pseudo").value;
      let password = document.querySelector("#pwd").value;
      
      const data = { 
        pseudo: pseudo,
        password: password 
      };

      fetch("actionAjax.php", {
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
      })
      .then(response => response.json())
      .then(data => {
        if(data.page == "success") {
          window.location.href = "success.php";
        } else {
          let message = document.querySelector("#message");
          message.classList = "in";

          setTimeout(function () {
            message.classList = "out";
          }, 3000);
        }
      })
      .catch(error => console.error('Error:', error));
    });
  </script>
</body>
</html>