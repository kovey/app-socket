<?php
/**
 * @description
 *
 * @package
 *
 * @author kovey
 *
 * @time 2022-03-28 17:59:06
 *
 */
namespace Packet;

use Kovey\Socket\Handler\PackInterface;
use Kovey\Network\PacketInterface;
use Google\Protobuf\Internal\Message;
use Kovey\Socket\Protocol\ProtocolInterface;

class Pack implements PackInterface
{
    public function pack(Message $message, int $action) : PacketInterface
    {
        return new ResPacket($message, $action);
    }

    public function unpack(string $packet) : ProtocolInterface
    {
        return new Packet($packet);
    }
}
