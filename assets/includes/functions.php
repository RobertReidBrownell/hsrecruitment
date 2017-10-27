<?php
/**
 * User: Reid Brownell
 * Date: 10/27/17
 * Project: High School Recruitment Site
 */


function include_layout_template($template="") {
	include(SITE_ROOT.DS.'assets'.DS.'layouts'.DS.$template);
}
