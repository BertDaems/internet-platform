<?php
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2007 - 2013 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		git://git.assembla.com/nooku-framework.git for the canonical source repository
 */

namespace Nooku\Library;

/**
 * Alphabetic Filter
 *
 * @author  Johan Janssens <http://nooku.assembla.com/profile/johanjanssens>
 * @package Nooku\Library\Filter
 */
class FilterAlpha extends FilterAbstract implements FilterTraversable
{
	/**
	 * Validate a variable
	 *
	 * @param	scalar	$value Value to be validated
	 * @return	bool	True when the variable is valid
	 */
	public function validate($value)
	{
		$value = trim($value);
		return ctype_alpha($value);
	}

	/**
	 * Sanitize a variable
	 *
     * @param   scalar  $value Value to be sanitized
	 * @return	string
	 */
    public function sanitize($value)
	{
		$pattern 	= '/[^[a-zA-Z]*/';
    	return preg_replace($pattern, '', $value);
	}
}