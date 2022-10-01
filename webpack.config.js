require('dotenv').config();
const path = require('path');
const Dotenv = require('dotenv-webpack');

const mode =
  process.env.mode === 'production' || process.env.mode === 'prod'
    ? 'production'
    : 'development';

module.exports = {
  watch: true,
  mode,
  plugins: [
    new Dotenv({
      silent: true,
    }),
  ],
  entry: [
    __dirname + '/src/typescript/index.ts',
    __dirname + '/src/sass/_scss/index.scss',
  ],
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'index.js',
  },
  resolve: {
    alias: {
      ts: '/src/typescript',
    },
    extensions: ['.webpack.js', '.web.js', '.ts', '.js'],
  },
  module: {
    rules: [
      { test: /\.ts$/, exclude: /node_modules/, loader: 'ts-loader' },
      {
        test: /\.scss$/,
        exclude: /node_modules/,
        type: 'asset/resource',
        generator: {
          filename: 'index.css',
        },
        use: [
          { loader: 'postcss-loader' },
          {
            loader: 'sass-loader',
            options: {
              sourceMap: false,
              sassOptions: {
                outputStyle: 'compressed',
              },
            },
          },
        ],
      },
    ],
  },
};
