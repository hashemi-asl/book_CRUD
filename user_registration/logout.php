<?php
require('db.php');
include("auth_session.php");

session_start();
if(session_destroy()) {
    // Redirect Home Page
    header("Location: login.php");
}