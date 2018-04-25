This is a very simple composer package used to generate array with websafe color codes. It can generate both RGB and HEX codes.

# Installation
Simply use the usual composer way:

```composer require todstoychev/websafe-colors```

or add to your composer.json in the 'require' section:

```json
    "require": {
        "todstoychev/websafe-colors": "dev-master"
    }
```

and run 

```composer update```

# Usage
The package contains only one class. You will need only the ```Wsc::getColors()``` method. This method accepts only one argument which defines the type of the produced codes. Default is false and the result is array with the hex formated codes. If you want to get RGB values use ```true``` as argument. The result in this case will be: 

```php 
    [
        ['r' => 0, 'g' => 0, 'b' => 0], 
        ['r' => 0, 'g' => 51, 'b' => 0],
        ['r' => 0, 'g' => 0, 'b' => 51],
        ...
    ]
```

