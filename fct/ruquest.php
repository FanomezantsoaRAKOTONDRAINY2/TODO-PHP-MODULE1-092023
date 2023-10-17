<?php

  function post($name, $default = null) {
      if (isset($_POST[$name])) {
          return htmlentities($_POST[$name]);
      }
      else {
          return $default;
      }
  };
