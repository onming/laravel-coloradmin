# laravel-coloradmin
采用laravel5.2框架结合了color-admin、权限管理用zizaco/entrust、数据模型用prettus/l5-repository、及调试DEBUG barryvdh/laravel-debugbar

# 安装&配置
> gitclone资源库
```
git clone https://github.com/onming/laravel-coloradmin.git
```

> composer安装依赖库
```
cd laravel-coloradmin
composer install
```

> 设置目录权限Windows请忽略
```
chown -R www:www laravel-coloradmin
chmod -R 775 laravel-coloradmin
```

> 使用artisan创建新的应用密钥
```
php artisan key:generate
```
> 设置.env环境配置
```
DB_HOST=127.0.0.1
DB_DATABASE=laravel-coloradmin
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=array
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
```

> 使用artisan执行数据库迁移
```
php artisan migrate
```

> 使用artisan执行数据库填充
```
php artisan db:seed
```

# DEMO
后台访问地址：http://laravel-coloradmin.onming.cn/admin
<br />账号：admin@onming.cn
<br />密码：admin

