<?php

$page = $_GET['p'];

if ($page == "")
{
    @include('pages/index.php');
}

switch($page)
{    
    case "index":
        @include('pages/index.php');
        break;
    case "register":
        @include('pages/register.php');
        break;
	case "login":
        @include('pages/login.php');
        break;
	case "logout":
        @include('models/logout.php');
        break;
	case "destroy":
        @include('models/destroy_sessions.php');
        break;
    case "register_success":
        @include('pages/register_success.php');
        break;
	case "download":
        @include('pages/download.php');
        break;
	case "success":
        @include('pages/upload_success.php');
        break;
    default:
        @include('pages/error.php');
}
?>