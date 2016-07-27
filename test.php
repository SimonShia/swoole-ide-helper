<?php
/**
 * @todo input file descriptions.
 * User: Simon sanwkj@163.com
 * Date: 2016-07-27
 * Time: 12:46
 */

$ref = new ReflectionMethod('swoole_mysql','connect');
var_dump($ref);
foreach($ref->getParameters() as $p){
	foreach(['getName','getType','getDefaultValue1','getPosition',
			 'getDefaultValueConstantName1','isPassedByReference',
			'isOptional','isCallable'] as $m){
		if(method_exists($p,$m))
		echo $m,':',$p->{$m}(),PHP_EOL;
	}
}

#$ref = new ReflectionMethod('swoole_process','statQueue');