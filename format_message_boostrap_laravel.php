<?php
if (!function_exists('format_message')) {
  function format_message($message,$type)
  {
    return '<div class="alert alert-'.$type.' alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>'.$message.' </strong>
    </div>';
  }
}
