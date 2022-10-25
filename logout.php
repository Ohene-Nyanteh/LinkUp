<?php
require 'Config/constants.php';
session_destroy();
header('location: ' . ROOT_URL);
die();