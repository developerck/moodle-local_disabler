<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package     local_disabler
 * @category    admin
 * @copyright   2020 Chandra <developerck@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    // phpcs:ignore Generic.CodeAnalysis.EmptyStatement.DetectedIf
    if ($ADMIN->fulltree) {
        // TODO: Define the plugin settings page - {@link https://docs.moodle.org/dev/Admin_settings}.
    }

    // TODO: Define the plugin settings page.
    // https://docs.moodle.org/dev/Admin_settings
    $settings = new admin_settingpage('local_disabler', get_string("pluginname","local_disabler"));
    $settings->add(new admin_setting_configselect(
        'disabler_source_prevention',
        'View Source prevention',
        '',
        '0',
        array('0' => 'No', '1' => "Yes")
    ));
    $settings->add(new admin_setting_configselect(
        'disabler_exclude_admin',
        'Exclude Admin ',
        '',
        '1',
        array(1 => "Yes", 0 => "No")
    ));
    $ADMIN->add('root', $settings);


}
