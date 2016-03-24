Alert Widget for Yii 2
=========
- Alert widget based on bootstrap-sweetalert extension http://lipis.github.io/bootstrap-sweetalert

Installation 
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist makroxyz/yii2-bootstrap-sweetalert "*"
```

or add

```json
"makroxyz/yii2-bootstrap-sweetalert": "*"
```

to the require section of your composer.json.

Usage
------------
Once the extension is installed, simply add widget to your page as follows:

```php
echo \makroxyz\sweetalert\SweetAlert::widget([
        'type' => \makroxyz\sweetalert\SweetAlert::TYPE_WARNING,
        'options' => [
            'title' => 'Warning message',
            'text' => "Do you want to delete it?",
            'confirmButtonText'  => "Yes, delete it!",
            'cancelButtonText' =>  "No, cancel plx!"
        ]
]);
```


Alert Options 
----------------
You can find them on the [options page](http://lipis.github.io/bootstrap-sweetalert/)
