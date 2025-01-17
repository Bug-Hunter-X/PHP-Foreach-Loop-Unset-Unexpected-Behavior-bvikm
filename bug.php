function foo(array $arr): array {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'c', 'a'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c )

//Uncommon Bug:
//The problem is not immediately apparent, but in the foreach loop, when you unset an element, you are modifying the array while iterating over it.  This messes up the internal pointer of the foreach loop, potentially skipping elements.
//Solution: Iterate over a copy of the array or use a filter to avoid modifying the array during iteration.
