<!DOCTYPE html>
<html>
<?php  
function gen(){ 
    for($i=1;$i<2;$i++){
        $r=rand(0,256);
        $g=rand(0,256);
        $b=rand(0,256); 
       echo "<div style='color:rgb($r,$g,$b);'>hello</div>"; 
    } 
} 
gen(); 
?>
</html>