--TEST--
Bug #80067 (Omitting the port in bindto setting errors)
--SKIPIF--
<?php
if (getenv("SKIP_ONLINE_TESTS")) die('skip online test');
?>
--FILE--
<?php
$context = stream_context_create(['socket' => ['bindto' => '0']]);
var_dump(file_get_contents('https://httpbin.org/get', false, $context) !== false);
?>
--EXPECT--
bool(true)
