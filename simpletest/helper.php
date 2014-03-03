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
 * Test helpers for the drag-and-drop words into sentences question type.
 *
 * @package    qtype
 * @subpackage easyofischer
 * @copyright  2010 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();


/**
 * Test helper class for the drag-and-drop words into sentences question type.
 *
 * @copyright  2010 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_easyofischer_test_helper {

    /**
     * @return qtype_easyofischer_question
     */
    public function make_a_easyofischer_question() {
        question_bank::load_question_definition_classes('easyofischer');
		$easyofischer = new qtype_easyofischer_question();
        test_question_maker::initialise_a_question($easyofischer);
        $easyofischer->name = 'Marvin Molecule Editor question';
        $easyofischer->questiontext = 'Name an amphibian: __________';
        $easyofischer->generalfeedback = 'Generalfeedback: frog or toad would have been OK.';
        $easyofischer->usecase = true;
        $easyofischer->answers = array(
            13 => new question_answer(13, 'frog', 1.0, 'Frog is a very good answer.', FORMAT_HTML),
            14 => new question_answer(14, 'toad', 0.8, 'Toad is an OK good answer.', FORMAT_HTML),
            15 => new question_answer(15, '*', 0.0, 'That is a bad answer.', FORMAT_HTML),
        );
        $easyofischer->qtype = question_bank::get_qtype('easyofischer');

        return $easyofischer;
    }
}
