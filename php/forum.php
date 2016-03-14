<?php

function getForen(){
    return $GLOBALS["database"]->select("forum", "*", array("ORDER" => "name"));
}

function getThreads($forumID = null){
    $where = array("ORDER" => "datum");
    if($forumID != null){
        // Threads eines Forums
        $where["forenid"] = $forumID;   // array("ORDER" => "datum", "forenid" => $forumID)
    }
    return $GLOBALS["database"]->select("thread", "*", $where);
}

function getPosts($threadid = null){
    $where = array("ORDER" => "datum");
    if($threadid != null){
        // Threads eines Forums
        $where["threadid"] = $threadid;   // array("ORDER" => "datum", "forenid" => $forumID)
    }
    return $GLOBALS["database"]->select("post", "*", $where);
}
