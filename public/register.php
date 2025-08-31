<?php
require_once __DIR__.'/../src/bootstrap.php';
require_once __DIR__.'/../src/controllers/AuthController.php';

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    [$client, $errors] = AuthController::auth_register($_POST);
    if ($client && !$errors) {
        header('Location: login.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
</head>
<body>
  <h2>Créer un compte</h2>
  <form method="POST" action="">
    <div>
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom" required value="<?= htmlspecialchars($_POST['nom'] ?? '') ?>">
    </div>
    <div>
      <label for="prenom">Prénom</label>
      <input type="text" name="prenom" id="prenom" required value="<?= htmlspecialchars($_POST['prenom'] ?? '') ?>">
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
    </div>
    <div>
      <label for="telephone">Téléphone</label>
      <input type="tel" name="telephone" id="telephone" value="<?= htmlspecialchars($_POST['telephone'] ?? '') ?>">
    </div>
    <div>
      <label for="passeport_ou_piece">Passeport ou Pièce d'identité</label>
      <input type="text" name="passeport_ou_piece" id="passeport_ou_piece" value="<?= htmlspecialchars($_POST['passeport_ou_piece'] ?? '') ?>">
    </div>
    <div>
      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password" required>
    </div>
    <button type="submit">S'inscrire</button>

    <?php if ($errors): ?>
      <div style="color:red;">
        <?php foreach ($errors as $error): ?>
          <p><?= htmlspecialchars($error) ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </form>
</body>
</html>
