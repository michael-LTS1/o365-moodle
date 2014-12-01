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
 * @package auth_oidc
 * @author James McQuillan <james.mcquillan@remote-learner.net>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright (C) 2014 onwards Remote-Learner.net Inc (http://www.remote-learner.net)
 */

/**
 * A mock oidcclient class providing access to all inaccessible properties/methods.
 */
class mockoidcclient extends \auth_oidc\oidcclient {
    /** @var \auth_oidc\httpclientinterface An HTTP client to use. */
    public $httpclient;

    /** @var array Array of endpoints. */
    public $endpoints = [];

    /**
     * Stub method to access protected parent method.
     */
    public function getnewstate($nonce) {
        return parent::getnewstate($nonce);
    }

    /**
     * Stub method to access protected parent method.
     */
    public function getauthrequestparams() {
        return parent::getauthrequestparams();
    }
}
