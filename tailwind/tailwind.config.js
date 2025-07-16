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
			},
			fontFamily: {
				body: ['Questrial'],
				content: ['Helvetica'],
			},
			backgroundImage: {
				'home-gradient':
					'linear-gradient(to bottom, #ffffff 0%, #DCECFD 30%, #DCECFD 80%, #ffffff 100%)',
				'card-gradient': 'linear-gradient(to top, #0000007A 0%, #00000000 100%)'
			},
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
