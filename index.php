<?php
require './vendor/autoload.php';

use GuzzleHttp\Client;

#$client = new Client();
#$response = $client->get('weile.app/', ['proxy' => 'tcp://127.0.0.1:80']);
//try {
//    $client->get('weile.app/', ['proxy' => 'tcp://127.0.0.1:80']);
//}  catch (RequestException $e)
//{
//    echo $e->getRequest() . "\n";
//    if ($e->hasResponse()) {
//        echo $e->getResponse() . "\n";
//    }
//}
//exit;

#$recv = $GLOBALS['HTTP_RAW_POST_DATA'];
$recv = file_get_contents('php://input');
$req = new BaseReq();
$req->parseFromString($recv);
//$req->setReqCmdId(ReqCmdId::GetNearByFriendList);

switch($req->getReqCmdId()) {
    case ReqCmdId::GetFriendList:
        getFriendList($req->getReqData());
        break;
    case ReqCmdId::SetFriendNote:
        PbHandle::setFriendNoteName($req->getReqData());
        break;
    case ReqCmdId::AddFriend:
        PbHandle::addFriend($req->getReqData());
        break;
    case ReqCmdId::DelFriend:
        PbHandle::deleteFriend($req->getReqData());
        break;
    case ReqCmdId::SetFriendBlackList:
        PbHandle::setFriendBlackList($req->getReqData());
        break;
    case ReqCmdId::SearchFriend:
        PbHandle::searchFriend($req->getReqData());
        break;
    case ReqCmdId::CheckPhoneIsRegister:
        PbHandle::checkPhoneisRegister($req->getReqData());
        break;
    case ReqCmdId::SendValidateMsg:
        PbHandle::handleValidateMsg($req->getReqData());
        break;
    case ReqCmdId::GetNearByFriendList:
        PbHandle::getNearBy($req->getReqData());
        break;
    default:
        getFriendlist(' ');
//        PbHandle::setFriendNoteName(' ');
//        PbHandle::deleteFriend(' ');
//        $resp = new BaseResp();
//        $resp->setResultCode(1);
//        $resp->setResultMsg('未知请求');
//        echo $resp->serializeToString();
        break;
}

function getProductCategories() {

}

function getFriendlist($reqData) {
    $baseResp = new BaseResp();
    if ($reqData) {
        $req = new  GetFriendListReq();
        $req->parseFromString($reqData);
        $id = $req->getUid();
        $opts = array('http' => array('proxy' => 'tcp://127.0.0.1:80', 'request_fulluri' => true));

        $context = stream_context_create($opts);

        $user_json = file_get_contents('http://weile.app/'.$id, false, $context);
        $user_array = json_decode($user_json, true);
#        var_dump($user_array);

        $baseResp->setResultCode(ResultCode::SUCC);
        $resp = new GetFriendListResp();
        foreach($user_array as $user ) {
            $userInfo = getUserInfo($user);
            $resp->appendFriendList($userInfo);
        }
        $baseResp->setRespData($resp->serializeToString());
    } else {
        defaultResp($baseResp);
    }

    echo $baseResp->serializeToString();

}
function  defaultResp($baseResp) {
    $baseResp->setResultCode(1);
    $baseResp->setResultMsg('请求参数错误');
}
//获取基础用户信息
function getUserInfo($user) {
    $userInfo = new UserInfo();
    $userInfo->setPhone($user['phone']);
    $userInfo->setNickname($user['username']);
    $userInfo->setUid($user['id']);
#    $userInfo->setAge($user['age']);
#    $userInfo->setGender($user['gender']);
    $userInfo->setFaceUrl($user['photo']);
    return $userInfo;
}

