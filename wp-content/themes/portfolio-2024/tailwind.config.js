/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    screens: {
			xs: '375px',
			'2xs': '420px',
			sm: '640px',
			md: '768px',
			lg: '1024px',
			xl: '1280px',
			'2xl': '1536px',
		},
    container: {
			center: true,
			padding: {
				DEFAULT: '1rem',
				sm: '2rem',
				lg: '2rem',
				xl: '2rem',
				'2xl': '2rem',
			},
			screens: {
				// sm: '640px',
				// md: '768px',
				// lg: '1024px',
				xl: '1280px',
				// '2xl': '1400px',
			},
		},
    extend: {},
  },
  plugins: [require('@tailwindcss/typography')],
};
