<!DOCTYPE html>
<?php 
if(isset($_POST['b2'])   ){

$payer=htmlspecialchars(trim ($_POST['P']));
$methode= htmlspecialchars(trim($_POST['M']));
//$out_s=array("tn","ma","ly","dz","mr","ca","us");
$zone1=array("de","be","nl");
$zone2=array("es","gb",);
$zone3=array("sk","sl","se","pl","lv","lt","hi","ee","dk","cz","ch");
$zone4=array("gr","is","no","ma","ic","by","ea","pt-20","es","pt-30","pt");
$zone5=array("us","ca","au","cn","jp","hk","sg","kr","th","tw","vn","in","ru","il");
$zone6=array("bh","cy","eg","ir","iq","iq","il","jo","kw","lb","om","qa","sa","sy","tr","ae","ye","ar","bo","br","cl","co","ec","fk","gf","gy",
"py","pe","sr","uy","ve","ai","ag","aw","bs","bb","bz","bm","bq","vg","ky","cr","cu","cw","dm","do","sv","gl","gd","gp","gt","ht","hn","jm","mq","mx","pm","ms","cw","kn",
"ni","pa","pr","bq-sa","bq-se","sx","kn","lc","pm","vc","tt","tc","vi");//zone moyen-orient et AMERIQUE
$zone7=array("MF", "gp", "bl", "mq", "re", "gy", "yt", "pm");//zone _out mere1
$zone8=array("nc", "wf", "tf", "pf");//zone _out mere2

$zone_ex1=array("be","es","gb","it","im","nl");
$zone_ex2=array("at","dk","fi","gr","gr-9","ie","pt-20","pt-30","se");
$zone_ex3=array("ro","mt","hr","bg","lt","lv","ee","si","sk","cz","pl","hv","cy");
$zone_ex4=array("al","ad","ck","cc","ba","gg","je","mk","li","mv","no","sm","rs","ch","tr","va","gi");
$zone_ex5=array("us","ca","mx","pm");
$zone_ex6=array("za","bz","bd","kh","cn","kp","gp","gy","hk","in","id","jp","my","ma","mq","yt","ph","sg","lk","tw","th","tl","tn","vn");
$zone_ex7=array("by","ae","ru","ua");
$zone_ex8=array("ae","ao","ai","ag","sa","ar","am","aw","au","az","bs","bh","bb","bz","bj","bm","bt","mm","bo",
"bq","bw","br","bn","bf","bi","cm","es-cn","cv","ky","cf","cl","co","km","cg","cd","ck","kp","cr","ci","cu","cw","dj","dm",
"do","sv","ec","er","et","fk","fo","fj","ga","gm","gh","vc","gu","gt","gw","gq","gy","ht","hn","iq","tr","ax","il","jm","jo",
"kz","ke","kg","kw","ki","la","ls","lb","lr","ly","mo","mg","mw","mv","ml","mh","mu","mr","fm","mn","ms","mz","mp","na","nr","np",
"kn","ni","ne","ng","nu","nc","nz","om","ug","uz","pk","pa","pg","py","pe","pf","pr","rw","sb","ws","st","sn","sc","sl","so","ss",
"kn","bl","mf","sx","vc","lc","sr","sz","sy","tj","tz","td","tg","to","tt","tm","tc","tv","uy","vu","ve","vi","vg","wf","ye","zm",
"zw","us-mp","gn","pf","bq-se");

$fr="fr";
$payer=strtolower($payer);
if (strtolower($methode=="standard"))
{if ($payer==$fr)
	echo"votre code est <b>COLFS<b>";
  else if(in_array($payer,$zone1))
  
	 echo "votre code est <b>COLES<b>";
	else if(in_array($payer,$zone2))
		echo "votre code est <b>COLES<b>";
	else if(in_array($payer,$zone3))
		echo "votre code est <b>COLI<b>";
	else if(in_array($payer,$zone4))
		echo "votre code est <b>COLES<b>";
	else if(in_array($payer,$zone5))
		echo "votre code est <b>COLI<b>";
	else if(in_array($payer,$zone6))
		echo "votre code est <b>COLI<b>";
	else if(in_array($payer,$zone7))
		echo "votre code est <b>COLME<b>";
	else if(in_array($payer,$zone8))
		echo "votre code est <b>COLME<b>";
    else
	      echo"votre pays n'exist pas";
   
}else if (strtolower($methode=="expresse"))
{
  if ($payer==$fr)
	echo"votre code est <b>TNTF<b>";
 else if(in_array($payer,$zone_ex1))
  
		echo "votre code est <b>DHLI<b>";
	else if(in_array($payer,$zone_ex2))
		echo "votre code est <b>DHLI<b>";
	else if(in_array($payer,$zone_ex3))
		echo "votre code est <b>DHLI<b>";
	else if(in_array($payer,$zone_ex4))
		echo "votre code est <b>DHLI<b>";
	else if(in_array($payer,$zone_ex5))
		echo "votre code est <b>DHLI<b>";
	else if(in_array($payer,$zone_ex6))
		echo "votre code est <b>DHLI<b>";
	else if(in_array($payer,$zone_ex7))
		echo "votre code est <b>DHLI<b>";
	else if(in_array($payer,$zone_ex8))
		echo "votre code est <b>DHLI<b>";
	else
	      echo"votre pays n'exist pas";
	
   
}
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<form method="post" action="#" >	
	<input type="text" name="P"  placeholder="payer" /><br> 
	<input type="text" name="M"  placeholder="methode" /> <br>
	<input type="submit" value="done" name="b2" /> 
</form>	
</body>
</html>
