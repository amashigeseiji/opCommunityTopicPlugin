<?php

class opCommunityTopicPluginUtil
{
  public static function sendNewCommentNotification($fromMember, $toMember, $topicId){
    $rootPath = sfContext::getInstance()->getRequest()->getRelativeUrlRoot();
    $url = $rootPath.'/communityTopic/'.$topicId;

    $message = '1 件のトピックに新着コメントがあります';

    opNotificationCenter::notify($fromMember, $toMember, $message, array('category'=>'other', 'url'=>$url, 'icon_url'=>null));
  }
}
