<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Course summary block
 *
 * @package    block_testblock
 * @copyright  Bhupsthi
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
// To enable global configuration for the block, we create a new file, /blocks/simplehtml/settings.php, and populate it with form field definitions for each setting, which Moodle will use to generate and handle a global settings form

$settings->add(new admin_setting_heading(
            'headerconfig',
            get_string('headerconfig', 'block_testblock'),
            get_string('descconfig', 'block_testblock')
        ));

$settings->add(new admin_setting_configcheckbox(
            'testblock/Allow_HTML',
            get_string('labelallowhtml', 'block_testblock'),
            get_string('descallowhtml', 'block_testblock'),
            '0'
        ));
