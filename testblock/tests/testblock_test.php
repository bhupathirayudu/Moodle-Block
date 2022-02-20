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
// PHPUnit tests are located in tests/*_test.php files in your plugin, for example mod/myplugin/tests/sample_test.php, the file should contain only one class that extends advanced_testcase:
namespace block_testblock\tests;
defined('MOODLE_INTERNAL') || die();
use advanced_testcase;
use block_testblock;
use context_course;

class testblock_test extends \advanced_testcase {
    public static function setUpBeforeClass(): void {
        require_once(__DIR__ . '/../../moodleblock.class.php');
        require_once(__DIR__ . '/../block_testblock.php');
    }

    public function test_can_block_be_added(): void {
        $this->resetAfterTest();
        $this->setAdminUser();

        // Create a course and prepare the page where the block will be added.
        $course = $this->getDataGenerator()->create_course();
        $page = new \moodle_page();
        $page->set_context(context_course::instance($course->id));
        $page->set_pagelayout('course');

        $block = new block_testblock();

        // If blogs advanced feature is enabled, the method should return true.
        set_config('enablecompletion', true);
        $this->assertTrue($block->can_block_be_added($page));

        // However, if the blogs advanced feature is disabled, the method should return false.
        set_config('enablecompletion', false);
        $this->assertFalse($block->can_block_be_added($page));
    }
}
