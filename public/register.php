<!DOCTYPE html>
<html lang="fr" data-theme="serere">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serere Voyages – Connexion</title> <!-- Correction: titre spécifique à la page de connexion -->
    
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
                    <li class="list-none"><a class=" btn-classic btn-hover btn-secondary" href="/register.php"><i class="fa-solid fa-user-plus"></i>S'inscrire</a></li> <!-- Correction: chemin simplifié /register.php -->
                    <li class="list-none"><a class="btn-classic btn-hover btn-primary" href="/login.php"><i class="fa-solid fa-user"></i>Se connecter</a></li> <!-- Correction: chemin simplifié /login.php -->
                </div>
            </div>
            <!-- <section id="registrerForm" class="flex flex-col items-center w-1/2 px-4 py-4 bg-pink-500 rounded-md max-h-max h-[500px] justify-evenly absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/4 mb-20">
                <h2 class="w-full text-3xl h-1/10 flex-centered text-emerald-600 font-aref-ruqaa">
                    Inscription
                </h2>
                <p>Créer un nouveau compte</p>
                <form action="post" class="flex flex-col items-center justify-start w-full h-max gap-y-2">
                    <div class="form-items">
                        <i class="fa-solid fa-user"></i>
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" placeholder="Entrer votre nom">
                    </div>
                    <div class="form-items">
                        <i class="fa-solid fa-user"></i>
                        <label for="firstname">Prenom</label>
                        <input type="text" name="firstname" id="firstname" placeholder="Entrer votre prenom">
                    </div>
                    <div class="form-items">
                        <i class="fa-solid fa-phone"></i>
                        <label for="phone">Numéro de téléphone</label>
                        <input type="tel" name="phone" id="phone" placeholder="Entrer votre numero">
                    </div>
                    <div class="form-items">
                        <i class="fa-solid fa-lock"></i>
                        <label for="initial_password">Entrer le mot de passe</label>
                        <input type="password" name="initial_password" id="initial_password"  placeholder="Entrer votre mot de passe">
                    </div>
                    <div class="form-items">
                        <i class="fa-solid fa-lock"></i>
                        <label for="confirmed_password">Confirmer le mot de passe</label>
                        <input type="password" name="confirmed_password" id="confirmed_password" placeholder="Confirmer votre mot de passe">
                    </div>

                    <div class="form-items">
                        <i class="fa-solid fa-user"></i>
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" placeholder="Entrer votre nom">
                    </div>

                    <div class="flex-centered form-items">
                        <button class="btn-classic btn-hover btn-primary" type="submit">Créer un compte</button>
                    </div>
                </form>
            </section> -->
            <section id="registrerForm" class="h-30 bg-amber-500 w-full absolute top-24 left-1/2 mb-20 -translate-x-1/2">
                <!-- <h2 class="w-full text-3xl h-1/10 flex-centered text-emerald-600 font-aref-ruqaa">
                    Inscription
                </h2>
                <p>Créer un nouveau compte</p>
                <form action="post" class="flex flex-col items-center justify-start w-full h-max gap-y-2">
                    <div class="form-items">
                        <i class="fa-solid fa-user"></i>
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" placeholder="Entrer votre nom">
                    </div>
                    <div class="form-items">
                        <i class="fa-solid fa-user"></i>
                        <label for="firstname">Prenom</label>
                        <input type="text" name="firstname" id="firstname" placeholder="Entrer votre prenom">
                    </div>
                    <div class="form-items">
                        <i class="fa-solid fa-phone"></i>
                        <label for="phone">Numéro de téléphone</label>
                        <input type="tel" name="phone" id="phone" placeholder="Entrer votre numero">
                    </div>
                    <div class="form-items">
                        <i class="fa-solid fa-lock"></i>
                        <label for="initial_password">Entrer le mot de passe</label>
                        <input type="password" name="initial_password" id="initial_password"  placeholder="Entrer votre mot de passe">
                    </div>
                    <div class="form-items">
                        <i class="fa-solid fa-lock"></i>
                        <label for="confirmed_password">Confirmer le mot de passe</label>
                        <input type="password" name="confirmed_password" id="confirmed_password" placeholder="Confirmer votre mot de passe">
                    </div>

                    <div class="form-items">
                        <i class="fa-solid fa-user"></i>
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" placeholder="Entrer votre nom">
                    </div>

                    <div class="flex-centered form-items">
                        <button class="btn-classic btn-hover btn-primary" type="submit">Créer un compte</button>
                    </div>
                </form> -->
            </section>
        </header>
    </main>
</body>
</html>