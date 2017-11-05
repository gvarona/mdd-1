<?php

// constants
$local_only = true;
define("DB",        get_env("MDD_DB", local_only));
define("HOST",      get_env("MDD_HOST", local_only));
define("USERNAME",  get_env("MDD_USERNAME", local_only));
define("PASSWORD",  get_env("MDD_PASSWORD", local_only));

?>
