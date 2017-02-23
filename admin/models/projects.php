<?php
/**
 * @package      Crowdfundingfinance
 * @subpackage   Components
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2017 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      GNU General Public License version 3 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JLoader::register("CrowdfundingModelProjects", CROWDFUNDING_PATH_COMPONENT_ADMINISTRATOR . "/models/projects.php");

class CrowdfundingfinanceModelProjects extends CrowdfundingModelProjects
{

}
