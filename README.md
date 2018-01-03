# cakephp3-MaterialDesign

## Installation

You can install using [composer](http://getcomposer.org).

```
composer require nos86/cakephp3-material-design
```

### Enable Plugin

```php
// config/bootstrap.php

Plugin::load('MaterialDesignTheme', ['bootstrap' => true, 'routes' => true]);
```

### Enable theme

```php
// src/Controller/AppController.php

public function beforeRender(Event $event)
{
    $this->viewBuilder()->setTheme('MaterialDesignTheme');
}
```

### Enable Form

```php
// src/View/AppView.php

public function initialize()
{
    $this->loadHelper('Form', ['className' => 'MaterialDesignTheme.Form']);
}
```

### Customize Layout

```php
// src/Controller/AppController.php
use Cake\Core\Configure;

public function beforeRender(Event $event)
{
    // ...
    $this->viewBuilder()->setClassName('MaterialDesignTheme.MDB');
}
```

After you enable the MDBView class in the AppController.php file, you can overwrite any View file, only by creating the `Plugin/MDB/` folder inside the `Template` folder.

For example, to overwrite the elements files, you must create them as follows:

1. `src/Template/Plugin/MDB/Element/nav-top.ctp`


## Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request
