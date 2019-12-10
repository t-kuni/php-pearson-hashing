# PHP Pearson Hashing

Implementation of [Pearson Hashing](https://en.wikipedia.org/wiki/Pearson_hashing) algorithm for PHP.

# Installation

```
```

# Usage

```
$hasher = new PearsonHasher();
echo $hasher->hash(8, 'any message');
```

Output:

```
82eed2e9264c7400
```

### Description Of hash()

```
public function hash(int $length, string $data, bool $raw_output = false)
``` 

#### Parameters

* length
    * hash length in bytes.
* message
    * Message to be hashed.
* raw_output
    * When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits.


#### Return Values

Returns a string containing the calculated message digest as lowercase hexits unless raw_output is set to true in which case the raw binary representation of the message digest is returned.