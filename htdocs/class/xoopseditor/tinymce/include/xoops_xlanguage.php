<?php
/**
 *  TinyMCE adapter for XOOPS
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package         class
 * @subpackage      editor
 * @since           2.6.0
 * @author          Laurent JEN (aka DuGris)
 * @version         $Id$
 */

if (!defined("XOOPS_ROOT_PATH")) { die("XOOPS root path not defined"); }

$xoops = Xoops::getInstance();
if ($xoops->isActiveModule('xlanguage')) {
    return true;
}
return false;
