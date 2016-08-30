<?php
/**
 * User: Simon sanwkj@163.com
 * Author: EagleWu <eaglewudi@gmail.com>
 * Date: 2016-07-27
 * Time: 12:46
 */

namespace Swoole\Http;
/**
 * Http请求对象
 * Class swoole_http_request
 */
class Request
{

	/**
	 * gets 数据
	 *
	 * @var array
	 */
	public $get;

	/**
	 * posts 数据
	 *
	 * @var array
	 */
	public $post;

	/**
	 * header数据
	 *
	 * @var array
	 */
	public $header;

	/**
	 * 服务器相关数据
	 * array (
	 * 		'request_method' => 'GET',
	 * 		'request_uri' => '/banner/fetch',
	 * 		'path_info' => '/banner/fetch',
	 * 		'request_time' => 1472206492,
	 * 		'request_time_float' => 1472206492.7587919,
	 * 		'server_port' => 17777,
	 * 		'remote_port' => 34284,
	 * 		'remote_addr' => '172.30.248.218',
	 * 		'server_protocol' => 'HTTP/1.1',
	 * 		'server_software' => 'swoole-http-server',
	 * )
	 *
	 * @var array
	 */
	public $server;

	/**
	 * cookie
	 *
	 * @var array
	 */
	public $cookie;

	/**
	 * 上传文件
	 *
	 * @var array
	 */
	public $files;

	/**
	 * 文件描述符
	 *
	 * @var int
	 */
	public $fd;

    /**
     * 获取非urlencode-form表单的POST原始数据
	 *
     * @return string
     */
    function rawContent()
    {
    }
}