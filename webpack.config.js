const path = require('path');

module.exports = {
  entry: './assets/app.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js'
  },

  resolve: {
    extensions: ['.js']
  },

  externals: {
    foundation: 'Foundation'
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        loader: 'babel-loader',
        query: {
          presets: ['es2015']
        }
      },

      {
        test: /\.scss$/,
        use: [ 'style-loader', "css-loader", "sass-loader" ]
      }
    ]
  }
}