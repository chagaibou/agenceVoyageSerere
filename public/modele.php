<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SerereVoyages - Découvrez le Monde</title>
    
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" 
    integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" 
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <link rel="stylesheet" href="css/output.css">
    
    <!-- Custom Scrollbar Styles -->
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, #16a34a, #06b6d4);
            border-radius: 10px;
            border: 2px solid #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(45deg, #15803d, #0891b2);
        }
        
        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Navbar Animation */
        .navbar-scroll {
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
        }
        
        /* Card Hover Effects */
        .offer-card {
            transition: all 0.3s ease;
        }
        
        .offer-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        /* Image Placeholder Styles */
        .image-placeholder {
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4);
            background-size: 400% 400%;
            animation: gradientShift 3s ease infinite;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>

<body class="bg-neutral-50">
    <!-- ===== NAVIGATION BAR ===== -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 w-full transition-all duration-300 shadow-lg bg-white/90 backdrop-blur-md">
        <div class="container px-4 mx-auto">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-gradient-to-br from-primary-500 to-accent-500">
                        <span class="text-xl font-bold text-white">SV</span>
                    </div>
                    <span class="text-2xl font-bold font-title text-neutral-800">
                        Serere<span class="text-primary-600">Voyages</span>
                    </span>
                </div>

                <!-- Navigation Links -->
                <div class="items-center hidden space-x-8 lg:flex">
                    <a href="#accueil" class="font-medium transition-colors duration-200 nav-link text-neutral-700 hover:text-primary-600">
                        <i class="mr-2 fas fa-home"></i>Accueil
                    </a>
                    <a href="#offres" class="font-medium transition-colors duration-200 nav-link text-neutral-700 hover:text-primary-600">
                        <i class="mr-2 fas fa-plane"></i>Offres
                    </a>
                    <a href="#voyages-religieux" class="font-medium transition-colors duration-200 nav-link text-neutral-700 hover:text-primary-600">
                        <i class="mr-2 fas fa-pray"></i>Voyages Religieux
                    </a>
                    <a href="#a-propos" class="font-medium transition-colors duration-200 nav-link text-neutral-700 hover:text-primary-600">
                        <i class="mr-2 fas fa-info-circle"></i>À Propos
                    </a>
                    <a href="#contact" class="font-medium transition-colors duration-200 nav-link text-neutral-700 hover:text-primary-600">
                        <i class="mr-2 fas fa-envelope"></i>Contact
                    </a>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center space-x-4">
                    <a href="/public/login.php" class="btn btn-outline btn-primary btn-sm">
                        <i class="mr-2 fas fa-sign-in-alt"></i>Connexion
                    </a>
                    <a href="/public/register.php" class="btn btn-primary btn-sm">
                        <i class="mr-2 fas fa-user-plus"></i>S'inscrire
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="lg:hidden btn btn-ghost btn-sm">
                    <i class="text-xl fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- ===== HERO SECTION ===== -->
    <section id="accueil" class="relative flex items-center justify-center min-h-screen pt-20 overflow-hidden bg-gradient-to-br from-primary-50 via-accent-50 to-secondary-50">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute rounded-full top-20 left-20 w-72 h-72 bg-primary-300 mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute rounded-full top-40 right-20 w-72 h-72 bg-accent-300 mix-blend-multiply filter blur-xl animate-pulse animation-delay-2000"></div>
            <div class="absolute rounded-full -bottom-8 left-40 w-72 h-72 bg-secondary-300 mix-blend-multiply filter blur-xl animate-pulse animation-delay-4000"></div>
        </div>

        <div class="container relative z-10 px-4 mx-auto text-center">
            <div class="max-w-5xl mx-auto">
                <!-- Main Heading -->
                <h1 class="mb-8 text-6xl font-bold leading-tight lg:text-7xl font-title text-neutral-800">
                    Découvrez le Monde avec
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-accent-600">
                        SerereVoyages
                    </span>
                </h1>
                
                <!-- Subtitle -->
                <p class="max-w-4xl mx-auto mb-12 text-xl leading-relaxed lg:text-2xl text-neutral-600">
                    Explorez des destinations uniques, créez des souvenirs inoubliables et vivez des aventures extraordinaires. 
                    Notre expertise vous garantit des voyages sur mesure qui dépassent vos attentes.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col items-center justify-center gap-6 sm:flex-row">
                    <a href="#offres" class="flex items-center gap-3 px-10 py-5 text-lg transition-all duration-300 transform group btn btn-primary btn-lg hover:scale-105">
                        <i class="text-xl transition-transform duration-300 fas fa-compass group-hover:rotate-12"></i>
                        Découvrir nos offres
                    </a>
                    <a href="/public/register.php" class="flex items-center gap-3 px-10 py-5 text-lg transition-all duration-300 transform group btn btn-outline btn-secondary btn-lg hover:scale-105">
                        <i class="text-xl transition-transform duration-300 fas fa-rocket group-hover:translate-x-1"></i>
                        Commencer l'aventure
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OFFERS SECTION ===== -->
    <section id="offres" class="py-20 bg-white">
        <div class="container px-4 mx-auto">
            <!-- Section Header -->
            <div class="mb-16 text-center">
                <h2 class="mb-6 text-4xl font-bold lg:text-5xl font-title text-neutral-800">
                    Nos <span class="text-primary-600">Offres</span> Exceptionnelles
                </h2>
                <p class="max-w-3xl mx-auto text-xl text-neutral-600">
                    Découvrez notre sélection de voyages uniques, conçus pour vous offrir des expériences inoubliables 
                    dans les plus belles destinations du monde.
                </p>
            </div>

            <!-- Offers Grid -->
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Offer Card 1: Beach Paradise -->
                <article class="overflow-hidden bg-white shadow-lg offer-card rounded-2xl group">
                    <!-- Image Placeholder - SUGGESTION: Placer une image de plage paradisiaque (ex: Maldives, Seychelles) -->
                    <div class="flex items-center justify-center w-full h-64 text-lg font-bold text-white image-placeholder">
                        🏖️ IMAGE: Plage paradisiaque<br>Maldives/Seychelles
                    </div>
                    
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="badge badge-primary">Plage</span>
                            <span class="text-2xl font-bold text-primary-600">€1,299</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-neutral-800">Paradis Tropical</h3>
                        <p class="mb-4 text-neutral-600">
                            Évadez-vous vers des îles paradisiaques avec des plages de sable blanc, 
                            des eaux cristallines et des couchers de soleil spectaculaires.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-neutral-500">
                                <i class="mr-2 fas fa-clock"></i>
                                <span>7 jours</span>
                            </div>
                            <a href="#" class="btn btn-outline btn-primary btn-sm">
                                Détails <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Offer Card 2: Mountain Adventure -->
                <article class="overflow-hidden bg-white shadow-lg offer-card rounded-2xl group">
                    <!-- Image Placeholder - SUGGESTION: Placer une image de montagne (ex: Alpes, Andes, Himalayas) -->
                    <div class="flex items-center justify-center w-full h-64 text-lg font-bold text-white image-placeholder">
                        🏔️ IMAGE: Montagnes majestueuses<br>Alpes/Andes
                    </div>
                    
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="badge badge-secondary">Aventure</span>
                            <span class="text-2xl font-bold text-secondary-600">€899</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-neutral-800">Aventure Montagne</h3>
                        <p class="mb-4 text-neutral-600">
                            Grimpez vers de nouveaux sommets avec nos randonnées guidées dans les plus belles 
                            chaînes de montagnes du monde.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-neutral-500">
                                <i class="mr-2 fas fa-clock"></i>
                                <span>5 jours</span>
                            </div>
                            <a href="#" class="btn btn-outline btn-secondary btn-sm">
                                Détails <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Offer Card 3: City Break -->
                <article class="overflow-hidden bg-white shadow-lg offer-card rounded-2xl group">
                    <!-- Image Placeholder - SUGGESTION: Placer une image de ville moderne (ex: Paris, Tokyo, New York) -->
                    <div class="flex items-center justify-center w-full h-64 text-lg font-bold text-white image-placeholder">
                        🌆 IMAGE: Ville moderne<br>Paris/Tokyo/NY
                    </div>
                    
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="badge badge-accent">Urbain</span>
                            <span class="text-2xl font-bold text-accent-600">€699</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-neutral-800">City Break Culturel</h3>
                        <p class="mb-4 text-neutral-600">
                            Immergez-vous dans la culture urbaine avec nos séjours citadins incluant 
                            visites guidées, gastronomie locale et shopping.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-neutral-500">
                                <i class="mr-2 fas fa-clock"></i>
                                <span>4 jours</span>
                            </div>
                            <a href="#" class="btn btn-outline btn-accent btn-sm">
                                Détails <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- View All Button -->
            <div class="mt-12 text-center">
                <a href="#" class="px-10 py-4 text-lg btn btn-primary btn-lg">
                    <i class="mr-3 fas fa-eye"></i>
                    Voir toutes nos offres
                </a>
            </div>
        </div>
    </section>

    <!-- ===== RELIGIOUS TRAVEL SECTION ===== -->
    <section id="voyages-religieux" class="py-20 bg-gradient-to-br from-neutral-50 to-primary-50">
        <div class="container px-4 mx-auto">
            <!-- Section Header -->
            <div class="mb-16 text-center">
                <h2 class="mb-6 text-4xl font-bold lg:text-5xl font-title text-neutral-800">
                    Voyages <span class="text-primary-600">Religieux</span> & Spirituels
                </h2>
                <p class="max-w-3xl mx-auto text-xl text-neutral-600">
                    Partez en pèlerinage vers les sites sacrés les plus importants du monde. 
                    Vivez une expérience spirituelle unique et enrichissante.
                </p>
            </div>

            <!-- Religious Travel Grid -->
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                <!-- Left Column: Featured Religious Journey -->
                <div class="space-y-8">
                    <!-- Main Religious Journey -->
                    <article class="overflow-hidden bg-white shadow-xl rounded-2xl group">
                        <!-- Image Placeholder - SUGGESTION: Placer une image de Jérusalem ou de la Mecque -->
                        <div class="flex items-center justify-center w-full text-lg font-bold text-center text-white image-placeholder h-80">
                            🕌 IMAGE: Site religieux majeur<br>Jérusalem/La Mecque<br>ou Vatican
                        </div>
                        
                        <div class="p-8">
                            <div class="flex items-center justify-between mb-4">
                                <span class="badge badge-primary badge-lg">Pèlerinage</span>
                                <span class="text-3xl font-bold text-primary-600">€1,899</span>
                            </div>
                            <h3 class="mb-4 text-2xl font-bold text-neutral-800">Pèlerinage Sacré</h3>
                            <p class="mb-6 leading-relaxed text-neutral-600">
                                Partez en pèlerinage vers les sites les plus sacrés du monde. Une expérience spirituelle 
                                profonde qui transformera votre vie et renforcera votre foi.
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-sm text-neutral-500">
                                    <i class="mr-2 fas fa-calendar-alt"></i>
                                    <span>10 jours</span>
                                </div>
                                <a href="#" class="btn btn-primary">
                                    Réserver <i class="ml-2 fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Right Column: Religious Destinations -->
                <div class="space-y-6">
                    <!-- Religious Destination 1 -->
                    <article class="p-6 transition-shadow duration-300 bg-white shadow-lg rounded-xl group hover:shadow-xl">
                        <div class="flex items-start space-x-4">
                            <!-- Image Placeholder - SUGGESTION: Placer une image de Lourdes -->
                            <div class="flex items-center justify-center w-24 h-24 text-xs font-bold text-center text-white rounded-lg image-placeholder">
                                🕊️ IMAGE<br>Lourdes
                            </div>
                            
                            <div class="flex-1">
                                <h4 class="mb-2 text-lg font-bold text-neutral-800">Lourdes, France</h4>
                                <p class="mb-3 text-sm text-neutral-600">
                                    Sanctuaire marial majeur, lieu de pèlerinage et de guérison spirituelle.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-primary-600">À partir de €599</span>
                                    <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">
                                        Découvrir <i class="ml-1 fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Religious Destination 2 -->
                    <article class="p-6 transition-shadow duration-300 bg-white shadow-lg rounded-xl group hover:shadow-xl">
                        <div class="flex items-start space-x-4">
                            <!-- Image Placeholder - SUGGESTION: Placer une image de Fatima -->
                            <div class="flex items-center justify-center w-24 h-24 text-xs font-bold text-center text-white rounded-lg image-placeholder">
                                🕊️ IMAGE<br>Fatima
                            </div>
                            
                            <div class="flex-1">
                                <h4 class="mb-2 text-lg font-bold text-neutral-800">Fatima, Portugal</h4>
                                <p class="mb-3 text-sm text-neutral-600">
                                    Sanctuaire marial international, lieu des apparitions de la Vierge Marie.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-primary-600">À partir de €499</span>
                                    <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">
                                        Découvrir <i class="ml-1 fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Religious Destination 3 -->
                    <article class="p-6 transition-shadow duration-300 bg-white shadow-lg rounded-xl group hover:shadow-xl">
                        <div class="flex items-start space-x-4">
                            <!-- Image Placeholder - SUGGESTION: Placer une image de Saint-Jacques de Compostelle -->
                            <div class="flex items-center justify-center w-24 h-24 text-xs font-bold text-center text-white rounded-lg image-placeholder">
                                🥾 IMAGE<br>Saint-Jacques
                            </div>
                            
                            <div class="flex-1">
                                <h4 class="mb-2 text-lg font-bold text-neutral-800">Saint-Jacques de Compostelle</h4>
                                <p class="mb-3 text-sm text-neutral-600">
                                    Chemin de pèlerinage millénaire vers la tombe de l'apôtre Saint Jacques.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-primary-600">À partir de €799</span>
                                    <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">
                                        Découvrir <i class="ml-1 fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== ABOUT SECTION ===== -->
    <section id="a-propos" class="py-20 bg-white">
        <div class="container px-4 mx-auto">
            <div class="grid items-center grid-cols-1 gap-16 lg:grid-cols-2">
                <!-- Content -->
                <div>
                    <h2 class="mb-8 text-4xl font-bold lg:text-5xl font-title text-neutral-800">
                        À Propos de <span class="text-primary-600">SerereVoyages</span>
                    </h2>
                    <p class="mb-6 text-lg leading-relaxed text-neutral-600">
                        Depuis plus de 15 ans, SerereVoyages s'engage à créer des expériences de voyage 
                        exceptionnelles et personnalisées. Notre équipe d'experts passionnés vous accompagne 
                        à chaque étape de votre aventure.
                    </p>
                    <p class="mb-8 text-lg leading-relaxed text-neutral-600">
                        Que vous recherchiez des vacances reposantes, des aventures palpitantes ou des 
                        pèlerinages spirituels, nous avons la destination parfaite pour vous.
                    </p>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="mb-2 text-3xl font-bold text-primary-600">15+</div>
                            <div class="text-neutral-600">Années d'expérience</div>
                        </div>
                        <div class="text-center">
                            <div class="mb-2 text-3xl font-bold text-primary-600">10k+</div>
                            <div class="text-neutral-600">Voyageurs satisfaits</div>
                        </div>
                        <div class="text-center">
                            <div class="mb-2 text-3xl font-bold text-primary-600">50+</div>
                            <div class="text-neutral-600">Destinations</div>
                        </div>
                        <div class="text-center">
                            <div class="mb-2 text-3xl font-bold text-primary-600">24/7</div>
                            <div class="text-neutral-600">Support client</div>
                        </div>
                    </div>
                </div>

                <!-- Image Placeholder - SUGGESTION: Placer une image d'équipe ou de bureau moderne -->
                <div class="flex items-center justify-center w-full text-xl font-bold text-center text-white image-placeholder h-96 rounded-2xl">
                    🏢 IMAGE: Équipe SerereVoyages<br>ou Bureau moderne<br>avec équipe au travail
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section id="contact" class="py-20 bg-gradient-to-br from-neutral-50 to-accent-50">
        <div class="container px-4 mx-auto">
            <div class="mb-16 text-center">
                <h2 class="mb-6 text-4xl font-bold lg:text-5xl font-title text-neutral-800">
                    Contactez <span class="text-primary-600">Notre Équipe</span>
                </h2>
                <p class="max-w-3xl mx-auto text-xl text-neutral-600">
                    Prêt à commencer votre aventure ? Notre équipe est là pour vous accompagner 
                    et répondre à toutes vos questions.
                </p>
            </div>

            <div class="grid max-w-6xl grid-cols-1 gap-8 mx-auto lg:grid-cols-3">
                <!-- Contact Info -->
                <div class="p-8 bg-white shadow-lg rounded-2xl">
                    <div class="mb-6 text-center">
                        <i class="mb-4 text-4xl fas fa-info-circle text-primary-600"></i>
                        <h3 class="text-xl font-bold text-neutral-800">Informations</h3>
                    </div>
                    <div class="space-y-4 text-center">
                        <p class="text-neutral-600">
                            <i class="mr-2 fas fa-map-marker-alt text-primary-600"></i>
                            123 Rue des Voyages, Paris
                        </p>
                        <p class="text-neutral-600">
                            <i class="mr-2 fas fa-phone text-primary-600"></i>
                            +33 1 23 45 67 89
                        </p>
                        <p class="text-neutral-600">
                            <i class="mr-2 fas fa-envelope text-primary-600"></i>
                            contact@sererevoyages.com
                        </p>
                    </div>
                </div>

                <!-- Quick Contact Form -->
                <div class="p-8 bg-white shadow-lg rounded-2xl lg:col-span-2">
                    <h3 class="mb-6 text-xl font-bold text-center text-neutral-800">Envoyez-nous un message</h3>
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <input type="text" placeholder="Prénom" class="w-full input input-bordered" required>
                            <input type="text" placeholder="Nom" class="w-full input input-bordered" required>
                        </div>
                        <input type="email" placeholder="Email" class="w-full input input-bordered" required>
                        <textarea placeholder="Votre message" class="w-full h-32 textarea textarea-bordered" required></textarea>
                        <button type="submit" class="w-full btn btn-primary">
                            <i class="mr-2 fas fa-paper-plane"></i>
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer class="py-16 text-white bg-neutral-900">
        <div class="container px-4 mx-auto">
            <div class="grid grid-cols-1 gap-8 mb-12 md:grid-cols-2 lg:grid-cols-4">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center mb-6 space-x-3">
                        <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-gradient-to-br from-primary-500 to-accent-500">
                            <span class="text-xl font-bold text-white">SV</span>
                        </div>
                        <span class="text-2xl font-bold">
                            Serere<span class="text-primary-400">Voyages</span>
                        </span>
                    </div>
                    <p class="mb-6 leading-relaxed text-neutral-300">
                        Votre partenaire de confiance pour des voyages inoubliables. 
                        Découvrez le monde avec notre expertise et notre passion du voyage.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="flex items-center justify-center w-10 h-10 transition-colors duration-200 rounded-full bg-neutral-800 hover:bg-primary-600">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="flex items-center justify-center w-10 h-10 transition-colors duration-200 rounded-full bg-neutral-800 hover:bg-primary-600">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="flex items-center justify-center w-10 h-10 transition-colors duration-200 rounded-full bg-neutral-800 hover:bg-primary-600">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="flex items-center justify-center w-10 h-10 transition-colors duration-200 rounded-full bg-neutral-800 hover:bg-primary-600">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="mb-6 text-lg font-bold text-white">Liens Rapides</h4>
                    <ul class="space-y-3">
                        <li><a href="#accueil" class="transition-colors duration-200 text-neutral-300 hover:text-primary-400">Accueil</a></li>
                        <li><a href="#offres" class="transition-colors duration-200 text-neutral-300 hover:text-primary-400">Nos Offres</a></li>
                        <li><a href="#voyages-religieux" class="transition-colors duration-200 text-neutral-300 hover:text-primary-400">Voyages Religieux</a></li>
                        <li><a href="#a-propos" class="transition-colors duration-200 text-neutral-300 hover:text-primary-400">À Propos</a></li>
                        <li><a href="#contact" class="transition-colors duration-200 text-neutral-300 hover:text-primary-400">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="mb-6 text-lg font-bold text-white">Nos Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="transition-colors duration-200 text-neutral-300 hover:text-primary-400">Voyages sur Mesure</a></li>
                        <li><a href="#" class="transition-colors duration-200 text-neutral-300 hover:text-primary-400">Pèlerinages</a></li>
                        <li><a href="#" class="transition-colors duration-200 text-neutral-300 hover:text-primary-400">Croisières</a></li>
                        <li><a href="#" class="transition-colors duration-200 text-neutral-300 hover:text-primary-400">Séjours Balnéaires</a></li>
                        <li><a href="#" class="transition-colors duration-200 text-neutral-300 hover:text-primary-400">Aventures</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="pt-8 border-t border-neutral-800">
                <div class="flex flex-col items-center justify-between md:flex-row">
                    <p class="text-sm text-neutral-400">
                        © 2024 SerereVoyages. Tous droits réservés.
                    </p>
                    <div class="flex mt-4 space-x-6 md:mt-0">
                        <a href="#" class="text-sm transition-colors duration-200 text-neutral-400 hover:text-primary-400">Mentions légales</a>
                        <a href="#" class="text-sm transition-colors duration-200 text-neutral-400 hover:text-primary-400">Politique de confidentialité</a>
                        <a href="#" class="text-sm transition-colors duration-200 text-neutral-400 hover:text-primary-400">CGV</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ===== JAVASCRIPT ===== -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('navbar-scroll');
            } else {
                navbar.classList.remove('navbar-scroll');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add animation delay utility classes
        document.head.insertAdjacentHTML('beforeend', `
            <style>
                .animation-delay-2000 { animation-delay: 2s; }
                .animation-delay-4000 { animation-delay: 4s; }
            </style>
        `);
    </script>
</body>
</html>