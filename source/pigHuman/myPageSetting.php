<?php
//require_once dirname(__FILE__) . '/vendor/autoload.php';

function myPageSetting($id, $request,$FishyKink){
    $name = $request->input("userName");
    $profile = $request->input("profileText");
    if(empty($name)){ //userNameが空だったら
        return "変更できませんでした。";
    }else{ //空じゃなかったら変更
        $FishyKink["userDB"]->updateOne(["userID" => $id], ['$set'=> ["userName" => $name , "profile" => $profile]]);
        return "変更しました。";
    }
}

?>
