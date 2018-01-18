<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

include __DIR__ . '/../vendor/autoload.php';

$session = session();

$response = new \FastD\Http\Response();

$response
    ->withContent($session->get('foo'))
    ->send()
;



