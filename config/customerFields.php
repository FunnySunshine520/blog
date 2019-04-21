<?php
/**
 * 用于客户字段
 *
 * @author tuhaixia <tuhaixia@jingdata.com>
 */


return [
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
                'id',
                'name',
                'full_name',
                'remark_name',
                'logo',
                'website',
                'industry',
                'brief',
                'intro',
                'product_and_service',
                'market_and_customer',
                'business_model',
                'operation_data',
                'core_resource',
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
                'weibo',
                'com_products'
            ],
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
                'id',
                'name',
                'position',
                'intro',
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
                'com_news_index',
                'com_search_index',
                'com_weixin_index',
                'com_appstore_rank',
                'com_alexa_rank',
                'com_android_download',
                'com_hot_score',
                'com_hot_trend'
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
                'id',
                'cid',
                'phase',
                'finance_date',
                'finance_amount',
                'finance_amount_unit',
                'investor'
            ],
        ],
        'news-list' => [
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
                'title',
                'time',
                'url',
                'website'
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
                'reg_number',
                'reg_status',
                'domains',
                'company_org_type',
                'company_org_type',
                'from_time',
                'to_time',
                'reg_time',
                'approved_time',
                'reg_capital',
                'reg_institute',
                'reg_location',
                'business_scope',
                'change_info' => [
                    [
                        'change_date',
                        'before_content',
                        'after_content'
                    ]
                ],
                'employees',
                'holder_name',
            ],
        ]
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
                'full_name',
                'en_fullname',
                'website',
                'logo',
                'intro',
                'prefer_phase',
                'prefer_industry',
                'start_date',
                'org_type',
                'capital_type',
                'manage_capital_currency',
                'manage_fund_count',
                'contact' => [
                    [
                        'id',
                        'org_id',
                        'address',
                        'phone',
                        'fax',
                        'email',
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
                'id',
                'org_id',
                'name',
                'position',
                'intro'
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
                    [
                        'id',
                        'brief',
                        'logo',
                        'finance_phase',
                        'finance_date',
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
                'id',
                'fund_name',
                'start_date',
            ],
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
                'industry',
                'hot',
                'num',
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
                    [
                        'id',
                        'name',
                        'attach_link',
                        'abstract',
                        'time',
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
                'id',
                'finance_date',
                'expose_date',
                'phase',
                'valuation_unit',
                'source_info',
                'cname',
                'investor' => [
                    [
                        'entity_id',
                        'entity_name',
                        'finance_amount_unit',
                        'equity',
                        'investor_person',
                        'investor_funds'
                    ]
                ],
                'financial_advisor',
                'operator',
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
                'list',
            ],
        ],
    ],
];