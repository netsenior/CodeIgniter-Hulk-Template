# Codeigniter Hulk Template

Using Code Igniter's Hooks feature to create a template engine.

Steps:

### 1. config/config.php

Enable system hooks on your config/config.php file

```php
$config['enable_hooks'] = TRUE;
```

### 2. config/hooks.php

Include the following on your config/hooks.php file

```php
$hook['display_override'] = array(
		'class' => 'HulkTemplate',
		'function' => 'exec',
		'filename' => 'HulkTemplate.php',
		'filepath' => 'hooks'
	);
```

### 3. views/template.php

Download, customize and upload the file template.php to your Views folder

### Done!
