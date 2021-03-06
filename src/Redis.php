<?php
/**
 * User: Simon sanwkj@163.com
 * Author: EagleWu <eaglewudi@gmail.com>
 * Date: 2016-07-27
 * Time: 12:46
 */

namespace Swoole;
/**
 * 异步Redis客户端
 */
class Redis
{
    /**
     * 注册事件回调函数
     * @param $event_name
     * @param callable $callback
     */
    function on($event_name, callable $callback)
    {

    }

    /**
     * 连接到服务器
     * @param string $host
     * @param int $port
     * @param callable $callback
     */
    function connect($host, $port, callback $callback)
    {
    }


    /**
     * 关闭连接
     */
    function close()
    {
    }

	/**
	 * __call magic function
	 *
	 * @param $command
	 * @param $params
	 */
    function __call($command,$params){

	}
}