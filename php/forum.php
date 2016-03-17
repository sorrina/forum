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
    return $GLOBALS["database"]->select("post", array("[>]user" => ["autor" => "iduser"]), "*", $where);
}

function createPost($inhalt){
    $threadID = @$_GET["thread"];
    $autor = @$_SESSION["user"];
    $datum = date("Y-m-d H:i:s");
    return $GLOBALS["database"]->insert("post", array("threadid" => $threadID, "autor" => $autor, "inhalt" => $inhalt, "datum" => $datum));
}


if(isset($_POST["submit_post"])){
    createPost($_POST["post"]);
}

function deletePost($id){
    $GLOBALS["database"]->delete("post", array("idpost" => $id));
}


if(isset($_GET["delete"]) and $_GET["page"] == "post"){
    deletePost($_GET["delete"]);
}
