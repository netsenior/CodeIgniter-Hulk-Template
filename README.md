# Codeigniter Hulk Template

Using Code Igniter's Hooks feature to create a template engine.

Steps:

### 1. Enable system hooks

Enable system hooks on your application/config/config.php file.

```php
$config['enable_hooks'] = TRUE;
```

### 2. Define a hook

Define a hook including the following code snippet to your application/config/hooks.php file:

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

### 4. Customize files

- Customize your template in application/views/template.php file

- Customize specific title and content for each page in its controller, see below:

```php
$this->title = 'About Us';
$this->load->view('aboutus');
```

### Done!

The title and content will be inserted into your template file before the page is displayed to the user.
