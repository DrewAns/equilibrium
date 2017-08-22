<?php

/**
  * getEquilibriums takes an array of numbers and finds the index(es) where the array is in a state of equilibrium.
  *
  * getEquilibriums completes its job it two basic steps.  In the first step, it assigns $left 0 and $right
	* the sum of all items in the array.  Then it loops through all items in the array.  For each item, it subtracts the
	* items value from $right, checks to see if left and right are equal, then adds the items value to $left.  This way, $left is
	* always equal to the value of the sum of items to the left of the current index and $right is equal to the value of the sum
	* of items to the right of the current index at the point of comparison.  If $left and $right are equal, $arr is in a state of
	* equilibrium at the current index, so it adds that index to $output.
  *
  * @param array $arr An array of numbers,
  *
  * @return array $output, an array of indexes where $arr is in a state of equilibrium
  */
function getEquilibriums($arr) {
	$output = array();
	$left = 0;
	$right = array_sum($arr);

	for ($i = 0; $i < count($arr); $i++) {
		$right -= $arr[$i];
		if ($left == $right) {
			// if array is in equilibrium at index $i, push $i into $output
			array_push($output, $i);
		}
		$left += $arr[$i];
	}
	return $output;
}
