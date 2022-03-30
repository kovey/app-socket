<?php
/**
 * @description
 *
 * @package
 *
 * @author kovey
 *
 * @time 2022-03-28 18:01:13
 *
 */
namespace Packet;

use Kovey\Network\PacketInterface;
use Google\Protobuf\Internal\Message;
use Message\BaseNetMessage;

class ResPacket implements PacketInterface
{
    private Message $msg;

    private int | string $code;

    public function __construct(Message $msg, int | string $code) 
    {
        $this->msg = $msg;
        $this->code = $code;
    }

    public function unserialize(string $data) : void
    {
    }

    public function serialize() : string
    {
        $base = new BaseNetMessage();
        $base->setId($this->code)
             ->setData($this->msg->serializeToString());

        return $base->serializeToString();
    }
}
