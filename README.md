# SimpleCache
A very simplistic file cache that uses the ArrayAcces interface

## Usage

1) Include SimpleCache.php in your project

```php
require_once 'SimpleCache\SimpleCache.php';
```

2) Instantiate the SimpleCache class and provide a cache directory

```php
$cache = new \SimpleCache\SimpleCache('./tmp');
```

3) Use the `$cache` object like any array. Index names will be created as files. When you run the script again the index will still have the value you assigned it.

