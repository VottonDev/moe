<?php
session_start();
include_once('../includes/core.php');
if ($_SESSION['level'] > 0) {
    echo "Admin";
    fetchUserFiles($_SESSION['email']);
} else {
    fetchUserFiles($_SESSION['email']);
}
