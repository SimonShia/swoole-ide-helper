<?php
/**
 * swoole-ide-helper.
 *
 * Author: wudi <wudi23@baidu.com>
 * Date: 2016/02/17
 */

namespace Swoole\WebSocket;

/**
 * Class Frame
 *
 * @package Swoole\WebSocket
 */
class Frame
{
    /**
	 * 文件描述符
	 *
     * @var int
     */
    public $fd;

    /**
	 * 是否完成
	 *
     * @var bool
     */
    public $finish;

    /**
	 * 操作码
	 *
     * @var string
     */
    public $opcode;

    /**
	 * 数据
	 *
     * @var string
     */
    public $data;
}