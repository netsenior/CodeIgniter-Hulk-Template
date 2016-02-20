# Codeigniter Hulk Template

Using Code Igniter's Hooks feature to create a template engine.

Steps:

### 1. application/config/config.php

Enable system hooks on your application/config/config.php file.

```php
$config['enable_hooks'] = TRUE;
```

### 2. application/config/hooks.php

Include the following code snippet to your application/config/hooks.php file:

```php
$hook['display_override'] = array(
		'class' => 'HulkTemplate',
		'function' => 'exec',
		'filename' => 'HulkTemplate.php',
		'filepath' => 'hooks'
	);
```

### 3. Upload provided files

Upload the provided files to your project:

- application/hooks/HulkTemplate.php
- application/views/template.php 

### 4. Customize your Controller files

In your Controller files customize the title as a global variable:

```php
$this->title = 'About Us';
```

And load the content as view as usual, 

```php
$this->load->view('aboutus');
```

### Done!
