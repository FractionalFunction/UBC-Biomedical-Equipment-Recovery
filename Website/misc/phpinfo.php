<?php

/*
 * Displays information about the current PHP installation
 * 
 * To be safe, DO NOT include this file in production. Or that the VERY least
 * password or IP address protect this page so that it is not accessable to the
 * public. This page will also not display anything if DEBUG is off.
 */

include_once "../php/settings.php";

if (DEBUG) {
	phpinfo();
}
