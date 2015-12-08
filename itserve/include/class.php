<?PHP 


class mysql{

var $ttt;
static $ccc;
	//select all from table--
 function select_all($table){
	$query = mysql_query("SELECT * FROM $table");
	return $query;
	}


//select where --($table,$set,$target)
function select_where($table,$set,$target){
	$query = mysql_query("SELECT * FROM $table WHERE $set = '$target'");
	return $query;
	
	}	
	
	
//delete --($table,$set,$target)	
function delete($table,$set,$target){
	$query= mysql_query("DELETE * FROM $table WHERE $set = '$target'");
	}
	
	
//update --($table,$set,$target)	
function update($table,$set,$target){
	$query = mysql_query("UPDATE * FROM $table WHERE $set =' $target'");
	}
	
function insert(){
	$query = mysql_query("INSERT INTO $table VALUES = '',");
	}

function upload(){
	
	
	
	}	
	
	}
	
	
$itserve = new mysql();


?>