<?php

spl_autoload_register(function($className) {
  include "./app/Animal/$className.php";
});