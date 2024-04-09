<?php
function local_disabler_before_footer(){
    global $CFG, $PAGE, $USER;
    $output = '';
    $exclude = false;
    if($CFG->disabler_exclude_admin && is_siteadmin()){
        $exclude = true;
    }
    if($CFG->disabler_source_prevention && $PAGE->pagelayout != 'embedded' && !$exclude){
        $output.= '<script src="'. new moodle_url('/local/disabler/js/disabler.js').'" ></script>';
    }
    
    
    return $output;

}
