<?php

function findMaxIndex(array $array) : int
{
    $max = $array[0];
    $maxIndex = 0;
    
    for($i = 1; $i < count($array); $i++) {
        if($array[$i] > $max) {
            $max = $array[$i];
            $maxIndex = $i;
        }
    }
    
    return $maxIndex;
}


function findMaxIndex2(array $array) : int
{
    return array_keys($array, max($array))[0];
}


function findMaxIndex3(array $array) : int
{
    return array_search(max($array), $array);
}


function findMaxIndex4(array $array) : int
{
    arsort($array);
    reset($array);
    return key($array);
}



function findMaxIndex5(array $array) : int
{
  if(array_is_list($array)) {
    return count($array) -1;
  }

  $indices = array_keys($array);
  return max($indices);
}


function max(array $array) : mixed {
    if(!array_is_list($array)) {
        return array_values($array);
    }
    $max = 0;
    for ($i = 0; $i < count($array); $i++) {
        if($array[$i] > $max) {
            $max = $array[$i];
        }
    }
    return $max;
}