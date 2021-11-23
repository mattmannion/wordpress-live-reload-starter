# Set-up

## Live Reload

- [**Chrome Extension**](https://chrome.google.com/webstore/detail/live-reload/jcejoncdonagmfohjcdgohnmecaipidc)
- [**Github**](https://github.com/blaise-io/live-reload#readme)
  > Note: Must be this extension specifically.

### Extension settings:

- host: http://`<wpurl>`
- source: http://`<wpurl>`/\* - the /\* is how the magic happens

## Essential PHP

The following php function links resources to the theme:

- functions.php:

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
