# Guide d'utilisation des classes d'overlay

## Vue d'ensemble

Les classes d'overlay permettent d'ajouter des effets de superposition sur les éléments avec un contrôle total. Elles sont modulaires et peuvent être combinées pour créer différents effets.

## Classes de base

### `.overlay`
Classe principale qui active l'overlay. Doit être combinée avec d'autres classes pour définir l'intensité et la couleur.

### `.overlay-content`
Classe à appliquer sur le contenu qui doit apparaître au-dessus de l'overlay (z-index: 2).

## Intensités d'overlay

- `.overlay-0` - Pas d'overlay (opacity: 0)
- `.overlay-10` - Overlay très léger (opacity: 0.1)
- `.overlay-20` - Overlay léger (opacity: 0.2)
- `.overlay-30` - Overlay moyen-léger (opacity: 0.3)
- `.overlay-40` - Overlay moyen (opacity: 0.4) - **Par défaut**
- `.overlay-50` - Overlay moyen-fort (opacity: 0.5)
- `.overlay-60` - Overlay fort (opacity: 0.6)
- `.overlay-70` - Overlay très fort (opacity: 0.7)
- `.overlay-80` - Overlay intense (opacity: 0.8)
- `.overlay-90` - Overlay très intense (opacity: 0.9)

## Couleurs d'overlay

- `.overlay-black` - Overlay noir (par défaut)
- `.overlay-white` - Overlay blanc
- `.overlay-gray` - Overlay gris
- `.overlay-emerald` - Overlay vert émeraude
- `.overlay-amber` - Overlay ambre
- `.overlay-blue` - Overlay bleu
- `.overlay-red` - Overlay rouge

## Overlay avec gradient

- `.overlay-gradient` - Overlay avec dégradé diagonal
- `.overlay-gradient-content` - Contenu au-dessus de l'overlay gradient

## Exemples d'utilisation

### Overlay noir standard (comme sur index.php)
```html
<header class="overlay overlay-40 overlay-black">
    <div class="overlay-content">
        <!-- Contenu du header -->
    </div>
</header>
```

### Overlay blanc léger
```html
<div class="overlay overlay-20 overlay-white">
    <div class="overlay-content">
        <!-- Contenu -->
    </div>
</div>
```

### Overlay coloré
```html
<section class="overlay overlay-60 overlay-emerald">
    <div class="overlay-content">
        <!-- Contenu -->
    </div>
</section>
```

### Overlay avec gradient
```html
<div class="overlay-gradient">
    <div class="overlay-gradient-content">
        <!-- Contenu -->
    </div>
</div>
```

## Bonnes pratiques

1. **Toujours utiliser `overlay-content`** sur le contenu qui doit être visible au-dessus de l'overlay
2. **Combiner les classes** : `overlay` + intensité + couleur
3. **Tester la lisibilité** : s'assurer que le contenu reste lisible avec l'overlay choisi
4. **Utiliser avec parcimonie** : l'overlay doit améliorer l'expérience utilisateur, pas la gêner

## Migration depuis l'ancien système

L'overlay automatique sur les headers a été supprimé. Pour l'activer sur une page spécifique :

**Avant :** L'overlay était automatique sur tous les headers
**Maintenant :** Ajouter manuellement les classes d'overlay

```html
<!-- Ancien (automatique) -->
<header class="w-full h-[600px]">

<!-- Nouveau (manuel) -->
<header class="w-full h-[600px] overlay overlay-40 overlay-black">
    <div class="overlay-content">
        <!-- Contenu -->
    </div>
</header>
```
