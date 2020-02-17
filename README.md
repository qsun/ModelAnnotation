# Model Annotation for Laravel 5

ModelAnnotation puts database schema aside with your model files for easy reference.

Add annotation to plain Laravel model files

```
<?php
/* MODEL ANNOTATION:
@property	$id                      Type: bigint(20) unsigned      Extra: auto_increment      Default: null      Key: PRI
@property	$name                    Type: varchar(255)             Extra:                     Default: null      Key: nil
@property	$email                   Type: varchar(255)             Extra:                     Default: null      Key: UNI
@property	$email_verified_at       Type: timestamp                Extra:                     Default: null      Key: nil
@property	$password                Type: varchar(255)             Extra:                     Default: null      Key: nil
@property	$remember_token          Type: varchar(100)             Extra:                     Default: null      Key: nil
@property	$created_at              Type: timestamp                Extra:                     Default: null      Key: nil
@property	$updated_at              Type: timestamp                Extra:                     Default: null      Key: nil

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


