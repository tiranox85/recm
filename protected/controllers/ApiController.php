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

    public function actionAp1Ind61($anio, $trim_inicio, $trim_fin, $entidad, $grafico){

    $this->layout=false;

    $anio_pasado=$anio-1;
    
    
 
    

            $result = Ap1Ind61::model()->findAll((array(
            'condition'=>'anio in('.$anio.', '.$anio_pasado.') and  (mes between '.$trim_inicio.' and '.$trim_fin.') and entidad in ('.$entidad.')',
            'order'=>'id'
             )));
            
            
            
            if($grafico==0){

                foreach ($result as $res) {

                        if(!isset($json["periodos"][$res["entidad"]][$res["anio"]][$res["mes"]]))
                        {
                            $json["periodos"][$res["entidad"]][$res["anio"]][$res["mes"]] = array(

                               "valor"=> $res["valor"],

                            );
                        }else{
                            $json["periodos"][$res["entidad"]][$res["anio"]][$res["mes"]] = array(

                               "valor"=> 0,

                            );

                        }


                }  
             
            }else{
                
                //aqui va la consulta del grafico
            }
            

            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
                
    public function actionAp1Ind62($anio, $grafico){

    $this->layout=false;



            $result = Ap1Ind62::model()->findAll((array(
            'condition'=>'anio ='.$anio,
            'order'=>'entidad'
             )));

            foreach ($result as $res) {

                    if(!isset($json["meses"][$res["rubro"]][$res["mes"]]))
                    {
                        $json["meses"][$res["rubro"]][$res["mes"]] = array(

                           "valor"=> $res["valor"],

                        );
                    }else{
                        $json["meses"][$res["rubro"]][$res["mes"]] = array(

                           "valor"=> 0,

                        );
                        
                    }


            }  

            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    public function actionAp1Ind71($anio, $trim_inicio, $trim_fin, $entidad, $grafico){

    $this->layout=false;

    $anio_pasado=$anio-1;
    
    
 
    

            $result = Ap1Ind71::model()->findAll((array(
            'condition'=>'anio in('.$anio.', '.$anio_pasado.') and  (mes between '.$trim_inicio.' and '.$trim_fin.') and entidad in ('.$entidad.')',
            'order'=>'entidad'
             )));
            
            
            
            if($grafico==0){

                foreach ($result as $res) {

                        if(!isset($json["periodos"][$res["entidad"]][$res["anio"]][$res["mes"]]))
                        {
                            $json["periodos"][$res["entidad"]][$res["anio"]][$res["mes"]] = array(

                               "valor"=> $res["valor"],

                            );
                        }else{
                            $json["periodos"][$res["entidad"]][$res["anio"]][$res["mes"]] = array(

                               "valor"=> 0,

                            );

                        }


                }  
             
            }else{
                
                //aqui va la consulta del grafico
            }
            

            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp1Ind72($anio, $trim_inicio, $trim_fin, $grafico){

    $this->layout=false;

    $anio_pasado=$anio-1;
    
    
 
    

            $result = Ap1Ind72::model()->findAll((array(
            'condition'=>'anio in('.$anio.') and  (mes between '.$trim_inicio.' and '.$trim_fin.')',
            'order'=>'rubro'
             )));
            
            
            
            if($grafico==0){

                foreach ($result as $res) {

                        if(!isset($json["periodos"][$res["rubro"]][$res["anio"]][$res["mes"]]))
                        {
                            $json["periodos"][$res["rubro"]][$res["anio"]][$res["mes"]] = array(

                               "valor"=> $res["valor"],

                            );
                        }else{
                            $json["periodos"][$res["rubro"]][$res["anio"]][$res["mes"]] = array(

                               "valor"=> 0,

                            );

                        }


                }  
             
            }else{
                
                //aqui va la consulta del grafico
            }
            

            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    


}