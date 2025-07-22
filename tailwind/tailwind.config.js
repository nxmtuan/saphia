// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/**/*.js',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			colors: {
				primary: '#224393',
				secondary: '#f47514',
				content: '#292929',
			},
			fontFamily: {
				body: ['Questrial'],
				content: ['Helvetica'],
			},
			backgroundImage: {
				'home-gradient':
					'linear-gradient(to bottom, #ffffff 0%, #DCECFD 30%, #DCECFD 80%, #ffffff 100%)',
				'card-gradient': 'linear-gradient(to top, #0000007A 0%, #00000000 100%)',
				'text-gradient': 'linear-gradient(90deg, #124B96 0%, #26AAE1 100%)',
				'products-gradient': 'linear-gradient(0deg, rgba(34, 67, 147, 0.80) -0.06%, rgba(255, 255, 255, 0.00) 100.05%)',
				'line-gradient': 'linear-gradient(to right, #124B96 0%, #26AAE1 100%)',
				'section-gradient':'linear-gradient(0deg, rgba(255, 255, 255, 0.95) 49.99%, rgba(255, 255, 255, 0.73) 64.55%, rgba(255, 255, 255, 0.48) 70.09%, rgba(255, 255, 255, 0.00) 77.71%)',
				'why-gradient': 'linear-gradient(270deg, rgba(34, 67, 147, 0.00) 35.77%, rgba(34, 67, 147, 0.70) 68.82%)',
				'video-gradient': 'linear-gradient(270deg, rgba(0, 0, 0, 0.00) 38.58%, rgba(0, 0, 0, 0.80) 91.98%)',
				'life-gradient': 'linear-gradient(0deg, rgba(115, 115, 115, 0.00) -2.66%, rgba(63, 61, 134, 0.64) 9.2%, #221F90 50.54%)',
			},
			boxShadow: {
				'card': '0px 6.34px 38.041px 0px rgba(0, 0, 0, 0.16)',
				'product': '0px 4px 4px 0px rgba(0, 0, 0, 0.25)',
				'contentCard': '0px 0px 0px 3px rgba(32, 65, 154, 0.05)',
				'ban-tin': '0px 4px 4px 0px rgba(0, 0, 0, 0.25)',
			}
		},
		container: {
			center: true,
			padding: '20px',
			screens: {
				xs: '393px',
				sm: '640px',
				md: '768px',
				lg: '1025px',
				xl: '1280px',
				'2xl': '1476px',
				'3xl': '1676px',
			},
		},
		screens: {
			sm: '640px',
			md: '768px',
			lg: '1025px',
			xl: '1280px',
			'1.5xl': '1476px',
			'2xl': '1537px',
			'3xl': '1920px',
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
