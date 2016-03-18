<?php


if(isset($_POST["submit-new"])){
    $GLOBALS["database"]->insert('todo', array('text' => $_POST['todo'], 'name' => $_POST['name'], 'datum' => date("Y-m-d H:i:s")));
}

if(isset($_GET["erledigt"])){
    $GLOBALS["database"]->update('todo', array('erledigt' => date("Y-m-d H:i:s")),array("id" => $_GET["erledigt"]));
}

if(isset($_GET["enterledigt"])){
    $GLOBALS["database"]->update('todo', array('erledigt' => "0000-00-00 00:00:00"),array("id" => $_GET["enterledigt"]));
}

if(isset($_GET["delete"])){
    $GLOBALS["database"] ->delete('todo', array('id' => $_GET["delete"]));
}


if(isset($_GET["showenterledigt"])){
    $datas = $GLOBALS["database"]->select("todo", "*",array('erledigt' => "0000-00-00 00:00:00"));
}
elseif(isset($_GET["showerledigt"])){
    $datas = $GLOBALS["database"]->select("todo", "*",array('erledigt[!]' => "0000-00-00 00:00:00"));
}
else{
    $datas = $GLOBALS["database"]->select("todo", "*");
}


foreach($datas as $data){
    echo '<div class="card blue-grey darken-1">';
        echo'<div class="card-content white-text">';
            echo'<span class="card-title">'.$data["name"].'</span>';
            if($data["erledigt"] == "0000-00-00 00:00:00"){
                echo '<a href="?page=todo&erledigt='.$data["id"].'"><i class="material-icons red-text">done</i></a>';
            }
            else{
                echo '<a href="?page=todo&enterledigt='.$data["id"].'"><i class="material-icons green-text">done</i></a>';
            }
            echo'<p>'.$data["text"].'</p>';
        echo'</div>';
        echo'<div class="card-action">';
            echo'<a href="?page=todo&delete='.$data["id"].'">löschen</a>';
            echo'<a href="?page=todo&edit='.$data["id"].'">bearbeiten</a>';
        echo'</div>';
    echo'</div>';
}
echo "<a href='?page=todo&new' class='waves-effect waves-light btn'>neu</a>";


if(isset($_GET["edit"])){
    if(isset($_POST["submit-edit"])){
        $GLOBALS["database"] -> update('todo', array('text' => $_POST["text"]), array("id" => $_GET["edit"]));
    }
    $inhalt_textarea = $GLOBALS["database"] -> get('todo', 'text', array('id' => $_GET["edit"]));
    echo"<form method='post' action=''>";
    echo"<textarea name='text'>".$inhalt_textarea."</textarea>";
    echo"<input type='submit' name='submit-edit' class='waves-effect waves-light btn' value='speichern'>";
    echo "</form>";
}


if(isset($_GET["new"])){
    echo '<form method="post" action="">';
    echo '<textarea name="todo">';
    echo '</textarea>';
    echo '<input type="text" name="name" value="Name">';
    echo '<input type="submit" name="submit-new" class="waves-effect waves-light btn" value="senden">';
    echo '<form>';
}
 ?>
