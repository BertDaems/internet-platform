<?php
/**
 * Belgian Police Web Platform - Traffic Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

use Nooku\Library;

class TrafficViewArticlesHtml extends TrafficViewHtml
{
    public function render()
    {
        //Get the parameters
        $params = $this->getObject('application')->getParams();

        $this->params = $params;

        //Get the category
        $this->category = $this->getCategory();

        return parent::render();
    }

    public function getCategory()
    {
        //Get the category
        $category = $this->getObject('com:categories.model.categories')
            ->table('traffic')
            ->slug($this->getModel()->getState()->category)
            ->getRow();

        return $category;
    }
}