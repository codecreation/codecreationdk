<?php
require 'recipe/drupal8.php';

server('prod', '146.185.128.63', 9999)
  ->user('deploy')
  ->identityFile()
  ->stage('production')
  ->env('deploy_path', '/usr/share/nginx/html/codecreationdk');

set('repository', 'git@github.com:DocIT-dk/codecreationdk.git');

task('docker:reboot', function () {
  cd('{{release_path}}');
  run('docker login -e info@docit.dk -u docitdeploy -p docit!dockerhub1');
  run('docker stop cc.site || true');
  run('docker rm cc.site || true');
  run('docker pull docit/codecreation');
  run('docker-compose -f docker-compose.prod.yml up -d');
});

task('drush:updb', function () {
  writeln("<info>Drush: Updating database</info>");
  run('docker exec cc.site drush updb -y --root=/var/www/web');
});

task('drush:cache', function () {
  writeln("<info>Drush: Rebuilding cache</info>");
  run('docker exec cc.site drush cr --root=/var/www/web');
});

// Run the custom scripts.
after('deploy', 'docker:reboot');
after('deploy', 'drush:updb');
after('deploy', 'drush:cache');