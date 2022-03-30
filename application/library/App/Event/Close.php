<?php
/**
 * @description
 *
 * @package
 *
 * @author kovey
 *
 * @time 2022-03-28 18:12:00
 *
 */
namespace App\Event;

use Kovey\Network\Handler\CloseInterface;
use Kovey\Network\Event;

class Close implements CloseInterface
{
    public function close(Event\Close $event) : void
    {
        var_dump('connection close ' . $event->getFd());
    }
}
