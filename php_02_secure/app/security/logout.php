<?php
require_once dirname(__FILE__).'/../../config.php';
session_start();
session_destroy();
include _ROOT_PATH.'/index.php';
