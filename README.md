# Model Annotation for Laravel 5

Add annotation to plain Laravel model files

![plain file](https://www.httpsreminder.com/images/no_annotation.png) ![with annotation](https://www.httpsreminder.com/images/with_annotation.png)



## Usage

This package only works with MySQL for now.


0. *Make sure you have backup or VCS*.


1. Modify composer.json file, include following line for `require` section:

```
"require": {
    ...
    "qsun/model-annotation": "dev-master"
}
```


2. Run `composer update` to install newly added package


3. Add `Service Provider` in `app.php`:

```
'providers' => [
    ....
    qsun\ModelAnnotation\AnnotationServiceProvider::class
]
```


4. Run `php artisan annotate:models` to annotate model files


