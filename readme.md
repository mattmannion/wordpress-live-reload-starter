# About

This repo is for setting up a live reloading session for wordpress or php projects. The browser will reload on file change just like a nodejs project would. This setup is tested on [**Localwp**](https://localwp.com/). I will test others in the future.

## Live Reload

- [**Chrome Extension**](https://chrome.google.com/webstore/detail/live-reload/jcejoncdonagmfohjcdgohnmecaipidc)
- [**Github**](https://github.com/blaise-io/live-reload#readme)
  > Note: Must be this extension specifically.

### Extension settings:

- Host: http://`<wpurl>`
- Source: http://`<wpurl>`/\* - the /\* is how the magic happens
  > Note: Set the `Monitor source URLS every X seconds` to .5 seconds for the fastest refresh.

## Essential PHP

The following php function links resources to the theme:

File name: functions.php

```
function main_files() {
  wp_enqueue_style('styles', get_stylesheet_uri());
  wp_enqueue_style('css', get_template_directory_uri() . '/dist/styles/index.css');
  wp_enqueue_script('js', get_template_directory_uri() . '/dist/scripts/index.js');
}

add_action('wp_enqueue_scripts', 'main_files');
```

## Terminal Commands

```
yarn to install all deps

npm run dev
```

use `dev` to start the scss and typescript compile

## Dependencies

<ol>
  <li>npm-run-all</li>
  <li>rimraf</li>
  <li>typescript</li>
  <li>postcss</li>
  <li>autoprefixer</li>
  <li>sass</li>
  <li>webpack</li>
  <li>webpack-cli</li>
</ol>

## Technical Notes / FAQ

<ol>
  <li>
   Q: <em>Webpack watcher is not working</em><br/>
   A: Node must be using the file system native to the project. For example: If you are using WSL2, you will need to switch over to powershell or WSL1 for this to work properly. 
  </li>
</ol>
