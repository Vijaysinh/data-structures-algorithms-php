<!-- Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
You may assume that each input would have exactly one solution, and you may not use the same element twice.
You can return the answer in any order.

Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Output: Because nums[0] + nums[1] == 9, we return [0, 1].
Example 2:

Input: nums = [3,2,4], target = 6
Output: [1,2]
Example 3:

Input: nums = [3,3], target = 6
Output: [0,1] -->

<?php
$arr = [1,2,3,4,5,6,7];
$target = 5;

$hash = [];
$sums = [];
for($i=0;$i<count($arr);$i++){
    $diff = $target - $arr[$i];

    if(isset($hash[$diff])){
        $sums[] = [$arr[$i],$diff];
        //      sums.push([arr[i], sumMinusElement]);
    }

        // add the current number to the hash table
        //hashTable[arr[i].toString()] = arr[i];
    $hash[$arr[$i]] = $arr[$i];
    
}

echo "<pre>";
print_r($sums);
print_r($hash);

?>