<?php
/**
 * User: Simon sanwkj@163.com
 * Author: EagleWu <eaglewudi@gmail.com>
 * Date: 2016-07-27
 * Time: 12:46
 */
namespace Swoole\WebSocket;
/**
 * Class swoole_http_server
 *
 *  内置 Websocket 服务器
 */
class Server extends \Swoole\Http\Server
{
    /**
     * 向某个WebSocket客户端连接推送数据
	 *
     * @param      $fd
     * @param      $data
     * @param bool $binary_data
     * @param bool $finish
     * @return bool
     */
    function push($fd, $data, $binary_data = false, $finish = true)
    {
    }

    /**
	 *
	 * 打包数据
	 *
     * @param $data
     * @param $opcode
     * @param bool $finish
     * @param bool $mask
     * @return string
     */
    static function pack($data, $opcode = WEBSOCKET_OPCODE_TEXT, $finish = true, $mask = false)
    {
    }
}
