This code uses an undefined variable `$undefinedVar` inside a function. This will cause a PHP notice or warning, depending on the error reporting level.
```php
<?php
function myFunction() {
  $result = $undefinedVar + 10;
  return $result;
}
$result = myFunction();
echo $result;
?>
```