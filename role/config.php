<?php
$conf->root_path = dirname(__FILE__);
$conf->server_name = 'localhost:80';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/oleksii-oliinyk/role';
$conf->app_url = $conf->server_url.$conf->app_root;

$conf->action_root = $conf->app_root.'/control.php?action=';
$conf->action_url = $conf->server_url.$conf->action_root;