## 公共信息提示

##安装

```
composer require "juju/message:dev-master"

"juju/message": "~dev-master"
```

##控制器顶部
```
use \juju\message\Message;
```

##控制器调用
```
(new Message())->show('标题','正文','跳转URL','时间','视图目录','视图文件名称');
(new Message())->show('权限错误','用户身份验证失败，请重新登陆','/user/login.html',3,'site','message.php');
视图目录默认site
视图文件名称默认message.php
```
