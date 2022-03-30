<?php
/**
 * @description
 *
 * @package
 *
 * @author kovey
 *
 * @time 2021-01-13 14:47:10
 *
 */
use Kovey\Rpc\Server\Port;
use Kovey\Rpc\App\AppBase;
use Kovey\Rpc\App\Bootstrap\Autoload;
use Kovey\Library\Exception\ProtocolException;
use Kovey\Container\Event;
use Kovey\Library\Config\Manager;
use App\Event\Close;
use App\Event\Connect;
use Packet\Pack;
use Kovey\Socket\App\App;

class Bootstrap
{
    public function __initRpc(App $app)
    {
        $port = new Port($app->getServer()->getServ(), Manager::get('server.rpc'));
        $autoload = new Autoload();
        $autoload->register();
        $appBase = new AppBase(Manager::get('server'));
        $appBase->registerServer($port)
                ->registerAutoload($autoload)
                ->registerContainer($app->getContainer());
        $app->registerOtherApp('rpc', $appBase);
    }

	public function __initEvents(App $app)
	{
        $app->registerClose(new Close())
            ->registerConnect(new Connect())
            ->registerPack(new Pack());
	}
}
