<?php
if(!$isMe)die();

$issue=file_get_contents(__DIR__."/tickets/{$argv[1]}.txt");
if(false!=$issue){
preg_match_all('/Creator: (\w*)/', $issue, $creator);

$creator=$creator[1][0];

$CoolQ->sendPrivateMsg($creator, '�������� Ticket #'.$argv[1].' �Ѿ������'."\n".'���������Ȼ���ڣ������´���������Ticket�ļ�');
$CoolQ->sendPrivateMsg($creator, $issue, true);

$message=$creator.' ������ Ticket #'.$argv[1].' �Ѿ������';

unlink(__DIR__."/tickets/{$argv[1]}.txt");
}else $message='Ticket ������';

?>