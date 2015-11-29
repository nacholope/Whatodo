<?php
include "classes/session.inc";
session_unset();
session_destroy();
header("Location: index.php");