<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Gestion des Utilisateurs</title>
  </head>

  <body>
    <center>
      <main class="container">
        <div class="row">
          <section class="col-12">
            <?php
              if (!empty($_SESSION['error'])) {
                echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';

                $_SESSION['error'] = "";
              }
            ?>

            <?php
              if (!empty($_SESSION['message'])) {
                echo '<div class="alert alert-success" role="alert">' . $_SESSION['message'] . '</div>';

                $_SESSION['message'] = "";
              }
            ?>

            <h1>Gestion des Utilisateurs</h1>

            <table class="table">
              <tr>
                <td>
                  <a href="User/add.php" class="btn btn-primary">Ajouter un Utilisateur</a>
                </td>
              </tr>

              <tr>
                <td>
                  <a href="User/index.php" class="btn btn-primary">Liste d'Utilisateurs</a>
                </td>
              </tr>

              <tr>
                <td>
                  <a href="User/connect.php" class="btn btn-primary">Connexion</a>
                </td>
              </tr>
            </table>
          </section>
        </div>
      </main>
    </center>
  </body>
</html>