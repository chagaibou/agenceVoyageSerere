module.exports = {
  content: [
    './public/**/*.php',
    './public/css/**/*.css',
    './src/**/*.php',
    './templates/**/*.php'
  ],
  theme: {
    extend: {
      colors: {
        // Couleurs utilitaires personnalisées
        // Utilisation: className => bg-brand, text-brand, border-brand, etc.
        // Personnaliser: ajoutez vos couleurs nommées ici (hex, rgb, hsl)
        // Exemple:
        // brand: '#059669', // vert principal (emerald-600)
        // primary: '#059669', // couleur principale
        // secondary: '#f59e0b', // couleur secondaire
        accent: '#75FA8D', // couleur d'accent
        white: "#fff",
      },
      fontFamily: {
        // Utilisation: className => font-sans, font-serif, font-title, font-aref-ruqaa
        // Personnaliser: ajoutez/retirez des familles ou changez l'ordre de fallback
        sans: ['Inter', 'Poppins', 'Lato', 'system-ui', 'sans-serif'],
        serif: ['Merriweather', 'Georgia', 'serif'],
        title : ['Montserrat', 'Playfair Display', 'Merriweather'],
        'aref-ruqaa': ['ArefRuqaa', 'serif'],
      },
      // Breakpoints personnalisés
      // Utilisation: className => md:bg-red-500, xl:text-lg, etc.
      // Personnaliser: décommentez et ajustez selon vos besoins
      // screens: {
      //   xs: '475px',
      //   '3xl': '1920px',
      // },
      // Espacement personnalisé
      // Utilisation: className => p-custom, m-custom, etc.
      // spacing: {
      //   'custom': '2.5rem',
      // },
      // Bordures personnalisées
      // borderRadius: {
      //   'custom': '1rem',
      // },
      // Ombres personnalisées
      // boxShadow: {
      //   'custom': '0 4px 6px -1px rgba(0, 0, 0, 0.1)',
      // },
      // Transitions personnalisées
      // transitionDuration: {
      //   'custom': '300ms',
      // },
    },
  },
  plugins: [],
}
