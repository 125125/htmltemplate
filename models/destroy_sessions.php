<?php
session_start();
session_destroy();
header("Location: ../htmltemplate/install");
?>