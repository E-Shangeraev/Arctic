const webpack = require('webpack');
require('babel-polyfill');
const path = require('path');

module.exports = {
  mode: 'development',
  context: path.resolve(__dirname, 'app'),
  entry: {
    index: './js/index.js',
  },
  output: {
    filename: '[name].bundle.js',
  },
  devtool: process.env.NODE_ENV === 'development' ? 'eval-source-map' : 'source-map',
  watch: true,
  watchOptions: {
    ignored: /node_modules/,
  },
  devServer: {
    contentBase: path.join(__dirname, 'dist'),
    compress: true,
    port: 3000,
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/,
        exclude: /(node_modules)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
      {
        test: /\.(js|jsx)$/,
        use: ['cache-loader'],
      },
      {
        test: /\.s[ac]ss$/i,
        use: ['style-loader', 'css-loader', 'sass-loader', 'cache-loader'],
      },
    ],
  },
  // HotModuleReplacementPlugin: {
  //   // Options...
  // },
  plugins: [new webpack.ProvidePlugin({}), new webpack.HotModuleReplacementPlugin()],
};
