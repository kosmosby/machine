<?php
/**
 * @package	AcyMailing for Joomla
 * @version	6.0.3
 * @author	acyba.com
 * @copyright	(C) 2009-2019 ACYBA S.A.R.L. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die('Restricted access');
?><?php

class acymPlugin
{
    var $cms = 'all';
    var $installed = true;
    public function __construct()
    {
        $this->acympluginHelper = acym_get('helper.plugin');
    }
}