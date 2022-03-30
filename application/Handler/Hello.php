<?php
/**
 * @description
 *
 * @package
 *
 * @author kovey
 *
 * @time 2021-01-13 14:47:38
 *
 */
namespace Handler;

use Module;
use Kovey\Socket\Handler\HandlerAbstract;
use Message\ReqNormalLogin;
use Message\MessageId;
use Kovey\Container\Event\Protocol;

class Hello extends HandlerAbstract
{
    #[Module\Hello]
    private $hello;

    #[Protocol(MessageId::Req_NormalLogin, ReqNormalLogin::class)]
    public function world(ReqNormalLogin $packet, int $fd) : Array
    {
        return $this->hello->world($packet, $fd);
    }
}
