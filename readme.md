# About

This repo is for setting up a live reloading session for wordpress or php projects. The browser will reload on file change just like a nodejs project would. This starter-template also assumes basic understanding of [**Webpack**](https://webpack.js.org/) configuration. It is setup for TS and SCSS by default. I can add other setups in other branches if requested.

## Live Reload

- [**Chrome Extension**](https://chrome.google.com/webstore/detail/live-reload/jcejoncdonagmfohjcdgohnmecaipidc)
- [**Github**](https://github.com/blaise-io/live-reload#readme)
  > Note: Must be this extension specifically.

### Extension settings:

- Host: http://`<wpurl>`
- Source: http://`<wpurl>`/\* - the /\* is how the magic happens
  > Note: Set the `Monitor source URLS every X seconds` to .5 seconds for the fastest refresh.

## Installation guide

Copy the docker-compose.yml found in this repo to where you want this wordpress install to live. Use `docker-compose up -d` to install the images and volumes to the target directory. Next use `sudo chmod 777 -R ./*` to take ownership of the created volume files for local development.

Now we need to clone this repo to a theme folder. Navigate to wp-content/themes and make a folder there. You can name it whatever you want. cd into that newly created folder and clone this repo inside the theme folder using `git clone git@github.com:mattmannion/wordpress-live-reload-starter.git .`

After those steps are finished you can run the following commands:

```
yarn

npm run d
```

These two commands will install all dependancies using yarn(you can also use `npm i` if you'd like) and `npm run d` will start up webpack for you and watch the files for any changes.
