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