<?php
require_once __DIR__.'/src/bootstrap.php';
require_once __DIR__.'/src/controllers/AuthController.php';

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère l'email et le code OTP saisi
    $email = $_POST['email'];
    $code = $_POST['code'];

    // Vérifie le code OTP
    $res = AuthController::auth_verify_code($email, $code);
    if ($res['ok']) {
        // L'email est confirmé avec succès
        echo "<p style='color:green;'>Votre email a été confirmé avec succès. Vous pouvez maintenant vous connecter.</p>";
        // Redirection vers la page de connexion (par exemple)
        echo "<a href='/auth/login.php'>Se connecter</a>";
        exit;
    }

    // Si le code est invalide ou expiré, on affiche les erreurs
    $errors = $res['errors'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification de l'email</title>
</head>
<body>

    <h2>Vérifiez votre email</h2>

    <p>Un code de confirmation vous a été envoyé à votre adresse email. Veuillez entrer le code ci-dessous pour confirmer votre email.</p>

    <form method="POST" action="">
        <!-- Cacher l'email dans un champ hidden -->
        <input type="hidden" name="email" value="<?= htmlspecialchars($_GET['email'] ?? '') ?>" />

        <div>
            <label for="code">Code OTP :</label>
            <input type="text" name="code" id="code" required pattern="\d{6}" title="Le code doit comporter exactement 6 chiffres">
        </div>

        <div>
            <button type="submit">Vérifier</button>
        </div>

        <?php if ($errors): ?>
            <div style="color: red;">
                <?php foreach ($errors as $error): ?>
                    <p><?= htmlspecialchars($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </form>

</body>
</html>
