<?php
namespace Tests;

use Numeral;
use Orchestra\Testbench\TestCase;

class OrchestrationTest extends TestCase
{
  protected function getPackageProviders($app)
  { 
    return ['FatPanda\Blade\Numeral\ServiceProvider'];
  }

  protected function getPackageAliases($app)
  {
    return [
      'Numeral' => 'FatPanda\Blade\Numeral\Facade'
    ];
  }

  public function testOrchestrationTest()
  {
    $this->app['view']->addNamespace('numeral', __DIR__);

    $this->assertEquals('+10,000', Numeral::format(10000.23, '+0,0'));

    $this->assertEquals('233.43k', view('numeral::test')->render());
  }
}