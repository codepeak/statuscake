<?php

namespace Codepeak\Statuscake\App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class StatuscakeServiceProvider
 *
 * @package  Codepeak\Statuscake
 * @license  MIT License https://opensource.org/licenses/MIT
 * @author   Robert Lord, Codepeak AB <robert@codepeak.se>
 * @link     https://codepeak.se
 */
class StatuscakeServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/../../routes/web.php';
    }
}
