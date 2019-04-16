<?php

$fields = [
    [
        'id',
        'name',
        'address' => [
            [
                'a1' => [
                    [
                        'va',
                        'vb',
                        'vc'
                    ]

                ],
                'a2',
                'a5',
                'a3' => [
                    '3a',
                    '3c'
                ],
                'id' => [
                    [
                        '4a',
                        '4b'
                    ]
                ]
            ]
        ],
        'gender'
    ]
];

$datas = [
    [
        'id' => 1,
        'name' => 'tutu',
        'address' => [
            [
                'a1' => [
                    [
                        'va' => 'valuea',
                        'vb' => 'valueb',
                        'vc' => 'valuec'
                    ],
                ],
                'a2' => 2,
                'a3' => [
                    '3a' => 'valuea',
                    '3b' => 'valueb',
                    '3c' => 'valuec'

                ],
                'a4' => 4,
                'a5' => 5,
                'id' => [
                    [
                        '4a' => 'valuea',
                        '4b' => 'valueb',
                        '4c' => 'valuec'
                    ],
                    [
                        '4a' => 'value_a',
                        '4b' => 'value_b',
                        '4c' => 'value_c'
                    ],
                ]
            ]
        ],
        'gender' => 'man',
        'lalala' => 'lalala',
    ],
    [
        'id' => 2,
    ]
];

$detail = [
    [
        'id',
        'name',
        'full_name',
        'remark_name',
        'logo',
        'website',
        'industry',
        'address',
        'com_products' => [
            [
                'id',
                'name',
                'url'
            ]
        ]
    ]

];


$chart_lists = [
    'com_news_index' => [
        'x'
    ],
    'com_weixin_index' => [
        'x',
        'y' => [
            [
                'type',
                'list'
            ]
        ]
    ],
    'com_appstore_rank'
];


print_r(json_encode($chart_lists));
die;


//$has_lists = ['a1', 'address'];
$has_lists = [
    'address.',
    'address.a1.',
    'address.id.',
];

$t1 = microtime(true);
$fields_has_value = setValue($fields);
//print_r($fields_has_value);
$res = newIntersectKey($datas, $fields_has_value);
print_r($res);
$t2 = microtime(true);
$time = round($t2 - $t1, 10);
echo "时间：{$time} s";


$tt1 = microtime(true);
$result = oldIntersectKey($fields, $datas);
print_r($result);
$tt2 = microtime(true);
$time = round($tt2 - $tt1, 10);
echo "时间：{$time} s";


function oldIntersectKey($fields, $datas) {
    $result = [];

    if (empty($arr2)) {
        return null;
    }
    foreach ($datas as $item => $sub) {
        //如果$item 不是字符串（是数字），$item2 = 0;
        if (!is_string($item)) {
            $item2 = 0;
        } else {
            $item2 = $item;
        }

        if (is_string($item2) && !in_array($item2, $fields) && !array_key_exists($item2, $fields)) {
            continue;
        }

        if (!is_array($sub) ) {
            $result[$item2] = $datas[$item];
        } else {
            // 子数组是一个数组
            $result[$item] = oldIntersectKey($fields[$item2], $datas[$item]);
        }
    }

    return $result;
}

function newIntersectKey($arr, $arr2)
{
    $result = [];
    $key = [];
    if (empty($arr2)) {
        return null;
    }
    if (count($arr) == count($arr, 1))
    {
        // $arr 是一个一维数组
        $result = array_intersect_key($arr, $arr2);
    } else {  // 多维数组
        foreach ($arr as $item => $sub) {
            //如果$item 不是字符串（是数字），$item2 = 0;
            if (!is_string($item)) {
                $item2 = 0;
            } else {
                $item2 = $item;
            }

//            if (is_null($arr2[$item2])) {
//
//                continue;
//            }
            if (!array_key_exists($item2, $arr2)) {
                continue;
            }

            echo "子数组\n". json_encode($sub). "\n\n";
            if (!is_array($sub) ) {
                $result[$item] = $arr[$item];
                echo "非数组\n". json_encode($result[$item]). "\n\n";
            } else {
                // 子数组是一个多维数组
                echo "多维数组， item:{$item}; item2: {$item2}\n". json_encode($arr[$item]). "\n\n";
                $result[$item] = newIntersectKey($arr[$item], $arr2[$item2]);
            }

        }
    }
    return $result;
}


function intersectKey($arr, $arr2)
{
    $result = [];
    $key = [];
//    if (empty($arr2)) {
//        return [];
//    }
    if (count($arr) == count($arr, 1))
    {
        // $arr 是一个一维数组
        $result = array_intersect_key($arr, $arr2);
    } else {  // 多维数组
        foreach ($arr as $item => $sub) {
            //如果$item 不是字符串（是数字），$item2 = 0;
            if (!is_string($item)) {
                $item2 = 0;
            } else {
                $item2 = $item;
            }

            if (is_null($arr2[$item2])) {

                continue;
            }

            echo "打印子数组：\n";
            print_r($sub);
            echo "\n\n";
            if (!is_array($sub) ) {
                $result[$item] = $arr[$item2];
            } else {
                if (count($sub) == count($sub, 1)) {
                    // 子节点是一个一维数组
                    echo "一维数组:". json_encode($sub). "\n";
                    $result[$item] = array_intersect_key($arr[$item], $arr2[$item2]);
                } else {
                    // 子数组是一个多维数组
                    echo "多维数组\n". json_encode($sub). "\n";
                    $result[$item] = intersectKey($arr[$item], $arr2[$item2]);
                }

            }

        }
    }
    return $result;
}

//$response = formatFieldSort($fields, $datas, 1, $has_lists);
//print_r($response);
function setValue($arr)
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


class processArray
{
    /**
     * 调整字段顺序
     */
    static public function formatFieldSort($fields = [], $datas = [], $is_list = 0, $has_lists = [], $listKey = '')
    {
        $result = [];
        if ($is_list == 0) {
//        $result = fieldSort( $fields, $datas, $has_lists);
            fieldSort( $result, $listKey, $fields, $datas, $has_lists);
            echo "\n----------\n";
            var_dump($result);
            echo "\n----------\n";
        } else {
            foreach ($datas as $tmp) {
//            $result = fieldSort( $fields, $tmp, $has_lists);
                fieldSort( $result, $listKey, $fields, $tmp, $has_lists);
            }
        }
        return ['result' => $result, 'listKey' => $listKey];
    }

    public function fieldSort(&$result, &$listKey,  $fields = [], $dataInfo = [], $has_lists=[])
    {
        $tmp = [];
        foreach ($fields as $item => $fieldKey) {
            $key = '';
//        if (!empty($has_lists)) {
//            foreach ($has_lists as $has_list) {
//                $is_list = $item == $has_list;
//            }
//        }

            if (is_string($item)) {
                echo "\n之前:{$listKey}\n";
                $key = $listKey. $item. '.';
                echo "之后:{$key}\n\n";
            }

//        if (!empty($has_lists) && in_array($item, $has_lists)) {
//            $is_list = 1;
//        }

            $is_list = 0;
            echo "\n\nis_list前面 :key:{$listKey}, is_list:{$is_list}, item:{$item}\n\n";
            if (in_array($key, $has_lists )) {
                echo "\nin_array:{$listKey}; item:{$item}; \n";
                $is_list = 1;
            }

            if (is_array($fieldKey)) {
                echo "\n\n调用:key:{$listKey}, is_list:{$is_list}, item:{$item}\n\n";
                $tmparray = formatFieldSort($fieldKey, $dataInfo[$item], $is_list, $has_lists, $key);
                $tmp[$item] = $tmparray['result'];
//            $listKey = '';
//            $key .= $tmparray['listKey'];
                $result = [];
            } elseif (!is_array($fieldKey)) {
                $tmp[$fieldKey] = $dataInfo[$fieldKey];
            }
        }

//    $listKey .= $key;
        array_push($result, $tmp);
    }

    /**
     * 调整字段顺序
     */
    protected function formatFieldSort1($fields = [], $datas = [], $is_list = 0, $has_lists = [])
    {
        $result = [];
        if ($is_list == 0) {
            $this->fieldSort( $result, $fields, $datas, $has_lists);
        } else {
            foreach ($datas as $tmp) {
                $this->fieldSort( $result, $fields, $tmp, $has_lists);
            }
        }
        return $result;
    }

    protected function fieldSort1(&$result,  $fields = [], $dataInfo = [], $has_lists=[])
    {
        $tmp = [];
        $is_list = 0;
        foreach ($fields as $item => $fieldKey) {
            if (!empty($has_lists) && in_array($item, $has_lists)) {
                $is_list = 1;
            }

            if (is_array($fieldKey)) {
                $tmp[$item] = $this->formatFieldSort($fieldKey, $dataInfo[$item], $is_list, $has_lists);
            } elseif (!is_array($fieldKey)) {
                //$tmp[$fieldKey] = $dataInfo[$fieldKey];
                $tmp[$fieldKey] = is_array($dataInfo) ? $dataInfo[$fieldKey] : $dataInfo->$fieldKey;
            }
        }
        array_push($result, $tmp);
    }
}
