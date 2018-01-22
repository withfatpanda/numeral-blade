<?php
namespace FatPanda\Blade\Numeral;

use Illuminate\Support\Facades\Facade as AbstractFacade;
use Stillat\Numeral\Numeral;

class Facade extends AbstractFacade 
{

  protected static function getFacadeAccessor()
  {
    return Numeral::class;
  }

}