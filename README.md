# PHP Foreach Loop Unset() Gotcha

This repository demonstrates a subtle but potentially problematic behavior in PHP when using `unset()` within a `foreach` loop to modify an array during iteration.  The unexpected behavior stems from the way PHP's internal array pointer interacts with array modification.

## The Problem

The `bug.php` file contains a function that aims to remove all instances of the value 'a' from an array. However, due to the nature of `unset()` within a `foreach`, the array index is not always correctly incremented resulting in skipping elements.

## The Solution

The `bugSolution.php` file offers two approaches:

1. **Iterating over a copy:** A simple solution is to iterate over a copy of the array to prevent unintended side effects.
2. **Using `array_filter`:** A more functional approach is to leverage the `array_filter` function, which provides a cleaner and more expressive way to remove elements that meet certain criteria.

This example highlights the importance of understanding the inner workings of PHP's array manipulation and iteration functions to avoid this type of uncommon error.