<?php



class ApiController extends Controller {

public function actionAp1Ind1(){

$this->layout=false;

$resultado = Ap1Ind1::model()->findAll((array(
  //  'condition'=>'id_periodo=2',
    'order'=>'actividad'
	)));


foreach ($resultado as $key => $row) {

	    $resultado2 = Delegaciones::model()->findAll((array(

		    'order'=>'id'
			)));


		foreach ($resultado2 as $key2 => $row2) {

			if( !isset($json["informe"][$row["actividad"]][$row2["id"]])): 
			$json["informe"][$row["actividad"]][$row2["id"]] = array(
			
			'valor'=> 0,
		
          	);
	   		 endif;

	   		 if($json["informe"][$row["actividad"]][$row["municipio"]]): 
			$json["informe"][$row["actividad"]][$row["municipio"]] = array(
			
			'valor'=> $row["valor"],
		
          	);
	    endif;	

		}


		}  


			header('Content-type: application/json');  
			echo json_encode($json);  
			Yii::app()->end(); 
		}


public function actionAp1Ind1Grafico($id){

$this->layout=false;

/*$resultado = Ap1Ind1::model()->findAll((array(
  //  'condition'=>'id_periodo=2',
    'order'=>'actividad'
	)));*/

/*
								429646,
								2619633,
								2803504,
								14099934,
								15729610,
								21356387,
								31126900,
								31703038,
								35333865,
								42745952,
								51309966,
								84259698,
								120794330,
								133136835,
								230580346,
								239283038
*/

$json = array(
									429646,
									2619633,
									2803504,
									14099934,
									15729610,
									21356387,
									31126900,
									31703038,
									35333865,
									42745952,
									51309966,
									84259698,
									120794330,
									133136835,
									230580346,
									239283038
	); 
/*foreach ($resultado as $key => $row) {

	    $resultado2 = Delegaciones::model()->findAll((array(

		    'order'=>'id'
			)));


		foreach ($resultado2 as $key2 => $row2) {

			if( !isset($json["informe"][$row["actividad"]][$row2["id"]])): 
			$json["informe"][$row["actividad"]][$row2["id"]] = array(
			
			'valor'=> 0,
		
          	);
	   		 endif;

	   		 if($json["informe"][$row["actividad"]][$row["municipio"]]): 
			$json["informe"][$row["actividad"]][$row["municipio"]] = array(
			
			'valor'=> $row["valor"],
		
          	);
	    endif;	

		}


		} */ 


			header('Content-type: application/json');  
			echo json_encode($json, JSON_NUMERIC_CHECK);
			Yii::app()->end(); 
		}


	}