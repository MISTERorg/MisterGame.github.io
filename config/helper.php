<?php
  function validate_input_text($textvalue){
    if(!empty($textvalue)){
      $trim_text = trim($textvalue);
      //remove illegal character
      $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
      return $sanitize_str;
    }
    return '';
  }
?>