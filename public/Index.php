<?php
/**
 * @Author ershy(郭然宁)
 * @Name Index.php
 * @Date: 2019/9/12
 * @Time: 18:31
 * @Description [文件内容描述]
 */
namespace erswoole;

require __DIR__ . '/../erswoole/base.php';

Container::get('app')->run()->send();
