<?php
namespace juju\message;

use Yii;

class Message
{
	public function show($title,$content,$url = '',$time = 3,$direct = '')
	{
		$data['title'] = $title;
        $data['content'] = $content;

        if($url == '')
        {
            $data['url'] = $url;
        }else{
            $data['url'] = $url;
        }
        $data['time'] = $time;
        
        echo \Yii::$app->view->renderFile('@app/views/'.$direct.'/message.php',['data' => $data]);
        exit();
	}
}