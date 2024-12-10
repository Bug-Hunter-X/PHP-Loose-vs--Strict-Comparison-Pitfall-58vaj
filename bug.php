In PHP, a common yet subtle error arises when dealing with string comparisons involving loosely typed variables.  Consider the following:

```php
$a = "10";
$b = 10;

if ($a == $b) {
  echo "Equal";
} else {
  echo "Not equal";
}
```

This code will output "Equal", due to PHP's type juggling. The `==` operator performs a loose comparison, converting types implicitly. However, if you need a strict comparison (checking both value and type), you should use the `===` operator:

```php
$a = "10";
$b = 10;

if ($a === $b) {
  echo "Equal";
} else {
  echo "Not equal";
}
```

Now it outputs "Not equal".  This distinction is crucial in preventing unexpected behavior, especially when comparing data from user input or external sources where data types are less predictable.