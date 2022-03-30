<?php
/**
 * @description
 *
 * @package
 *
 * @author kovey
 *
 * @time 2021-01-13 14:49:41
 *
 */
namespace Module;

use Message\ReqNormalLogin;
use Message\RespLogin;
use Message\MessageId;

#[\Attribute]
class Hello
{
    public function world(ReqNormalLogin $packet, int $fd)
    {
        $res = new RespLogin();
        return array(
            'message' => $res,
            'action' => MessageId::Resp_Login
        );
    }
}
