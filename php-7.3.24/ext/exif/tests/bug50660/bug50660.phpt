--TEST--
Bug #50660 (exif_read_data(): Illegal IFD offset (works fine with other exif readers))
--SKIPIF--
<?php if (!extension_loaded('exif')) print 'skip exif extension not available';?>
--INI--
output_handler=
zlib.output_compression=0
--FILE--
<?php
$infile = dirname(__FILE__).'/bug50660-1.jpg';
var_dump(exif_read_data($infile) !== false);
$infile = dirname(__FILE__).'/bug50660-2.jpg';
var_dump(exif_read_data($infile) !== false);
?>
===DONE===
--EXPECT--
bool(true)
bool(true)
===DONE===
