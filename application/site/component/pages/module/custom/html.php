<?php
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2011 - 2013 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		git://git.assembla.com/nooku-framework.git for the canonical source repository
 */

use Nooku\Library;

/**
 * Custom Module Html View
 *
 * @author  Tom Janssens <http://nooku.assembla.com/profile/tomjanssens>
 * @package Component\Pages
 */
class PagesModuleCustomHtml extends PagesModuleDefaultHtml
{
    public function render()
    {        
        $this->show_title = $this->module->params->get('show_title', false);
        $this->class      = $this->module->params->get('class', false);
        
        return parent::render();
    }
} 