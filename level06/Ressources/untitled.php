#!/usr/bin/php
<?php
	function y($m) {
		print("0");
		print($m);
		$m = preg_replace("/\./", " x ", $m);
		print("1");
		print($m);
		$m = preg_replace("/@/", " y", $m);
		print("2");
		print($m);
		return $m;
	}

	function x($y, $z) {
		$a = file_get_contents($y);
		$a = preg_replace("/(\[x (.*)\])/e", "y(\"\\2\")", $a);
		print("3");
		print($a);
		$a = preg_replace("/\[/", "(", $a);
		print("4");
		print($a);
		$a = preg_replace("/\]/", ")", $a);
		print("5");
		print($a);
		return $a;
	}

	$r = x($argv[1], $argv[2]);
	print $r;
?>

