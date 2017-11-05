<?php

$local_only = true;

define("EMAIL_HOST",     get_env("MDD_EMAIL_HOST", local_only));
define("EMAIL_FROM",     get_env("MDD_EMAIL_FROM", local_only));
define("EMAIL_TO",       get_env("MDD_EMAIL_TO", local_only));
define("EMAIL_USERNAME", get_env("MDD_EMAIL_USERNAME", local_only));
define("EMAIL_PASS",     get_env("MDD_EMAIL_PASS", local_only));
