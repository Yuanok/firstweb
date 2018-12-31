<?php

namespace App\Providers;

use Monolog\Logger;
use Yansongda\Pay\Pay;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**exit
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //往服务容器注入一个名为alipay的单例对象
        $this->app->singleton('alipay',function (){
            $config = config('pay.alipay');
            // 判断当前项目运行环境是否为线上环境
            if(app()->environment()!== 'production'){
                $config['mode']   ='dev';
                $config['log']['level'] = Logger::DEBUG;
            }
            else{
                $config['log']['level'] = Logger::WARNING;
            }
            // 调用 Yansongda\Pay 来创建一个支付宝支付对象
            return Pay::alipay($config);
        });

        $this->app->singleton('wechat_pay',function(){
            $config = config('pay.wechat');
            if(app()->environment()!== 'production'){
                $config['log']['level'] = Logger::DEBUG;
            }
            else{
                $config['log']['level'] = Logger::WARNING;
            }
            return Pay::wechat($config);
        });
    }
}
