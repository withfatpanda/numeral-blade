# `@numeral` directive for Laravel Blade

This Laravel 5 package adds a blade directive named `@numeral`, which you can use to process numbers into a variety of formats.

Here's a quick example:

```blade
<!-- +10,000 -->
@numeral(10000.23, '+0,0')

<!-- 233.43k -->
@numeral(233434, '0a.00')
```

This directive is just an alias for [stillat/numeral.php](https://github.com/Stillat/numeral.php) by [JohnathanKoster](https://github.com/JohnathonKoster), which itself is a port of [numeraljs](http://numeraljs.com/). 

It's dependencies all the way down!

## Facade

You can also use Numeral via the `Numeral` facade. Just add it to your aliases list in `config/app.php`:


```php
'aliases' => [

  'Numeral' => FatPanda\Blade\Numeral\Facade::class

]
```

Then, you'll be able to invoke `Numeral::format($number, $format)` anywhere you please.

## Contributing

This project is unlikely to get a lot of my focus.

If you find a problem, please fix it and issue a pull request.

### Wishlist

I'd love to see someone spend the time to create a configuration file. I don't have time, and probably won't ever need one.