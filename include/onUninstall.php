<?php
/**
 * Jill Receipt module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright  The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license    http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package    Jill Receipt
 * @since      2.5
 * @author     jaile
 * @version    $Id $
 **/

function xoops_module_uninstall_jill_receipt($module)
{
    global $xoopsDB;
    $date = date("Ymd");

    rename(XOOPS_ROOT_PATH . "/uploads/jill_receipt", XOOPS_ROOT_PATH . "/uploads/jill_receipt_bak_{$date}");

    return true;
}
