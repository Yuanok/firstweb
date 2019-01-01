<?php

return [
    'alipay' =>[
       'app_id' =>'2016092500592702',
       'alipay_public_key' =>'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuZVCtfiPfRST95OfViKkpyrcCKzoSjljMazjOU1bzXLEdUlv2quh29W3HoPGpY+AJVoIE2prtxo1MzxykYj9PelyzmJJW5UEswo70TdeLInKFlGmp2lW7c3KpWQJ6c+Pj142VC2a3TM/HQx7dxZJYUnPGcaCzXO9wZFVnsyMNL3h+g2GcYMziYnk3heSdB/LS/V9w5Fc8X/zw2q17rF6PZMp+k2dUTQNKs6LLvEm0MdZbFTAtgPqrtuGLpr73X93wi/PGAXRJkNXW5OjlzD7ifL/qsN7nOXoaUtnJWzyUb//coxok2nxk3D7FZ5Mhm+L4UOUToC5Ln9Iu/rwWUmJiQIDAQAB',
       'private_key'  =>'MIIEpAIBAAKCAQEAyWxOlhUg8t1GRuXTo6UqST+BD6aufIvh4VugrF7O9OZJTLMDBDNZetH6tfmkR7cWKHqP9WwOjNErYI7pEmMZmkLFsl1I3HDK45BsxvMQkstNuTzLVJkCM+j2N6Zdp0omKYG2OZ3KSg0NwXZrHq+cnEHxNZGurKkyuc8wlChUkSyq+2Y84okxKTzKLoRGgMfwF7TtzK5eC30naCFIh3ygaT6XWDUi/1DNlZSpKvZH1fbgQG9GvzH+8KKUKUfR2VMKcw53f3okGCE2iN8h8LUXBmX4B2jdypkY4sB1/HqC9CH2ak0g7RgZAE934S8YJQiHTFPLVO2AJuLIx/SDv7XwUQIDAQABAoIBAB/Sfq/zcpssHlhBIyithXrBD7DbUqHWr78c7MuOxv+mClqVxZo6Sp6+4e8yG6RA5r1Kb8gEZGAXA9VjfqsrAPaAKh+94S8CmutM/AKKkEnA2Oy1ECKzccelvJCaNh2h91mDZri/lyAP4+Z2wQG+GO4O9P7Tn1cj/CGi/DfMD2BH+HI4nKeTIskpNhyY5DDDwf6cWZldkvqLdpidl7zv+bajxfGq9NxRDbo5/VhjspqYxal7+J2sZzgQSzQQDUfi+Kp2+C7+/aL0s3o+wXNNTzoFZWCDI/S34vfVBDxDHmDLYY8Lidq+FhF2HZ1IA4T1uWu0lsd9SJoCqyatmU6vLokCgYEA8Q18eFU1DRmnV1wNtCTEiP1WA46rF/SPR0Y1djiu/Ftd99geVwUC2jAszAEufy5SVpQReLv101yCDNmtUTS7LK0inFJFzgjGa4SZP97SFeopxUCxaAZRSLH4k72VXvm8fMoNwkJcG19xYkKAsFKJ+rImFHIbaGb1vdCSGYpYsGcCgYEA1em7tWp40s7avsgBKL5rRwBNZ5qNn/xdKHmj0HcP778EqERISFx2vtlfK+Cea2LGZ39Ttu2zBlTkqdFgnQdJxZs0uopv6DvmeiS0waEsLS+z7jErKQZMqsOlanKJTAjKydKPW1jMSf1VYSTlePUHXdZPFLCUFLOIPG6Wru+thocCgYBDHzc+prNcD32qdMaYF/jmEG0IFo0L4ZyYAzPV1JjdSm/TGMnx/0I5EVsX/2g8H+DrnNV0ohokncjU3TRGvYE1Qoy1rK8lXQorXEP0Jg6n7YluFMKRrdiqfmwyb4MNbEsREI5ePm45bQ08iDofXwxu03aJEPES1ECvd0mHdR+XFwKBgQCO1F0IWgpIv+OhBUx41wQsSVBlv/WWgFv3fZjaxdT3QLUsYUNeRZboAZ4hXv6IN1DApGzSNM6XiLGRjgMTdl1Uuzgu4easyuouXjnvG92yYiqi/WOTJeilELNvawCvqyM0NQqRdK4bLTMIBSnPZNRBXKo651hIpkNuDm1AazqTGwKBgQCro5bEY+lPrsrTMebhqu8TsFp8KFY/GGPRM6INBIZPINBiTHrDU1v2AhUb0P5KdMi6FBbTDP9Dt2bOmczJL3I4eIqxj3rZBkdonWDo3snZceGcVB85KJk+xmRc8j3ujcHayqUN39DcSkGRu5eASKIsPp1QfZhBto5KXbInLVWYYQ==',
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