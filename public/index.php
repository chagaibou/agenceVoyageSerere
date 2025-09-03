<!DOCTYPE html>
<html lang="fr" data-theme="serere">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serere Voyages – Accueil</title> <!-- Correction: titre corrigé et typographie normalisée -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" 
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" 
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <link rel="stylesheet" href="css/output.css">
</head>
<body class="main-container">
    <main class="flex-grow w-full">
        <header  class="w-full h-[600px] ">
            <div class="topbar">
                <div class="text-xl logo flex-centered font-montserrat"><span class="text-3xl font-bold font-edu-cursive">Serere</span></div>
                <nav class="navbar">
                    <li class="list-none"><a class="link nav-link-hover" href="/index.php"><i class="fa-solid fa-house"></i>Accueil</a></li> <!-- Correction: lien absolu vers la racine sans le segment /public -->
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
            <section class="hero">
                <div class="flex-grow w-full hero-content flex-col-centered gap-y-8">
                    <h1 class="text-5xl font-bold text-center font-aref-ruqaa">Votre périple spirituel, notre engagement.</h1>
                    <p class="w-3/4 text-xl text-center">
                        Chez Serere Voyages, nous croyons que voyager est une bénédiction. Nous sommes dédiés à 
                        l'organisation de séjours uniques, conçus pour vous permettre de découvrir la beauté 
                        du monde tout en respectant vos valeurs. Laissez-nous transformer vos rêves d'exploration en une réalité enrichissante.
                    </p>
                </div>
                <div class="flex items-center justify-center w-full hero-actions h-2/10">
                    <button class="text-lg uppercase btn-classic btn-primary btn-hover">Réserver maintenant</button>
                </div>
            </section>
        </header>
    </main>
    <footer class="w-full h-10 bg-amber-500"></footer>
</body>
</html>