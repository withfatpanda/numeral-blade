<?php
namespace FatPanda\Blade\Numeral;

use Illuminate\Support\ServiceProvider as AbstractServiceProvider;
use Stillat\Numeral\Languages\LanguageManager;
use Stillat\Numeral\Numeral;

use Blade;

class ServiceProvider extends AbstractServiceProvider
{
  public function boot()
  {
    Blade::directive('numeral', function($expression) {
      return "<?php echo app(\\Stillat\\Numeral\\Numeral::class)->format($expression); ?>";
    });
  }

  public function register()
  {
    $this->app->bind(Numeral::class, function() {
      $languageManager = new LanguageManager;
      $formatter = new Numeral;
      $formatter->setLanguageManager($languageManager);
      return $formatter;
    });
  }
}