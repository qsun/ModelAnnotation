# Model Annotation for Laravel 5

ModelAnnotation puts database schema aside with your model files for easy reference.

Add annotation to plain Laravel model files

![plain file](https://www.httpsreminder.com/images/no_annotation.png) ![with annotation](https://www.httpsreminder.com/images/with_annotation.png)



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


