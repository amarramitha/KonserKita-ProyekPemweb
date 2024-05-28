/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['sans-serif', 'ui-sans-serif', 'system-ui'],
      },
      colors: {
        'brand-ungu': '#800B80',
        'brand-input' : '#20025C',
        'brand-form' : '#5F0F8C',
        'brand-blue': '#1C2645',
        'brand-purple': '#1A0B18',
        'brand-desk' : '#414C6F',
        'brand-huruf' : '#CCCCCC',
        'garis' : '#A6A6A6',
      },
      backgroundColor: {
        'brand-purple': '#1A0B18',
        'brand-blue': '#1C2645',
        'brand-ungu': '#800B80',
        'brand-login' : '#350F74',
        'brand-form' : '#5F0F8C',
        'brand-input' : '#20025C',
        'brand-black' : '#000000',
        'brand-button' : '#6881D1',
        'brand-desk' : '#414C6F',
      },
      backgroundImage: {
        'hero-pattern': "url('/storage/images/1.jpg')",
        'grid': "url('/storage/images/2.jpg')",

      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}
