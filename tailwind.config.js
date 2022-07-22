/** @type {import('tailwindcss').Config} */
module.exports = {
	mode: 'jit',
	darkMode: 'class',
	content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		'./storage/framework/views/*.php',
		'./resources/**/*.blade.php',
		'./resources/**/*.js',
	],
	theme: {	
		extend: {
			minHeight: {
				"screen": ["100vh", "calc(var(--vh, 1vh) * 100)"],
			},
			height: {
				"screen": ["100vh", "calc(var(--vh, 1vh) * 100)"],
			}
		},
	},
	plugins: [
		require('@tailwindcss/forms'),
	],
}