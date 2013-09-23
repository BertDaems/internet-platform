<?php
/**
 * Belgian Police Web Platform - Uploads Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		http://www.police.be
 */

use Nooku\Library;

class UploadsControllerUpload extends Library\ControllerModel
{
    protected function _initialize(Library\ObjectConfig $config)
    {
        $config->append(array(
            'behaviors' => array('editable')
        ));

        parent::_initialize($config);
    }
}