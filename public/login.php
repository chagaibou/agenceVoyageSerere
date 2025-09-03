<!DOCTYPE html>
<html lang="fr" data-theme="serere">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serere Voyages – Login</title> <!-- Correction: titre spécifique à la page de connexion -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" 
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" 
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <link rel="stylesheet" href="css/output.css">
</head>
<body> <!-- Correction: layout propre à la page login -->
    <main class="flex-grow w-full overflow-x-hidden">
        <header  class="w-screen h-screen overflow-x-hidden">
            <div class="topbar">
                <div class="text-xl logo flex-centered font-montserrat"><span class="text-3xl font-bold font-edu-cursive">Serere</span></div>
                <nav class="navbar">
                    <li class="list-none"><a class="link nav-link-hover" href="/index.php"><i class="fa-solid fa-house"></i>Accueil</a></li> <!-- Correction: lien Accueil fonctionnel -->
                    <li class="list-none"><a class="link nav-link-hover" href="#"><i class="fa-solid fa-circle-chevron-down"></i>Offres</a></li>
                    <li class="list-none"><a class="link nav-link-hover" href="#"><i class="fa-solid fa-ticket-simple"></i>Réservations</a></li>
                    <li class="list-none"><a class="link nav-link-hover" href="#"><i class="fa-solid fa-circle-question"></i>Aide</a></li>
                    <li class="list-none"><a class="link nav-link-hover" href="#"><i class="fa-solid fa-phone"></i>Contact</a></li>
                </nav>
                <div class="actions-buttons">
                    <li class="list-none"><a class="btn-classic btn-hover btn-secondary" href="/register.php"><i class="fa-solid fa-user-plus"></i>S'inscrire</a></li> <!-- Correction: chemin simplifié /register.php -->
                    <li class="list-none"><a class="btn-classic btn-hover btn-primary" href="/login.php"><i class="fa-solid fa-user"></i>Se connecter</a></li> <!-- Correction: chemin simplifié /login.php -->
                </div>
            </div>
            <section id="loginForm" class="w-1/2 bg-white absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-col items-center rounded-md px-6 py-8">
                <h2 class="w-full text-3xl h-1/10 flex-centered text-emerald-600 font-aref-ruqaa mb-5">
                    Connexion
                </h2>
                <form method="post" class="flex flex-col items-center justify-start w-full gap-y-4">
                    <div class="form-items">
                        <i class="fa-solid fa-user"></i>
                        <label for="login">Identifiant ou email</label>
                        <input type="text" name="login" id="login" placeholder="Entrer votre adresse email ou votre identifiant">
                    </div>
                    <div class="form-items">
                        <!-- <i class="fa-solid fa-eye"></i>
                        <i class="fa-solid fa-eye-slash"></i> -->
                        <i class="fa-solid fa-lock"></i>
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password"  placeholder="Entrer votre mot de passe">
                    </div>
                    <div class="form-link">
                        <a href="#" class="text-emerald-600">Mot de passe oublié ?</a>
                    </div>
                    <div class="flex-centered form-button">
                        <button class="btn-classic btn-hover btn-primary" type="submit">Se connecter</button>
                    </div>
                    <div class="form-link flex-centered">
                        <span class="mr-4">Je n'ai pas de compte</span><a href="/register.php" class="text-emerald-600 font-semibold underline">Créer un compte maintenant</a> 
                    </div>
                    <!-- <div class="flex-centered form-items form-button">
                        <button class="btn-classic btn-hover btn-primary" type="submit"><img src="/assets/images/google.png" alt="google" class="w-6 h-6">Se connecter son compte google</button>
                    </div> -->
                </form>
            </section>
        </header>
    </main>
</body>
</html>