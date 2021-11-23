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
    __dirname + '/src/scripts/index.ts',
    __dirname + '/src/sass/index.scss',
  ],
  output: {
    filename: 'scripts/index.js',
    path: path.resolve(__dirname, 'dist'),
  },
  resolve: {
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
          filename: 'styles/index.css',
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
