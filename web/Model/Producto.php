<?php
class Producto
{
	function get(){
		$sql = "SELECT * FROM producto where id_subseccion=8 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function getById($id){
		$sql = "SELECT * FROM producto WHERE id_producto=$id ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get1(){
		$sql = "SELECT * FROM producto where id_subseccion=9 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get2(){
		$sql = "SELECT * FROM producto where id_seccion=19 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get3(){
		$sql = "SELECT * FROM producto where id_seccion=6 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get4(){
		$sql = "SELECT * FROM producto where id_seccion=7 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get5(){
		$sql = "SELECT * FROM producto where id_seccion=9 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get6(){
		$sql = "SELECT * FROM producto where id_seccion=16 and id_subseccion=10 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get7(){
		$sql = "SELECT * FROM producto where id_seccion=16 and id_subseccion=11 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get8(){
		$sql = "SELECT * FROM producto where id_seccion=18 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get9(){
		$sql = "SELECT * FROM producto where id_seccion=10 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get10(){
		$sql = "SELECT * FROM producto where id_seccion=3 and id_subseccion=5 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get11(){
		$sql = "SELECT * FROM producto where id_seccion=3 and id_subseccion=6 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get12(){
		$sql = "SELECT * FROM producto where id_seccion=2 and id_subseccion=3 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get13(){
		$sql = "SELECT * FROM producto where id_seccion=2 and id_subseccion=4 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get14(){
		$sql = "SELECT * FROM producto where id_seccion=8 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get15(){
		$sql = "SELECT * FROM producto where id_seccion=1 and id_subseccion=0 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get16(){
		$sql = "SELECT * FROM producto where id_seccion=1 and id_subseccion=1 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get17(){
		$sql = "SELECT * FROM producto where id_seccion=1 and id_subseccion=2 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get18(){
		$sql = "SELECT * FROM producto where id_seccion=15 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get19(){
		$sql = "SELECT * FROM producto where id_seccion=12 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get20(){
		$sql = "SELECT * FROM producto where id_seccion=13 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get21(){
		$sql = "SELECT * FROM producto where id_seccion=14 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get22(){
		$sql = "SELECT * FROM producto where id_seccion=4 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get23(){
		$sql = "SELECT * FROM producto where id_seccion=11 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	function get24(){
		$sql = "SELECT * FROM producto where id_seccion=17 ORDER BY nombre_producto";
		global $cnx;
		return $cnx->query($sql);
	}

	
//BOLIS Y MECHERO:
	function get25(){
		$sql = "SELECT * FROM producto WHERE id_producto=648";
		global $cnx;
		return $cnx->query($sql);
	}

	function get26(){
		$sql = "SELECT * FROM producto WHERE id_producto=653";
		global $cnx;
		return $cnx->query($sql);
	}

	function get27(){
		$sql = "SELECT * FROM producto WHERE id_producto=655";
		global $cnx;
		return $cnx->query($sql);
	}

	function get28(){
		$sql = "SELECT * FROM producto WHERE id_producto=654";
		global $cnx;
		return $cnx->query($sql);
	}

	function get29(){
		$sql = "SELECT * FROM producto WHERE id_producto=657";
		global $cnx;
		return $cnx->query($sql);
	}

	function get30(){
		$sql = "SELECT * FROM producto WHERE id_seccion=21 and id_subseccion=17";
		global $cnx;
		return $cnx->query($sql);
	}

	function get31(){
		$sql = "SELECT * FROM producto WHERE id_producto=649";
		global $cnx;
		return $cnx->query($sql);
	}

	function get32(){
		$sql = "SELECT * FROM producto WHERE id_producto=650";
		global $cnx;
		return $cnx->query($sql);
	}

	function get33(){
		$sql = "SELECT * FROM producto WHERE id_producto=651";
		global $cnx;
		return $cnx->query($sql);
	}

	function get34(){
		$sql = "SELECT * FROM producto WHERE id_producto=652";
		global $cnx;
		return $cnx->query($sql);
	}

	function get35(){
		$sql = "SELECT * FROM producto WHERE id_producto=656";
		global $cnx;
		return $cnx->query($sql);
	}

//MALETINES
	function get01(){
		$sql = "SELECT * FROM producto WHERE id_producto=666";
		global $cnx;
		return $cnx->query($sql);
	}

	function get02(){
		$sql = "SELECT * FROM producto WHERE id_producto=667";
		global $cnx;
		return $cnx->query($sql);
	}

	function get03(){
		$sql = "SELECT * FROM producto WHERE id_producto=671";
		global $cnx;
		return $cnx->query($sql);
	}

	function get04(){
		$sql = "SELECT * FROM producto WHERE id_producto=668";
		global $cnx;
		return $cnx->query($sql);
	}

	function get05(){
		$sql = "SELECT * FROM producto WHERE id_producto=672";
		global $cnx;
		return $cnx->query($sql);
	}

	function get06(){
		$sql = "SELECT * FROM producto WHERE id_producto=673";
		global $cnx;
		return $cnx->query($sql);
	}

	function get07(){
		$sql = "SELECT * FROM producto WHERE id_producto=670";
		global $cnx;
		return $cnx->query($sql);
	}
}

?>