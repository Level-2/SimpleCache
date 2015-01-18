<?php 
namespace SimpleCache;
class SimpleCache implements \ArrayAccess {
	private $dir;
	
	public function __construct($dir) {
		$this->dir = rtrim(realpath($dir), \DIRECTORY_SEPARATOR);
	}
	
	public function offsetSet($key, $value) {
		file_put_contents($this->dir . \DIRECTORY_SEPARATOR . $key, serialize($value));
	}

	public function offsetGet($key) {
		if ($this->offsetExists($key)) return unserialize(file_get_contents($this->dir . \DIRECTORY_SEPARATOR . $key));
		else return null;
	}
	
	public function offsetExists($key) {
		return is_file($this->dir . \DIRECTORY_SEPARATOR . $key);
	}
	
	public function offsetUnset($key) {
		unlink($this->dir . \DIRECTORY_SEPARATOR . $key);
	}
}
