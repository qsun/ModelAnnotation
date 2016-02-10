# Model Annotation for Laravel 5

ModelAnnotation puts database schema aside with your model files for easy reference.

Add annotation to plain Laravel model files

```
<?php
/* MODEL ANNOTATION:
@property int $id Type: int(10) unsigned, Extra: auto_increment, Default: null, Key: PRI
@property string $name Type: varchar(255), Extra: , Default: null, Key: nil
@property string $email Type: varchar(255), Extra: , Default: null, Key: UNI
@property string $password Type: varchar(60), Extra: , Default: null, Key: nil
@property string|null $remember_token Type: varchar(100), Extra: , Default: null, Key: nil
@property int|null $created_at Type: timestamp, Extra: , Default: null, Key: nil
@property int|null $updated_at Type: timestamp, Extra: , Default: null, Key: nil

END MODEL ANNOTATION */

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
```


## Usage

This package only works with MySQL for now.


- *Make sure you have backup or VCS*.


- Modify composer.json file, include following line for `require` section:

```
"require": {
    ...
    "qsun/model-annotation": "dev-master"
}
```


- Run `composer update` to install newly added package


- Add `Service Provider` in `app.php`:

```
'providers' => [
    ....
    qsun\ModelAnnotation\AnnotationServiceProvider::class
]
```


- Run `php artisan annotate:models` to annotate model files


