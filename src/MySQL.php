<?php
/**
 * MySQL相关
 * User: Simon sanwkj@163.com
 * Date: 2016-07-27
 * Time: 12:46
 */

namespace Swoole{
	/**
	 * 异步MySQL客户端
	 * @since 1.8.6
	 */
	class MySQL
	{

		/**
		 * 是否已经连接
		 *
		 * @var bool
		 */
		public $connected;

		/**
		 * 错误码
		 *
		 * @var integer
		 */
		public $errno;

		/**
		 * 错误
		 *
		 * @var string
		 */
		public $error;

		/**
		 * 连接错误码
		 *
		 * @var integer
		 */
		public $connect_errno;

		/**
		 * 连接错误描述
		 *
		 * @var string
		 */
		public $connect_error;

		/**
		 * 插入方式的最后id
		 *
		 * @var integer
		 */
		public $insert_id;

		/**
		 * 影响函数
		 *
		 * @var integer
		 */
		public $affected_rows;

		/**
		 * 服务信息
		 *
		 * @var array of [user,password,host,database,port,charset]
		 */
		public $serverInfo;

		/**
		 * @var
		 */
		public $sock;

		/**
		 * MySQL constructor.
		 */
		public function __construct() {
		}

		/**
		 * 析构函数
		 */
		public function __destruct() {
		}

		/**
		 * $server = array(
		 * 		'host' => '192.168.56.102',
		 * 		'user' => 'test',
		 *		'password' => 'test',
		 *		'database' => 'test',
		 * );
		 * host MySQL服务器的主机地址，支持IPv6（::1）和UnixSocket（unix:/tmp/mysql.sock）
		 * port MySQL服务器监听的端口，选填默认为3306
		 * user 用户名，必填
		 * password 密码，必填
		 * database 连接的数据库，必填
		 * @param array    $serverConfig 为MySQL服务器的配置，必须为关联索引数组
		 *
		 * @param callable $callback 连接完成后回调此函数
		 *                           
		 */
		public function connect( array $serverConfig, callable $callback ) {

		}

		/**
		 * 执行sql语句，每个MySQLi连接只能同时执行一条SQL，必须等待返回结果后才能执行下一条SQL
		 *
		 * @param string $sql 为要执行的SQL语句
		 *
		 *  function onSQLReady(\swoole_mysql $link, mixed $result);
		 * 执行失败，$result为false，读取$link对象的error属性获得错误信息，errno属性获得错误码
		 * 执行成功，SQL为非查询语句，$result为true，读取$link对象的affected_rows属性获得影响的行数，insert_id属性获得Insert操作的自增ID
		 * 执行成功，SQL为查询语句，$result为结果数组
		 * @param callable $callback 执行成功后会回调此函数
		 */
		public function query($sql, callable $callback){

		}

		/**
		 * 关闭MySQL连接。
		 */
		public function close(){

		}

		/**
		 * 设置事件回调函数。目前仅支持onClose事件回调。
		 * @param  string  $event_name
		 * @param callable $callback
		 */
		public function on($event_name, callable $callback){

		}
	}
}

namespace Swoole\MySQL{

	/**
	 * mysql异常
	 * Class Exception
	 *
	 * @package Swoole\MySQL
	 */
	class Exception extends \Exception{
	}
}