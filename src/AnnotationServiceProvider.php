<?php

namespace qsun\ModelAnnotation;

use Illuminate\Support\ServiceProvider;
use Log;

class AnnotationServiceProvider extends ServiceProvider {
    protected $commands = [
        'qsun\ModelAnnotation\AnnotateCommand'
    ];

    public function register() {
        $this->commands($this->commands);
    }
}