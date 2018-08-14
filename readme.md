[![Build Status](https://travis-ci.org/harden13/laravel-package-demo.svg?branch=master)](https://travis-ci.org/harden13/laravel-package-demo)

#### 开发laravel扩展

##### 用法
`composer require fangapp/hasher`

或者在你的composer.json文件中添加

`"fangapp/hasher":"~1.0"`

下载完毕后，直接配置app.php的provider数组

`\Fangapp\Hasher\MD5HasherProvider::class,`