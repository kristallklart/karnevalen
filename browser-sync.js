var bs = require('browser-sync').create();

bs.init({
  host: '192.168.7.7',
  proxy: 'php7dev',
  startPath: '/dist/index.php',
  browser: 'firefox',
  open: true,
  files: [
    './dist/*.php',
    './dist/php/*.php',
    './dist/js/*.js',
    './dist/css/*.css'
  ],
  injectChanges: false,
  watchOptions: {
    usePolling: true,
    interval: 500
  }
});
