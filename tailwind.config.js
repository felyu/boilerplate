module.exports = {
  content: ["./public_html/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        "bp-darkbrown": "#282828",
      },
      fontFamily: {
        "mw": ['Merriweather', 'sans-serif'],
      },
      keyframes: {
        'text-shimmer': {
          from: { backgroundPosition: '0 0' },
          to: { backgroundPosition: '-200% 0' },
        },
      },
      animation: {
        'text-shimmer': 'text-shimmer 2s ease-out infinite 1s',
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms')
  ],
}