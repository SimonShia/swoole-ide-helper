<?php
/**
 * User: Simon sanwkj@163.com
 * Author: EagleWu <eaglewudi@gmail.com>
 * Date: 2016-07-27
 * Time: 12:46
 */

namespace Swoole\Http;

/**
 * swoole_http_client
 *
 * Author: EagleWu <eaglewudi@gmail.com>
 * Date: 2016/02/17
 */
/**
 * Class Client
 *
 * @package Swoole\Http
 */
class Client
{

	/**
	 * 设置
	 *
	 * @var
	 */
	public $setting;

	/**
	 * 头部信息
	 *
	 * @var
	 */
	public $set_headers;

    /**
     * swoole_http_client constructor.
	 *
     * @param string $host
     * @param integer $port
     */
    public function __construct($host, $port)
    {

    }

    /**
	 * 设置入口
	 *
     * @param $setting
     * @return true
     */
    public function set($setting)
    {
    }

	/**
	 * 设置请求方法
	 *
	 * @param $method
	 */
	public function setMethod( $method ) {

    }

    /**
	 * 设置请求头
	 *
     * @param $headers
     * @return true
     */
    public function setHeaders($headers)
    {

    }

	/**
	 * 设置cookies
	 *
	 * @param $cookies
	 */
    public function setCookies($cookies){

	}

    /**
	 * 设置发送数据
	 *
     * @param $data
     * @return true
     */
    public function setData($data)
    {

    }

    /**
	 * 执行
	 *
     * @param string $uri
     * @param mixed $finish
     * @return bool
     */
    public function execute($uri, $finish)
    {

    }

    /**
	 * 推送websocket数据
	 *
     * @param $data
     * @param int $opcode
     * @param int $fin
     */
    public function push($data, $opcode = WEBSOCKET_OPCODE_TEXT, $fin = 1)
    {

    }

    /**
	 * 是否已经连接
	 *
     * @return boolean
     */
    public function isConnected()
    {

    }

    /**
	 * 关闭连接
	 *
     * @return bool
     */
    public function close()
    {

    }

    /**
	 * 注册事件
	 *
     * @param string $name
     * @param mixed $callback
     */
    public function on($name, $callback)
    {

    }

    /**
	 * get请求
	 *
     * @param string $uri
     * @param mixed $finish
     */
    public function get($uri, $finish)
    {

    }

    /**
	 * post请求
	 *
     * @param string $uri
     * @param mixed $post
     * @param mixed $finish
     */
    public function post($uri, $post, $finish)
    {

    }

    /**
	 * 发起WebSocket握手请求，并将连接升级为WebSocket。
	 *
     * @param string $uri
     * @param mixed $finish
     */
    public function upgrade($uri, $finish)
    {

    }

	/**
	 * 析构函数
	 */
	public function __destruct()
    {

    }
}