<?php
/**
 * 数组处理函数
 * @author tuhaixia
 */


function multi_array_flip_keys($arr)
{
    $result = [];
    if (count($arr) == count($arr, 1)) {
        $result = array_flip($arr);
    }
    else {
        foreach ($arr as $item => $sub) {
            if (!is_array($sub)) {
                $arr[$sub] = $item;
                unset($arr[$item]);
            } elseif (count($sub) == count($sub, 1)) {
                unset($arr[$item]);
                $arr[$item] = array_flip($sub);
            } else {
                unset($arr[$item]);
                $arr[$item] = setValue($sub);
            }
        }
        $result = $arr;
    }
    return $result;
}