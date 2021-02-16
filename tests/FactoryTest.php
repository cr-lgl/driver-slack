<?php

namespace Tests;

use Mockery as m;
use BotMan\BotMan\BotMan;
use React\EventLoop\Factory;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Slack\SlackRTMDriver;

class FactoryTest extends m\Adapter\Phpunit\MockeryTestCase
{
    /**
     * @test
     */
    public function it_registers_factory_methods()
    {
        DriverManager::loadDriver(SlackRTMDriver::class);
        $bot = BotManFactory::createForRTM([], Factory::create());
        $this->assertInstanceOf(BotMan::class, $bot);
    }
}
