/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        brand: '#ff4c00', // BPRO Orange Glow
        brandSoft: '#ffe5db',
        dark: '#0a0a0a',
        surface: '#121212',
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        heading: ['Anton', 'sans-serif'], // For the massive Nike-style typography
      }
    },
  },
  plugins: [],
}
