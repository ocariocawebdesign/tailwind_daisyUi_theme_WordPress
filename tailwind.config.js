module.exports = {
  content: [
    "./**/*.{php,html,js}",
    "!./node_modules/**/*", // Exclui explicitamente a pasta node_modules
    "./template-parts/**/*.php",
    "./inc/**/*.php",
    "./src/**/*.{js,ts,jsx,tsx}",
    "./public/**/*.html",
  ],
  theme: {
    extend: {
      colors: {
        title: '#3e5e88', // Cor personalizada para os títulos
      },
      backgroundColor: {
        body: '#fff', // Background branco para o body
      },
    },
  },
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [require("daisyui"), require("@tailwindcss/aspect-ratio")],
};
