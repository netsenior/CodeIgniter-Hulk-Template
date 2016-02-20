# ci-hook-template

Using Code Igniter's Hooks feature to create a template engine

### config/config.php

Enable system hooks

```php
$config['enable_hooks'] = TRUE;
```

### config/hooks.php

Include the following on your config/hooks.php file

```php
$hook['display_override'] = array(
		'class' => 'HulkTemplate',
		'function' => 'exec',
		'filename' => 'HulkTemplate.php',
		'filepath' => 'hooks'
	);
```
