module.exports = {
  content: ["./src/**/*.{html,php,js}", "./index.php"],
  theme: {
    fontFamily: {
      montserrat: ['Montserrat', 'sans-serif'],
    },
    colors: {
      // primary: 'var(--primary)',
      // second: 'var(--second)',
      one: 'var(--one)',
      two: 'var(--two)',
      three: 'var(--three)',
      four: 'var(--four)',
      five: 'var(--five)',
      six: 'var(--six)',
      seven: 'var(--seven)',
      eight: 'var(--eight)',
      nine: 'var(--nine)',
      ten: 'var(--ten)',
      inherit: 'inherit',

      cone: 'rgba(0, 0, 0, 0.5)',

      white: '#ffffff',
    },
    screens: {
      xl: {
        max: '1280px',
      },
      lg: {
        max: '1024px',
      },
      md: {
        max: '768px',
      },
      sm: {
        max: '640px',
      },
    },
    extend: {
      fontSize: {
        '4.5xl': [
          '2.625rem',
          {
            letterSpacing: '-0.035',
            lineHeight: '2.75rem',
          },
        ],
      },
      borderWidth: {
        3: '3px',
      },
      skew: {
        '180': '180deg',
        '17': '17deg',
      },
      height: {
        'screen-10': '10vh',
        'screen-20': '20vh',
        'screen-30': '30vh',
        'screen-40': '40vh',
        'screen-50': '50vh',
        'screen-60': '60vh',
        'screen-70': '70vh',
        'screen-80': '80vh',
        'screen-90': '90vh',
        'screen-100': '100vh',
      },
      transitionDuration: {
        'transition-15': '15ms'
      },
    },
    plugins: [],
  },
  plugins: [
    require("tailwind-scrollbar-hide"),
    require("autoprefixer"),
  ],
}