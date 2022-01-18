# json-response
return HTTP status

## Installation
composer require kurageneko8/json-response

### Usage
```php
<?php
require_once __DIR__ . "/vendor/autoload.php";

use Devscreencast\ResponseClass\JsonResponse;

$student = array(
	'name' => 'Jon D',
	'course' => 'Soft Engineer',
	'level' => '200',
	'collections' => ['books' => 'Intro to URL', 'music' => 'rap']
);

new JsonResponse('unauthorized', 'ok', $student);
```

### Param1 (Required)
1. Success - 200 http status
2. unauthorized - 401 http status
3. exception - 500 http status
### Param2 (Optional)
string

### Param3 (Oprtonal)
Array
