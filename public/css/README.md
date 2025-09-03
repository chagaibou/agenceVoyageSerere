# Architecture CSS - Agence Voyage Serere

## 📁 Structure des Fichiers CSS

```
public/css/
├── input.css          # Point d'entrée principal (importe tout)
├── output.css         # Fichier compilé final (généré automatiquement)
├── responsive.css     # Styles responsive
├── components.css     # Composants réutilisables
└── README.md         # Documentation
```

## 🔄 Flux de Compilation

1. **input.css** → Point d'entrée qui importe :
   - Tailwind CSS
   - responsive.css
   - components.css
   - Fonts et variables personnalisées

2. **Tailwind CLI** → Compile tout en un seul fichier :
   - Analyse les classes utilisées dans vos fichiers PHP
   - Génère le CSS optimisé
   - Sortie : **output.css**

## 🚀 Commandes Disponibles

```bash
# Développement (avec watch)
npm run tailwind-start

# Production (minifié)
npm run tailwind-build
```

## 📱 Utilisation dans les Pages

```html
<!-- Une seule ligne à inclure dans vos pages -->
<link rel="stylesheet" href="css/output.css">
```

## 🎯 Avantages de cette Architecture

### ✅ **Organisation**
- Séparation claire des responsabilités
- Fichiers modulaires et maintenables
- Un seul point d'entrée

### ✅ **Performance**
- Un seul fichier CSS à charger
- CSS optimisé et minifié
- Pas de duplication de code

### ✅ **Développement**
- Hot reload avec `--watch`
- Classes Tailwind + composants personnalisés
- Responsive design intégré

## 📝 Règles de Développement

### 1. **Ajouter de nouveaux styles**
- **Composants** → `components.css`
- **Responsive** → `responsive.css`
- **Variables** → `input.css`

### 2. **Utiliser les classes**
```html
<!-- Classes Tailwind -->
<div class="flex items-center justify-center">

<!-- Composants personnalisés -->
<button class="btn btn-primary">
<div class="card">
```

### 3. **Responsive Design**
```html
<!-- Classes de visibilité -->
<div class="hidden-mobile">Visible sur tablette+</div>
<div class="show-mobile">Visible sur mobile uniquement</div>
```

## 🔧 Configuration Tailwind

Le fichier `tailwind.config.js` est configuré pour :
- Analyser tous les fichiers PHP
- Inclure tous les fichiers CSS
- Générer un CSS optimisé

## 📊 Breakpoints Responsive

- **Mobile** : < 768px
- **Tablet** : 768px - 1023px
- **Desktop** : 1024px - 1279px
- **Large Desktop** : 1280px+

## 🎨 Variables CSS Personnalisées

```css
:root {
  --color-primary: #06CB8D;
  --color-secondary: #F7AB08;
  --font-montserrat: "Montserrat", 'Open sans';
  --font-aref-ruqaa: "ArefRuqaa", serif;
}
```

## 🚨 Points d'Attention

1. **Ne jamais modifier `output.css`** → Il est généré automatiquement
2. **Toujours compiler après modification** → `npm run tailwind-start`
3. **Utiliser les classes existantes** → Éviter le CSS inline
4. **Tester le responsive** → Sur différentes tailles d'écran

## 🔄 Workflow de Développement

1. Modifier les fichiers CSS (`input.css`, `responsive.css`, `components.css`)
2. Lancer `npm run tailwind-start` (si pas déjà en cours)
3. Tester sur le navigateur
4. Pour la production : `npm run tailwind-build`
