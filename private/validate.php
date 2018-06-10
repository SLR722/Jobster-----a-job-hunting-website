<?php
  function is_blank($value) {
    return !isset($value) || trim($value) === '';
  }

  function has_presence($value) {
    return !is_blank($value);
  }
  
?>