<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


$test = new TestController();
$test->getJson();


class TestController
{
    protected $customerFields = [
        //enterprise
        '/x/api/enterprise/' => [
            'detail' => [
                'type' => '2',
                'params' => [
                    'id' => 10,
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ'
                ],
                'paramsForOnline' => [
                    'id' => 10,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    '*' => [
                        'id',
                        'name',
                        'full_name',
                        'remark_name',
                        'logo',
                        'website',
                        'industry',
                        'brief',
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
                        'address3',
                        'telephone',
                        'email',
                        'weixin',
                        'com_products' => [
                            '*' => [
                                'id',
                                'name',
                                'is_main',
                                'desc',
                                'url',
                            ]
                        ]
                    ],
                ]

            ],
            'member-list' => [
                'type' => '2',
                'params' => [
                    'id' => 7,
//                'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ',
                    'token' => 'ScWu6rOieXRBJcNo2qEChygNqCwjyYgc'
                ],
                'paramsForOnline' => [
                    'id' => 7,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    '*' => [
                        'id',
                        'name',
                        'avatar',
                        'position',
                    ]
                ],
            ],
            'chart-list' => [
                'type' => '1',
                'params' => [
                    'id' => 1123,
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ'
                ],
                'paramsForOnline' => [
                    'id' => 1123,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    'com_news_index' => [
                        'x',
                        'y' => [
                            'type',
                            'list'
                        ]
                    ],
                    'com_search_index' => [
                        'x',
                        'y' => [
                            'type',
                            'list'
                        ]
                    ],
                    'com_weixin_index' => [
                        'x',
                        'y' => [
                            '*' => [
                                'type',
                                'weixin',
                            ]
                        ]
                    ],
                    'com_appstore_rank',
                    'com_alexa_rank',
                    'com_android_download',
                ],
            ],
            'finance-list' => [
                'type' => '2',
                'params' => [
                    'id' => 1123,
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ'
                ],
                'paramsForOnline' => [
                    'id' => 1123,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    '*' => [
                        'id',
                        'cid',
                        'phase',
                        'finance_date',
                        'finance_amount',
                    ]
                ],
            ],
            'news-list' => [
                'type' => '2',
                'params' => [
                    'id' => 1123,
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ'
                ],
                'paramsForOnline' => [
                    'id' => 1123,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    '*' => [
                        'id',
                        'cid',
                        'title',
                        'website',
                        'type'
                    ]
                ],
            ],
            'financeinfo' => [
                'type' => '1',
                'params' => [
                    'id' => 1123,
                    'token' => 'ScWu6rOieXRBJcNo2qEChygNqCwjyYgc'
                ],
                'paramsForOnline' => [
                    'id' => 1123,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    'funding',
                    'finance_phase',
                    'invest_amount_min',
                    'invest_amount_max',
                    'finance_amount_unit',
                ],
            ],
            'reg-info' => [
                'type' => '1',
                'params' => [
                    'id' => 1123,
                    'token' => 'ScWu6rOieXRBJcNo2qEChygNqCwjyYgc'
                ],
                'paramsForOnline' => [
                    'id' => 1123,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    'id',
                    'credit_number',
                    'org_number',
                    'reg_number',
                    'old_name',
                    'approved_time',
                    'reg_capital',
                    'reg_institute',
                    'reg_location',
                    'business_scope',
                    'change_info' => [
                        '*' => [
                            'change_date',
                            'change_item',
                            'after_content'
                        ]
                    ],
                    'employees' => [
                        '*' => [
                            'name',
                            'job_tittle'
                        ]
                    ],
                    'holder_name',
                ],
            ],
            'competition-list' => [
                'params' => [
                    'id' => 10,
                    'token' => 'ScWu6rOieXRBJcNo2qEChygNqCwjyYgc'
                ],
                'paramsForOnline' => [
                    'id' => 1123,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    '*' => [
                        'id',
                        'name',
                        'logo',
                        'full_name',
                        'finance_phase',
                        'address1',
                        'address3',
                    ]
                ],
            ],
            'business-info' => [
                'params' => [
                    'id' => 10,
                    'token' => 'ScWu6rOieXRBJcNo2qEChygNqCwjyYgc'
                ],
                'paramsForOnline' => [
                    'id' => 1123,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    'province',
                    'changerecords' => [
                        '*' => [
                            'change_item',
                            'after_content',
                        ]
                    ],
                    'id',
                    'partners' => [
                        '*' => [
                            'real_capi_items' => [
                                '*' => [
                                    'invest_type',
                                    'real_capi',
                                ]
                            ],
                            'name',
                            'identify_no',
                            'identify_type',
                            'should_capi_items' => [
                                '*' => [
                                    'invest_type',
                                    'shoud_capi'
                                ]
                            ]
                        ]
                    ],
                    'reg_no',
                    'oper_name',
                    'term_end',
                    'check_date',
                    'start_date',
                    'org_no',
                    'abnormal_items' => [
                        '*' => [
                            'department',
                            'in_date',
                            'out_reason',
                            'in_reason'
                        ]
                    ],
                    'status',
                    'end_date',
                    'domains',
                    'term_start',
                    'address',
                    'regist_capi',
                    'branches' => [
                        '*' => [
                            'name'
                        ]
                    ],
                    'name',
                    'credit_no',
                    'employees' => [
                        '*' => [
                            'name',
                        ]
                    ],
                    'econ_kind',
                    'belong_org',
                    'scope'
                ],
            ],
        ],
        //organization
        '/x/api/organization/' => [
            'detail' => [
                'type' => '1',
                'params' => [
                    'id' => 10,
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ'
                ],
                'paramsForOnline' => [
                    'id' => 10,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    'id',
                    'name',
                    'full_name',
                    'en_name',
                    'en_fullname',
                    'website',
                    'logo',
                    'intro',
                    'start_date',
                    'org_type',
                    'capital_type',
                    'manage_capital_currency',
                    'manage_fund_count',
                    'contact' => [
                        '*' => [
                            'id',
                            'org_id',
                            'address',
                            'phone',
                            'fax',
                            'email',
                            'address1',
                        ],
                    ],
                ],
            ],
            'member-list' => [
                'type' => '2',
                'params' => [
                    'id' => 10,
//                'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ',
                    'token' => 'ScWu6rOieXRBJcNo2qEChygNqCwjyYgc'
                ],
                'paramsForOnline' => [
                    'id' => 10,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    '*' => [
                        'id',
                        'org_id',
                        'name',
                        'position',
                        'intro'
                    ]
                ],
            ],
            'finance-list' => [
                'type' => '1',
                'params' => [
                    'id' => 10,
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ'
                ],
                'paramsForOnline' => [
                    'id' => 10,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    'cur_page',
                    'page_size',
                    'total',
                    'data' => [
                        '*' => [
                            'id',
                            'cid',
                            'cname',
                            'finance_amount',
                            'finance_amount_unit',
                            'invest_entity_others'
                        ]
                    ]
                ],
            ],
            'fund-list' => [
                'type' => '2',
                'params' => [
                    'id' => 10,
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ'
                ],
                'paramsForOnline' => [
                    'id' => 10,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    '*' => [
                        'id',
                        'org_id',
                        'start_date',
                        'intro',
                    ]
                ],
            ],
            'exit-finance-list' => [
                'params' => [
                    'id' => 10,
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ'
                ],
                'paramsForOnline' => [
                    'id' => 10,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    '*' => [
                        'id',
                        'org_id',
                        'cid',
                        'com_name',
                        'exit_date',
                        'return_rate'
                    ]
                ],
            ],
            'news-list' => [
                'params' => [
                    'id' => 11,
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ'
                ],
                'paramsForOnline' => [
                    'id' => 10,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    '*' => [
                        'id',
                        'org_id',
                        'type',
                        'title',
                        'website',
                        'publish_date'
                    ]
                ],
            ],
            'investment-analysis' => [
                'params' => [
                    'id' => 10,
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ'
                ],
                'paramsForOnline' => [
                    'id' => 10,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    'invest_industry' => [
                        '*' => [
                            'name',
                            'industry_id',
                            'value'
                        ]
                    ],
                    'invest_phase' => [
                        '*' => [
                            'name',
                            'value'
                        ]
                    ],
                    'invest_date' => [
                        '*' => [
                            'name',
                            'value' => [
                                'count',
                                'money'
                            ]
                        ]
                    ],
                    'invest_city' => [
                        '*' => [
                            'name',
                            'value'
                        ]
                    ]
                ],
            ],
            'lp-list' => [
                'params' => [
                    'id' => 11,
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ'
                ],
                'paramsForOnline' => [
                    'id' => 10,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    '*' => [
                        'id',
                        'name',
                        'invest_entity' => [
                            'id',
                            'name',
                        ],
                        'finance_date',
                        'invest_amount_unit'
                    ]
                ]
            ],
            'gp-list' => [
                'params' => [
                    'id' => 14,
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ'
                ],
                'paramsForOnline' => [
                    'id' => 10,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    '*' => [
                        'id',
                        'name',
                        'invested_count'
                    ]
                ]
            ]
        ],
        //industry
        '/x/api/industry/' => [
            'increase-cids' => [
                'type' => '0',
                'params' => [
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ',
                    'date' => '2015-09-07',
                    'industry' => '企业服务',
                ],
                'paramsForOnline' => [
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb',
                    'date' => '2015-09-07',
                    'industry' => '企业服务'
                ],
                'response' => [
                ],
            ],
            'hot-statics' => [
                'type' => '2',
                'params' => [
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ',
                    'industry' => '企业服务',
                    'id' => 1123,
                ],
                'paramsForOnline' => [
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb',
                    'industry' => '企业服务',
                    'id' => 1123,
                ],
                'response' => [
                    '*' => [
                        'industry',
                        'hot',
                        'num',
                    ]
                ],
            ],
            'research-statics' => [
                'type' => '1',
                'params' => [
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ',
                    'industry' => '企业服务',
                    'cur_page' => '1',
                    'page_size' => '3',
                ],
                'paramsForOnline' => [
                    'industry' => '企业服务',
                    'cur_page' => '1',
                    'page_size' => '3',
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    'total',
                    'cur_page',
                    'page_size',
                    'data' => [
                        '*' => [
                            'id',
                            'name',
                            'attach_link',
                            'attach_pages',
                        ]
                    ]
                ],
            ],
            'invest-statics' => [
                'params' => [
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ',
                    'industry' => '企业服务',
                    'date' => '2015-09-07',
                ],
                'paramsForOnline' => [
                    'industry' => '企业服务',
                    'date' => '2015-09-07',
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    'invest_amount',
                    'invest_amount_currency',
                    'industry'
                ],
            ],
            'chart-statics' => [
                'params' => [
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ',
                    'industry' => '企业服务',
                    'cur_page' => '1',
                    'page_size' => '3',
                    'id' => 1123
                ],
                'paramsForOnline' => [
                    'industry' => '企业服务',
                    'cur_page' => '1',
                    'page_size' => '3',
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb',
                    'id' => 1123
                ],
                'response' => [
                    'total',
                    'cur_page',
                    'page_size',
                    'data' => [
                        '*' => [
                            'id',
                            'name',
                            'attach_chart',
                            'research' => [
                                'id',
                                'name',
                                'attach_pages'
                            ]
                        ]
                    ]
                ]
            ],
            'report-statics' => [
                'params' => [
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ',
                    'industry' => '企业服务',
                    'cur_page' => '1',
                    'page_size' => '3',
                    'id' => 1123
                ],
                'paramsForOnline' => [
                    'industry' => '企业服务',
                    'cur_page' => '1',
                    'page_size' => '3',
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb',
                    'id' => 1123
                ],
                'response' => [
                    'total',
                    'cur_page',
                    'page_size',
                    'data' => [
                        '*' => [
                            'id',
                            'name',
                            'abstract',
                            'time'
                        ]
                    ]
                ]
            ],
            'all-cids' => [
                'params' => [
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ',
                    'industry' => '企业服务',
                    'id' => 1123
                ],
                'paramsForOnline' => [
                    'industry' => '企业服务',
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb',
                    'id' => 1123
                ],
                'response' => [
                ],
            ],
            'industry-map' => [
                'params' => [
                    'token' => '2p0iDwbFcen1sA587EfbZkIjPj2uFliJ',
                    'industry' => '企业服务',
                    'id' => 1123
                ],
                'paramsForOnline' => [
                    'industry' => '企业服务',
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb',
                    'id' => 1123
                ],
                'response' => [
                    'tag',
                    'data' => [
                        '*' => [
                            'virtual_tag',
                        ]
                    ]
                ],
            ]
        ],
        //investment
        '/x/api/investment/' => [
            'list' => [
                'type' => '2',
                'params' => [
                    'cid' => 10,
                    'token' => 'ScWu6rOieXRBJcNo2qEChygNqCwjyYgc'
                ],
                'paramsForOnline' => [
                    'cid' => 10,
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb'
                ],
                'response' => [
                    '*' => [
                        'id',
                        'cid',
                        'finance_date',
                        'expose_date',
                        'phase',
                        'finance_amount',
                        'finance_amount_unit',
                        'equity',
                        'report_source',
                        'cname',
                        'investor' => [
                            '*' => [
                                'entity_id',
                                'entity_name',
                                'is_leader',
                                'finance_amount',
                                'equity_sum',
                                'investor_funds'
                            ]
                        ],
                    ]
                ],
            ]
        ],
        //sync
        '/x/api/sync/' => [
            'new_objects' => [
                'type' => '1',
                'params' => [
                    'token' => 'ScWu6rOieXRBJcNo2qEChygNqCwjyYgc',
                    'type' => 'company',
                    'current' => 1,
                    'start_time' => '2019-03-21 10:00:00',
                    'end_time' => '2019-03-21 16:00:00'
                ],
                'paramsForOnline' => [
                    'token' => 'NcyJ1t1KCqF5w0BOvcvHpZ6e1MXFGYwb',
                    'type' => 'company',
                    'current' => 1,
                    'start_time' => '2019-03-21 10:00:00',
                    'end_time' => '2019-03-21 16:00:00'
                ],
                'response' => [
                    'count',
                    'list',
                ],
            ],
        ],
    ];
    //
    public function getJson()
    {
        $config = $this->customerFields;
        foreach ($config as $url => $urlarr) {
            foreach ($urlarr as $suburl => $value) {
                $devtoken = $value['params']['token'];
                $params = $value['response'];
                //$type = $value['type'];
//                if ($type == '2') {
//                    $params = [$params];
//                }
                $params = json_encode($params);
                $url = str_replace('/', '.', $url);
                $url = ltrim($url, '.');

                $update_url = $url.$suburl;

                $result = "{$update_url}  --  {$devtoken}\n{$params}\n\n";
                print_r($result);

                \Illuminate\Support\Facades\DB::connection('sale_interface')->table('sale_user_url')
                    ->where('su_id', '1')
                    ->where('url', $update_url)
                    ->update(['customer_fields' => $params]);
            }

        }
    }


}


