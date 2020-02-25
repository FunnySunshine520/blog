<?php

/**
 * 写一个函数，输入一个数组[4, 5, 10, 7, 6, 11, 20, 3]，数组里全部是各自不相同的正整数。返回最长的值连续的子序列。
[3, 4, 5, 6, 7] 长度为5
[10， 11] 长度为2
[20] 长度为1
返回最长的[3, 4, 5, 6, 7]
 */
$arr = [4, 5, 10, 6, 7, 11, 20, 3];
sort($arr);
$arr1 = $arr;
var_dump($arr1);

$sons = [];
$tmp = 0;
$sons[$tmp][] = $arr1[0];
for ($i=1; $i < count($arr1); $i++) {
    $len = count($sons[$tmp]);
    $a = $sons[$tmp][$len-1];
    if ($a + 1 == $arr1[$i]) {
        $sons[$tmp][] = $arr1[$i];
    } else {
        $tmp += 1;
        $sons[$tmp][] = $arr1[$i];
    }
}
var_dump($sons);

var_dump('end');
die;
//$config = config('customerFields');
//print_r($config);
//
//
//
//die;
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
    '*' => [
        'id',
        'name',
        'full_name',
        'remark_name',
        'logo',
        'website',
        'industry',
        'com_main_tags',
        'com_tags',
        'com_operation_tags',
        'finance_phase',
        'operation_status',
        'scale',
        'start_date',
        'address',
        'address1',
        'address2',
        'telephone',
        'email',
        'com_products' => [
            '*' => [
                'id',
                'name',
                'is_main',
                'android',
                'weixin'
            ]
        ]
    ],
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

$rsp = '{"code":0,"data":{"user":{"id":527,"name":"\u90b5\u6653\u521a","email":"shaoxiaogang@jingdata.com","password":"","last_login":"2019-05-08 14:38:03","permissions":[],"activated":true,"created_at":"2019-03-05 15:03:34","updated_at":"2019-05-08 14:38:03","roles":[{"id":1,"name":"admin","desc":"\u8d85\u7ea7\u7528\u6237","permissions":["super"],"created_at":"2018-05-15 13:44:12","updated_at":"2018-05-15 19:18:41","pivot":{"user_id":527,"role_id":1}}]},"permissions":["super","super"],"dict":{"urls":{"enterprise":{"x.api.enterprise.detail":"\u4f01\u4e1a\u57fa\u672c\u4fe1\u606f","x.api.enterprise.member-list":"\u4f01\u4e1a\u6210\u5458\u4fe1\u606f","x.api.enterprise.chart-list":"\u4f01\u4e1a\u8d8b\u52bf\u56fe\u8868","x.api.enterprise.finance-list":"\u4f01\u4e1a\u878d\u8d44\u4e8b\u4ef6","x.api.enterprise.competition-list":"\u4f01\u4e1a\u7ade\u54c1\u4fe1\u606f","x.api.enterprise.news-list":"\u4f01\u4e1a\u65b0\u95fb\u62a5\u9053","x.api.enterprise.business-info":"\u4f01\u4e1a\u5de5\u5546\u4fe1\u606f","x.api.enterprise.suggest":"\u4f01\u4e1a\u641c\u7d22\u63a5\u53e3","x.api.enterprise.reg-info":"\u4f01\u4e1a\u5de5\u5546\u4fe1\u606f--\u5929\u773c\u67e5\u6570\u636e","x.api.enterprise.financeinfo":"\u4f01\u4e1a\u878d\u8d44\u4fe1\u606f"},"organization":{"x.api.organization.detail":"\u673a\u6784\u57fa\u672c\u8be6\u60c5","x.api.organization.mebmer-list":"\u673a\u6784\u6210\u5458\u4fe1\u606f","x.api.organization.finance-list":"\u673a\u6784\u6295\u8d44\u6848\u4f8b","x.api.organization.exit-finance-list":"\u673a\u6784\u9000\u51fa\u6848\u4f8b","x.api.organization.fund-list":"\u673a\u6784\u57fa\u91d1\u4fe1\u606f","x.api.organization.news-list":"\u673a\u6784\u65b0\u95fb\u62a5\u9053","x.api.organization.lp-list":"\u673a\u6784LP\u4fe1\u606f","x.api.organization.gp-list":"\u673a\u6784GP\u4fe1\u606f","x.api.organization.investment-analysis":"\u673a\u6784\u6295\u8d44\u5206\u6790"},"industry":{"x.api.industry.increase-cids":"\u884c\u4e1a\u65b0\u589e\u4f01\u4e1a","x.api.industry.industry-map":"\u884c\u4e1a\u56fe\u8c31\u6570\u636e","x.api.industry.hot-statics":"\u884c\u4e1a\u70ed\u5ea6\u6570\u636e","x.api.industry.invest-statics":"\u884c\u4e1a\u6295\u8d44\u6570\u989d","x.api.industry.research-statics":"\u884c\u4e1a\u7814\u7a76\u62a5\u544a","x.api.industry.chart-statics":"\u884c\u4e1a\u6570\u636e\u56fe\u8868","x.api.industry.report-statics":"\u884c\u4e1a\u76f8\u5173\u65b0\u95fb","x.api.industry.all-cids":"\u8d5b\u9053\u9879\u76ee\u5217\u8868"},"investment":{"x.api.investment.list":"\u6295\u8d44\u4e8b\u4ef6"},"sync":{"x.api.sync.new_objects":"\u6570\u636e\u540c\u6b65\u63a5\u53e3"}},"url-type":{"enterprise":"\u4f01\u4e1a","organization":"\u673a\u6784","industry":"\u884c\u4e1a","investment":"\u6295\u8d44\u4e8b\u4ef6","sync":"\u6570\u636e\u540c\u6b65"},"industry":[{"id":1,"parent_id":0,"name":"\u7535\u5546","industry_id":1,"tag_id":0,"expose":1},{"id":2,"parent_id":0,"name":"\u793e\u4ea4","industry_id":2,"tag_id":0,"expose":1},{"id":5,"parent_id":0,"name":"\u786c\u4ef6","industry_id":5,"tag_id":0,"expose":1},{"id":6,"parent_id":0,"name":"\u6587\u5a31\u4f20\u5a92","industry_id":6,"tag_id":0,"expose":1},{"id":7,"parent_id":0,"name":"\u5de5\u5177","industry_id":7,"tag_id":0,"expose":1},{"id":8,"parent_id":0,"name":"\u6d88\u8d39\u751f\u6d3b","industry_id":8,"tag_id":0,"expose":1},{"id":9,"parent_id":0,"name":"\u91d1\u878d","industry_id":9,"tag_id":0,"expose":1},{"id":10,"parent_id":0,"name":"\u533b\u7597\u5065\u5eb7","industry_id":10,"tag_id":0,"expose":1},{"id":11,"parent_id":0,"name":"\u4f01\u4e1a\u670d\u52a1","industry_id":11,"tag_id":0,"expose":1},{"id":12,"parent_id":0,"name":"\u65c5\u6e38","industry_id":12,"tag_id":0,"expose":1},{"id":13,"parent_id":0,"name":"\u623f\u4ea7\u5bb6\u5c45","industry_id":13,"tag_id":0,"expose":1},{"id":15,"parent_id":0,"name":"\u6559\u80b2","industry_id":15,"tag_id":0,"expose":1},{"id":16,"parent_id":0,"name":"\u6c7d\u8f66\u4ea4\u901a","industry_id":16,"tag_id":0,"expose":1},{"id":19,"parent_id":0,"name":"\u7269\u6d41","industry_id":19,"tag_id":0,"expose":1},{"id":20,"parent_id":0,"name":"\u751f\u4ea7\u5236\u9020","industry_id":20,"tag_id":0,"expose":0},{"id":21,"parent_id":0,"name":"\u4eba\u5de5\u667a\u80fd","industry_id":0,"tag_id":0,"expose":1},{"id":22,"parent_id":0,"name":"\u65e0\u4eba\u673a","industry_id":0,"tag_id":0,"expose":1},{"id":23,"parent_id":0,"name":"\u673a\u5668\u4eba","industry_id":0,"tag_id":0,"expose":1},{"id":24,"parent_id":0,"name":"VR\u00b7AR","industry_id":0,"tag_id":0,"expose":1},{"id":25,"parent_id":0,"name":"\u4f53\u80b2","industry_id":0,"tag_id":0,"expose":1},{"id":26,"parent_id":0,"name":"\u519c\u4e1a","industry_id":0,"tag_id":0,"expose":1},{"id":27,"parent_id":0,"name":"\u5149\u7535","industry_id":0,"tag_id":0,"expose":0},{"id":28,"parent_id":0,"name":"\u516c\u7528\u4e8b\u4e1a","industry_id":0,"tag_id":0,"expose":0},{"id":29,"parent_id":0,"name":"\u5316\u5de5","industry_id":0,"tag_id":0,"expose":0},{"id":30,"parent_id":0,"name":"\u80fd\u6e90\u77ff\u4ea7","industry_id":0,"tag_id":0,"expose":0},{"id":31,"parent_id":0,"name":"\u6750\u6599","industry_id":0,"tag_id":0,"expose":0},{"id":32,"parent_id":0,"name":"\u73af\u4fdd","industry_id":0,"tag_id":0,"expose":0},{"id":38,"parent_id":0,"name":"\u5730\u4ea7\u5efa\u7b51","industry_id":0,"tag_id":0,"expose":0}]}}}';
print_r(json_decode($rsp));

//print_r(json_encode($detail));
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
