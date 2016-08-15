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
(new Message())->show('标题','正文','跳转URL','时间','视图目录');
```
