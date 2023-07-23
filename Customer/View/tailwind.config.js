/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}", "*/*.{html,js,php}"],
  theme: {
    extend: {},
    colors: {
      "custom-grey": "#7B7B7B",
      "custom-blue": "#024486",
      "custom-orange": "#F68721",
    },
    backgroundColor: {
      "custom-milk": "F1F2F4",
      "custom-blue": "#024486",
      "custom-orange": "#F68721",
      "custom-grey": "#7B7B7B",
      "custom-sky-blue": "#c9e0f5",
    },
    fontSize: {
      "custom-tiny": "12px",
      "custom-medium": "16px",
      "custom-large": "18px",
      "custom-extra-large": "20px",
    },
    borderColor: {
      "custom-blue": "#024486",
      "custom-grey": "#7B7B7B",
      "custom-orange": "#F68721",
    },
  },
  plugins: [],
};

