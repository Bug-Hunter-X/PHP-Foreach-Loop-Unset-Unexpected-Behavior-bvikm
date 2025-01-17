//Solution 1: Iterate over a copy
function fooSolution1(array $arr): array {
  $arrCopy = $arr;
  foreach ($arrCopy as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

//Solution 2: Use array_filter
function fooSolution2(array $arr): array {
  return array_filter($arr, fn($value) => $value !== 'a');
}

$arr = ['a', 'b', 'c', 'a'];
$result1 = fooSolution1($arr);
$result2 = fooSolution2($arr);
print_r($result1); // Output: Array ( [1] => b [2] => c )
print_r($result2); // Output: Array ( [1] => b [2] => c )