<?php 
return array (
  'default' => 'mysql',
  'time_query_rule' => 
  array (
  ),
  'auto_timestamp' => true,
  'datetime_format' => 'Y-m-d H:i:s',
  'datetime_field' => '',
  'connections' => 
  array (
    'mysql' => 
    array (
      'type' => 'mysql',
      'hostname' => '192.168.0.117',
      'username' => 'root',
      'password' => 'root',
      'database' => 'QingScan',
      'charset' => 'utf8mb4',
      'prefix' => '',
      'debug' => true,
      'fields_strict' => false,
      'deploy' => 0,
      'rw_separate' => false,
      'master_num' => 1,
      'slave_no' => '',
      'break_reconnect' => false,
      'trigger_sql' => true,
      'fields_cache' => false,
      'hostport' => '3306',
    ),
  ),
);
?>