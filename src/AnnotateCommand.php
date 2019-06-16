<?php

namespace qsun\ModelAnnotation;
use AnnotatingClass;

use DB;
use Illuminate\Console\Command;


class AnnotateCommand extends Command {
    protected $name = 'annotate:models';

    protected $description = 'annotate models';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        foreach (DB::select('SHOW TABLES') as $table) {
            foreach (get_object_vars($table) as $table_name) {
                Annotation::annotateTable(app(), $table_name);
            }
        }
    }

    protected function getArguments() {
        return [];
    }

    protected function getOptions() {
        return [];
    }
}
