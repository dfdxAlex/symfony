<?php

use App\Kernel;
<<<<<<< HEAD

=======
>>>>>>> edf8f94b6cfc914cd66b211d361b81bd7baac6ae
require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
