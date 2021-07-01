输入id获取name
<br>
<?php
    
    $id=$_GET['id'];
    $name=array("Volvo","BMW","Toyota","Kagome","InuYasha","Lihua");
    $phone=array("15977369948","18977695548","13317886549","13315964488","13655448899","18233654496");
    echo "id:".$id."   name:".$name[$id]."   phone:".$phone[$id];
?>