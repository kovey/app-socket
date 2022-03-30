<?php
/**
 * @description
 *
 * @package
 *
 * @author kovey
 *
 * @time 2022-03-28 18:10:34
 *
 */
namespace App\Event;

use Kovey\Network\Handler\ConnectInterface;
use Kovey\Network\Event;

class Connect implements ConnectInterface
{
    public function connect(Event\Connect $event) : void
    {
        var_dump('new connection' . $event->getFd());
    }
}
