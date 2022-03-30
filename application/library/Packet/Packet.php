<?php
/**
 * @description
 *
 * @package
 *
 * @author kovey
 *
 * @time 2020-05-06 14:43:53
 *
 */
namespace Packet;

use Kovey\Socket\Protocol\ProtocolInterface;
use Google\Protobuf\Internal\Message;
use Message\BaseNetMessage;

class Packet implements ProtocolInterface
{
    private BaseNetMessage $base;

    public function __construct(string $body)
    {
        $this->base = new BaseNetMessage();
        $this->base->mergeFromString($body);
    }

    public function getAction() : int
    {
        return $this->base->getId();
    }

    public function getMessage() : string
    {
        return $this->base->getData();
    }

    public function getBase() : Message
    {
        return $this->base;
    }
}
