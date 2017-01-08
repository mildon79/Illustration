module.exports = {
	entry: "./src/index.jsx",
	output: {
		filename: "./www/js/bundle.js"
	},
	module: {
		loaders: [
			{
				test: /\.jsx$/,
				loader: 'babel-loader',
				query: {
					presets: ['react', 'es2015'],
					plugins: ["transform-class-properties"]
				}
			},
			{test: /\.css$/, exclude: /\.useable\.css$/, loader: "style-loader!css-loader"},
			{test: /\.useable\.css$/, loader: "style-loader/useable!css-loader"},
			{test: /\.(png|woff|woff2|eot|ttf|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/, loader: 'url'}

		]

	}
};