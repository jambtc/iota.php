<h2 align="center">iota.php</h2>

<p align="center">
  <a href="https://discord.iota.org/" style="text-decoration:none;"><img src="https://img.shields.io/badge/Discord-9cf.svg?logo=discord" alt="Discord"></a>
    <img src="https://img.shields.io/badge/license-Apache--2.0-green" alt="Apache-2.0 license">
</p>

# Examples (Basics)

### Include and create a client
```php
<?php
  // include iota lib
  require_once("../iota.php");
  // create client
  $client = new iota('https://api.lb-0.testnet.chrysalis2.com');
```

## Basics
Each methode with "echo" will return a json string
```php
  echo $client->info();
```
Each method returns an Object to get the direct parameter
```php
  $info = $client->info();

  echo $info->name;
```
Short example
```php
  echo ($client->info())->name;
```

To work with an Array, you can call __toArray()
```php
  $info = $client->info();
  $info->__toArray();
```

<hr>

## Additional Examples
Please find other examples in the [examples](../examples) folder.


<hr>

Back to [Overview](000_index.md)