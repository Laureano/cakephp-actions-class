<?php
/**
 * Copyright (c) Yves Piquel (http://www.havokinspiration.fr)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Yves Piquel (http://www.havokinspiration.fr)
 * @link          http://github.com/HavokInspiration/cakephp-actions-class
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Core\Configure;
use Cake\Core\Plugin;

$findRoot = function ($root) {
    do {
        $lastRoot = $root;
        $root = dirname($root);
        if (is_dir($root . '/vendor/cakephp/cakephp')) {
            return $root;
        }
    } while ($root !== $lastRoot);

    throw new Exception("Cannot find the root of the application, unable to run tests");
};
$root = $findRoot(__FILE__);
unset($findRoot);
chdir($root);

define('CORE_PATH', $root . DS . 'vendor' . DS . 'cakephp' . DS . 'cakephp' . DS);
define('ROOT', $root . DS . 'tests' . DS . 'test_app');
define('APP', ROOT . DS . 'App' . DS);
define('TESTS', ROOT . DS . 'tests' . DS);
define('TMP', sys_get_temp_dir() . DS);

Configure::write('App', [
    'namespace' => 'App',
    'paths' => [
        'plugins' => [APP . 'Plugin' . DS],
        'templates' => [APP . 'Template' . DS]
    ]
]);

Plugin::load('HavokInspiration/ActionsClass', [
    'path' => dirname(dirname(__FILE__)) . DS,
]);