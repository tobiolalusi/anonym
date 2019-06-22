module.exports = {
	theme: {
		extend: {
			colors: {
				primary: {
					dark: '#17252a',
					shade: '#2b7a78',
					default: '#3aafa9',
					tint: '#def2f1',
					light: '#feffff'
				},
			},
		},
		fontFamily: {
			'lato': ['Lato', 'sans-serif']
		},
	},
  	variants: {},
  	plugins: [
  		require('tailwindcss-transitions')()
	]
}
