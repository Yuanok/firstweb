<?php

return [
    'alipay' =>[
       'app_id' =>'',
       'alipay_public_key' =>'',
       'private_key'  =>'',
       'log'   =>[
        'file'  =>storage_path('logs/alipay.log'),
      ],
    ],

    'wechat' =>[
        'app_id'  =>'',
        'mch_id'  =>'',
        'key'     =>'',
        'cart_client'  =>'',
        'cert_key'  =>'',
        'log'     =>[
            'file'  =>storage_path('logs/wechat_pag.log')
        ],
    ],
];