<?php

namespace qsun\ModelAnnotation;

use Illuminate\Support\ServiceProvider;
use Log;

class AnnotationServiceProvider extends ServiceProvider {
    public function register() {
        Log::debug('ok');
    }
}