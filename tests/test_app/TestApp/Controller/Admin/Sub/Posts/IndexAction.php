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
namespace TestApp\Controller\Admin\Sub\Posts;

use HavokInspiration\ActionsClass\Controller\Action;

class IndexAction extends Action
{

    public $someProperty = null;

    public $viewPath = null;

    public $passed = [];

    public function execute($order, $limit)
    {
        $this->someProperty = 'executed';
        $this->viewPath = $this->_viewPath();

        $this->passed = compact('order', 'limit');
    }
}
