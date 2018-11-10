<?php

define("DEBUG", true);

$CONFIG = array(
"installed" => true,
"dbtype" => 'mysql',
"dbname" => '{{database_name}}',
"dbuser" => '{{database_user}}',
"dbpassword" => '{{database_password}}',
"dbhost" => '{{database_host}}',
"dbtableprefix" => "",
"forcessl" => false,
"enablebackup" => false,
"theme" => "",
"3rdpartyroot" => "",
"3rdpartyurl" => "",
"defaultapp" => "files",
"knowledgebaseenabled" => true,
"knowledgebaseurl" => "",
"appstoreenabled" => true,
"appstoreurl" => "",
"mail_smtpmode" => "sendmail",
"mail_smtphost" => "127.0.0.1",
"mail_smtpauth" => false,
"mail_smtpname" => "",
"mail_smtppassword" => "",
"appcodechecker" => "",
"log_type" => "",
"logfile" => "",
"loglevel" => "",
"datadirectory" => '/var/www/owncloud',
);
?>