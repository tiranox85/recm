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
            'order'=>'rubro'
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
    
    
    
    public function actionAp1Ind81($anios, $grafico){

    $this->layout=false;

            $result = Ap1Ind81::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'entidad ASC'
             )));
            
            
            
            $sql = "SELECT SUM(valor) as total from ap1Ind81"; 
            $total = Yii::app()->db->createCommand($sql)->queryRow();
            
            foreach ($result as $res) {
                
                if($grafico==0){
                if(!isset($json['informe'])){

                    $json['informe']=array(
                        'entidad'=>array(),
                        'gran_total'=>$total['total'],
                    );

                }

                if(!isset($json['informe']['entidad'][$res['entidad']])){

                    $json['informe']['entidad'][$res['entidad']]=array(
                        'anio'=>array(),
                        'total'=>0,
                        
                    );

                }
                
            
                if(!isset($json['informe']['entidad'][$res['entidad']][$res['anio']])){

                    $json['informe']['entidad'][$res['entidad']][$res['anio']]=array(
                        'valor'=>$res['valor'],
                        
                        
                    );
                    $json['informe']['entidad'][$res['entidad']]['total']=$json['informe']['entidad'][$res['entidad']]['total']+$json['informe']['entidad'][$res['entidad']][$res['anio']]['valor'];
                    
                }
                
            }else{
                
                //esta serie ya funciona en $json['data']
               /*if(!isset($json1['data'][$res['entidad']][$res['anio']])){
                    $json1[$res['entidad']][$res['anio']]=array(
                        'valor'=>$res['valor'],
                        
                        
                    );
                  
                    $json1['data'][$res['entidad']]=$json1['data'][$res['entidad']]['total']+$json1[$res['entidad']][$res['anio']]['valor'];
                    
                }
                
                */ 
               $json1 = array(
                                192154113,
                                181720414,
                                134201203,
                                129601044,
                                126480909,
                                98081909,
                                72003017,
                                71708241,
                                54916781,
                                45799876,
                                30539251,
                                28974574,
                                28908451,
                                23604278,
                                16686122,
                                14852416,
                                10138902,
                                8787403,
                                7123627,
                                7024982,
                                5878865,
                                5668922,
                                5644526,
                                5280296,
                                3395422,
                                1823910,
                                1241214,
                                865914,
                                393632,
                                319453,
                                218939,
                                36515


                                                                        ); 
            }
            
            
            
            }
            
             if($grafico==0){
                header('Content-type: application/json');  
                echo json_encode($json);  
                Yii::app()->end(); 
             }else{
                header('Content-type: application/json');  
                echo json_encode($json1);  
                Yii::app()->end(); 
             }
    }
    
    public function actionAp1Ind82($anios, $grafico){

    $this->layout=false;

            $result = Ap1Ind82::model()->findAll((array(
            'condition'=>'anio in('.$anios.') and id > 1',
            'order'=>'rubro ASC'
             )));
            //saco el total el >1 significa que no debe tomar el valor de la columna 1, porque es un total en si
            $sql = "SELECT SUM(valor) as total from ap1Ind82 where id > 1"; 
            $total = Yii::app()->db->createCommand($sql)->queryAll();
            
            foreach ($result as $res) {
                if(!isset($json['informe'])){

                    $json['informe']=array(
                        'rubro'=>array(),
                        'gran_total'=>$total[0]['total'],
                    );

                }

                if(!isset($json['informe']['rubro'][$res['rubro']])){

                    $json['informe']['rubro'][$res['rubro']]=array(
                        'anio'=>array(),
                        'total'=>  0,
                        
                    );

                }
                
                if(!isset($json['informe']['rubro'][$res['rubro']][$res['anio']])){

                    $json['informe']['rubro'][$res['rubro']][$res['anio']]=array(
                        'valores'=>array(),
                        
                    );

                }
                if(!isset($json['informe']['rubro'][$res['rubro']][$res['anio']][$res['valor']])){

                    $json['informe']['rubro'][$res['rubro']][$res['anio']][$res['valor']]=array(
                        'valores'=>$res['valor'],
                       
                        
                    );
                    $json['informe']['rubro'][$res['rubro']]['total']=$json['informe']['rubro'][$res['rubro']]['total']+$json['informe']['rubro'][$res['rubro']][$res['anio']][$res['valor']]['valores'];
                    
                }
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp1Ind83($anios, $grafico){

    $this->layout=false;

            $result = Ap1Ind83::model()->findAll((array(
            'condition'=>'anio in('.$anios.') ',
            'order'=>'rubro ASC'
             )));
            
            $sql = "SELECT SUM(valor) as total from ap1Ind83"; 
            $total = Yii::app()->db->createCommand($sql)->queryRow();
            foreach ($result as $res) {
                if(!isset($json['informe'])){

                    $json['informe']=array(
                        'rubro'=>array(),
                        'gran_total'=>$total['total']
                        
                    );

                }

                
                
                if(!isset($json['informe']['rubro'][$res['rubro']][$res['anio']][$res['valor']])){

                    $json['informe']['rubro'][$res['rubro']][$res['anio']]['valor']=$res['valor'];
                    
                }
                
                if(!isset($json['informe']['rubro'][$res['rubro']][$res['anio']][$res['datop']])){

                    $json['informe']['rubro'][$res['rubro']][$res['anio']]['datop']=$res['datop'];
                    
                }
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    
    public function actionAp1Ind9($anios, $grafico){

    $this->layout=false;

            $result = Ap1Ind9::model()->findAll((array(
            'condition'=>'anio in('.$anios.') ',
            'order'=>'rubro ASC'
             )));
            
           
            foreach ($result as $res) {
                if(!isset($json['informe'])){

                    $json['informe']=array(
                        'rubro'=>array(),
                        
                    );

                }

                
                
                if(!isset($json['informe']['rubro'][$res['rubro']][$res['anio']][$res['valor']])){

                    $json['informe']['rubro'][$res['rubro']][$res['anio']]['valor']=$res['valor'];
                    
                }
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp1Ind10($anios, $trim_inicio, $trim_fin, $grafico){

    $this->layout=false;

            $result = Ap1Ind10::model()->findAll((array(
            'condition'=>'anio in('.$anios.') and (mes between '.$trim_inicio.' and '.$trim_fin.') ',
            'order'=>'rubro ASC'
             )));
            //saco el total el >1 significa que no debe tomar el valor de la columna 1, porque es un total en si
            
            foreach ($result as $res) {
                if(!isset($json['informe'])){

                    $json['informe']=array(
                        'rubro'=>array(),
                        
                    );

                }

                if(!isset($json['informe']['rubro'][$res['rubro']])){

                    $json['informe']['rubro'][$res['rubro']]=array(
                        'anio'=>array(),
                        
                        
                    );

                }
                
                
                if(!isset($json['informe']['rubro'][$res['rubro']][$res['anio']][$res['mes']][$res['valor']])){

                    $json['informe']['rubro'][$res['rubro']][$res['anio']][$res['mes']]['valor']=$res['valor'];
                       
                        
                   
                    //$json['informe']['rubro'][$res['rubro']]['total']=$json['informe']['rubro'][$res['rubro']]['total']+$json['informe']['rubro'][$res['rubro']][$res['anio']][$res['valor']]['valores'];
                    
                }
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp2Ind1($anios, $trim_inicio, $trim_fin, $grafico){

    $this->layout=false;

            $result = Ap2Ind1::model()->findAll((array(
            'condition'=>'anio in('.$anios.') and (mes between '.$trim_inicio.' and '.$trim_fin.') ',
            'order'=>'id ASC'
             )));
            //saco el total el >1 significa que no debe tomar el valor de la columna 1, porque es un total en si
            
            //saco el promedio del periodo que solicitan para df
            $sql = "SELECT AVG(df) as prom from ap2Ind1 where anio =".$anios." and (mes between ".$trim_inicio." and ".$trim_fin.")"; 
            $promdf = Yii::app()->db->createCommand($sql)->queryRow();
           
            //saco el promedio del periodo que solicitan para nacional
            $sql1 = "SELECT AVG(nacional) as prom from ap2Ind1 where anio =".$anios." and (mes between ".$trim_inicio." and ".$trim_fin.")"; 
            $promnal = Yii::app()->db->createCommand($sql1)->queryRow();
            
            
            foreach ($result as $res) {
                if(!isset($json['informe'])){

                    $json['informe']=array(
                        'anio'=>array(),
                        
                        
                    );

                }
                if(!isset($json['informe']['anio'][$res['anio']])){

                    $json['informe']['anio'][$res['anio']]=array(
                        'mes'=>array(),
                        'promedios'=>array(
                        'promediodf'=>$promdf['prom'],
                        'promnal'=>$promnal['prom'],
                            ),
                        
                        
                    );

                }
                if(!isset($json['informe']['anio'][$res['anio']]['mes'][$res['mes']])){

                    $json['informe']['anio'][$res['anio']]['mes'][$res['mes']]=array(
                        'df'=>$res['df'],
                        'nacional'=>$res['nacional'],
                        
                        
                    );

                }
                
               
                
                
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp2Ind2($anios, $grafico){

    $this->layout=false;

            $result = Ap2Ind1::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'id ASC'
             )));
            //saco el total el >1 significa que no debe tomar el valor de la columna 1, porque es un total en si
            
            
            foreach ($result as $res) {
                if(!isset($json['informe'])){

                    $json['informe']=array(
                        'anio'=>array(),
                        
                        
                    );

            }
            if(!isset($json['informe']['anio'][$res['anio']])){

                $json['informe']['anio'][$res['anio']]=array(
                    'mes'=>array(),



                );

            }
            if(!isset($json['informe']['anio'][$res['anio']]['mes'][$res['mes']])){

                $json['informe']['anio'][$res['anio']]['mes'][$res['mes']]=array(
                    'df'=>$res['df'],
                    'nacional'=>$res['nacional'],


                );

            }
                  
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp2Ind3($anios, $trim_inicio, $trim_fin, $grafico){

    $this->layout=false;

            $result = Ap2Ind3::model()->findAll((array(
            'condition'=>'anio in('.$anios.') and (mes between '.$trim_inicio.' and '.$trim_fin.') ',
            'order'=>'id ASC'
             )));
            //saco el total el >1 significa que no debe tomar el valor de la columna 1, porque es un total en si
            
            //saco el promedio del periodo que solicitan para df
            $sql = "SELECT AVG(df) as prom from ap2Ind3 where anio =".$anios." and (mes between ".$trim_inicio." and ".$trim_fin.")"; 
            $promdf = Yii::app()->db->createCommand($sql)->queryRow();
           
            //saco el promedio del periodo que solicitan para nacional
            $sql1 = "SELECT AVG(nacional) as prom from ap2Ind3 where anio =".$anios." and (mes between ".$trim_inicio." and ".$trim_fin.")"; 
            $promnal = Yii::app()->db->createCommand($sql1)->queryRow();
            
            
            foreach ($result as $res) {
                if(!isset($json['informe'])){

                    $json['informe']=array(
                        'anio'=>array(),
                        
                        
                    );

                }
                if(!isset($json['informe']['anio'][$res['anio']])){

                    $json['informe']['anio'][$res['anio']]=array(
                        'mes'=>array(),
                        'promedios'=>array(
                        'promediodf'=>$promdf['prom'],
                        'promnal'=>$promnal['prom'],
                            ),
                        
                        
                    );

                }
                if(!isset($json['informe']['anio'][$res['anio']]['mes'][$res['mes']])){

                    $json['informe']['anio'][$res['anio']]['mes'][$res['mes']]=array(
                        'df'=>$res['df'],
                        'nacional'=>$res['nacional'],
                        
                        
                    );

                }
         
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    public function actionAp2Ind4($anios, $grafico){

    $this->layout=false;

            $result = Ap2Ind3::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'id ASC'
             )));
            //saco el total el >1 significa que no debe tomar el valor de la columna 1, porque es un total en si
            
            
            foreach ($result as $res) {
                if(!isset($json['informe'])){

                    $json['informe']=array(
                        'anio'=>array(),
                        
                        
                    );

            }
            if(!isset($json['informe']['anio'][$res['anio']])){

                $json['informe']['anio'][$res['anio']]=array(
                    'mes'=>array(),



                );

            }
            if(!isset($json['informe']['anio'][$res['anio']]['mes'][$res['mes']])){

                $json['informe']['anio'][$res['anio']]['mes'][$res['mes']]=array(
                    'df'=>$res['df'],
                    'nacional'=>$res['nacional'],


                );

            }
                  
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp2Ind5($serie, $grafico){
        
     //esto es solo grafico
     if($serie == 1){   
         
        $json = array(
                0.33,
                0.5,
                0.97,
                0.71,
                0.16,
                -0.19,
                -0.04,
                0.29,
                0.41,
                0.13,
                0.54,
                0.86,
                0.65,
                0.3,
                0.29,
                0.2,
                0.24,
                0.04
        );
        
     }else{
         
         $json = array(
                0.4,
                0.49,
                0.73,
                0.07,
                -0.33,
                -0.06,
                -0.03,
                0.28,
                0.38,
                0.48,
                0.93,
                0.57,
                0.89,
                0.25,
                0.27,
                -0.19,
                -0.32,
                0.17

        );
         
     }
         
         
         header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    }
    
    public function actionAp3Ind11($anios, $grafico){
        
    $anio_ref=$anios-1;    

    $this->layout=false;

            $result = Ap3Ind11::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'id ASC'
             )));
            
            $result2 = Ap3Ind11a::model()->findAll((array(
            'condition'=>'anio in('.$anios.', '.$anio_ref.')',
            'order'=>'id ASC'
             )));
            
            
            
            
            foreach ($result as $res) {
                
                
                if(!isset($json['informe'][$res['anio']][$res['delegacion']][$res['trimestre']])){

                   $json['informe'][$res['anio']][$res['delegacion']][$res['trimestre']]['pea']=$res['pea'];
                   $json['informe'][$res['anio']][$res['delegacion']][$res['trimestre']]['po']=$res['po'];
                

                }
                
                
                
            }
            
            foreach ($result2 as $res) {
                
                //rubro1 == trimestre
                
                if(!isset($json['informe2'][$res['rubro']][$res['anio']][$res['rubro1']])){

                   $json['informe2'][$res['rubro']][$res['anio']][$res['rubro1']]['pea']=$res['pea'];
                   $json['informe2'][$res['rubro']][$res['anio']][$res['rubro1']]['po']=$res['po'];
                   $json['informe2'][$res['rubro']][$res['anio']][$res['rubro1']]['pdes']=$res['pdes'];
                

                }
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    
    
    public function actionAp3Ind12($anios, $grafico){

    $this->layout=false;

            $result = Ap3Ind12::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'id ASC'
             )));
            //saco el total el >1 significa que no debe tomar el valor de la columna 1, porque es un total en si
            
            foreach ($result as $res) {
                
                
                if(!isset($json['informe'][$res['anio']][$res['delegacion']][$res['trimestre']][$res['rubro']])){

                   $json['informe'][$res['anio']][$res['delegacion']][$res['trimestre']][$res['rubro']]['valor']=$res['valor'];
                 
                }
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
     public function actionAp3Ind2($anios, $trimestres, $grafico){

    $this->layout=false;

            $result = Ap3Ind2::model()->findAll((array(
            'condition'=>'anio in('.$anios.') and trimestre in('.$trimestres.')',
            'order'=>'id ASC'
             )));
            
            
            
            //se necesita un anio anterior
            $anio_ref=$anios-1;
            $result2 = Ap3Ind2a::model()->findAll((array(
            'condition'=>'anio in('.$anios.', '.$anio_ref.') and trimestre in('.$trimestres.')',
            'order'=>'id ASC'
             )));
            
            foreach ($result as $res) {
                
                
                if(!isset($json['informe'][$res['anio']][$res['delegacion']][$res['trimestre']][$res['rubro']])){

                   $json['informe'][$res['anio']][$res['delegacion']][$res['trimestre']][$res['rubro']]['valor']=$res['valor'];
                 
                }
                
            }
            
            
            foreach ($result2 as $res) {
                
                
                if(!isset($json['informe2'][$res['anio']][$res['rubro']][$res['trimestre']])){

                   $json['informe2'][$res['rubro']][$res['anio']][$res['trimestre']]['pea']=$res['pea'];
                   $json['informe2'][$res['rubro']][$res['anio']][$res['trimestre']]['po']=$res['po'];
                   $json['informe2'][$res['rubro']][$res['anio']][$res['trimestre']]['pdes']=$res['pdes'];
                 
                }
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    public function actionAp3Ind31($anios,$trim_inicio, $trim_fin, $entidades, $grafico){

    $this->layout=false;

            $result = Ap3Ind31::model()->findAll((array(
            'condition'=>'anio in('.$anios.') and  (mes between '.$trim_inicio.' and '.$trim_fin.') and entidad in ('.$entidades.')',
            'order'=>'entidad ASC'
             )));
            //saco el total el >1 significa que no debe tomar el valor de la columna 1, porque es un total en si
            
            foreach ($result as $res) {
                
                if(!isset($json['informe'][$res['anio']][$res['entidad']])){

                   $json['informe'][$res['anio']][$res['entidad']]=  array(
                       
                       'suma'=>0,
                       'promedio' =>0,
                       
                       'resta' =>0
                       
                       
                   );
               
                

                }
                
                if(!isset($json['informe'][$res['anio']][$res['entidad']]['mes'][$res['mes']])){

                   //VErificar la consistencia de estaos datos *****************************
                    
                    //aqui valido si el mes es 1, debe consultar el 12 del año anterior
                   $anio_ref=$res['anio'];
                   
                   if($res['mes'] == 1){ 
                       
                       $mes_ant=12; $anio_ref= $res['anio']-1; 
                       
                   }else{
                       
                       $mes_ant=$res['mes']-1; $anio_ref= $res['anio']; 
                       
                   }
                   
                   //mes actual
                   
                   $sql = "SELECT valor from ap3Ind31 where mes = ".$mes_ant." and anio = ".$anio_ref." and mes < 9000 and entidad =".$res['entidad']; 
                   
                   $mes[$res['mes']] = Yii::app()->db->createCommand($sql)->queryRow();
                   
                                  
                   
                   
                   $json['informe'][$res['anio']][$res['entidad']]['resta'] += $res['valor'] - $mes[$res['mes']]['valor'] ;
                  
                   //$json['informe'][$res['anio']][$res['entidad']]['resta_acumulada'] = $json['informe'][$res['anio']][$res['entidad']]['resta_acumulada'] + $json['informe'][$res['anio']][$res['entidad']][$res['mes']]['resta'] ;
                   
                   
                   //esta es la sumatoria 
                   $json['informe'][$res['anio']][$res['entidad']]['suma'] = $json['informe'][$res['anio']][$res['entidad']]['suma'] + $res['valor'];

                }
                
                if(!isset($json['informe'][$res['anio']][$res['entidad']]['mes'][$res['mes']]['valor'][$res['valor']])){

               
               
                   $json['informe'][$res['anio']][$res['entidad']]['promedio'] = $json['informe'][$res['anio']][$res['entidad']]['suma']/$trim_fin;

                }
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    
    public function actionAp3Ind31g1($serie, $grafico){
        
     //esto es solo grafico
      
         
        if($serie == 1){   
         
        $json = array(
                0.33,
                0.5,
                0.97,
                0.71,
                0.16,
                
                
        );
        
     }else{
         
         $json = array(
                0.4,
                0.49,
                0.73,
                0.07,
                0.17

        );
         
     }
         
         header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    }
    
    
    
    public function actionAp3Ind31g2($serie, $grafico){
        
     //esto es solo grafico
      
         
        $json = array(
               ['Distrito Federal',   19],
               ['Jalisco',   6],
               ['Estado de México',   8],
               ['Nuevo León',   10],
               ['Coahuila',   6],
               ['Puebla',   2],
               ['Resto de las entidades',   49],

               
        );   
        
         header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    }
    
    public function actionAp3Ind31g3($serie, $grafico){
        
     //esto es solo grafico
      
         
        $json = array(
                80502,
                41042,
                33119,
                26372,
                23546,
                8470,
                -10590


               
        );   
         
         header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    }
    
    
    public function actionAp3Ind32($serie, $grafico){
        
     //esto es solo grafico
     if($serie == 1){   
         
        $json = array(
                0.33,
                0.5,
                0.97,
                0.71,
                0.16,
                -0.19,
                -0.04,
                0.29,
                0.41,
                0.13,
                0.54,
                0.86,
                0.65,
                0.3,
                0.29,
                0.2,
                0.24,
                0.04
        );
        
     }else{
         
         $json = array(
                0.4,
                0.49,
                0.73,
                0.07,
                -0.33,
                -0.06,
                -0.03,
                0.28,
                0.38,
                0.48,
                0.93,
                0.57,
                0.89,
                0.25,
                0.27,
                -0.19,
                -0.32,
                0.17

        );
         
     }
         
         
         header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    }
    
    
    
    
    public function actionAp3Ind4($anios, $grafico){

    $this->layout=false;

            $result = Ap3Ind4::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'rubro ASC'
             )));
            //saco el total el >1 significa que no debe tomar el valor de la columna 1, porque es un total en si
            
            foreach ($result as $res) {
                
                
                if(!isset($json['informe'][$res['anio']][$res['rubro']][$res['mes']])){

                   $json['informe'][$res['anio']][$res['rubro']][$res['mes']]['df']=$res['df'];
                   $json['informe'][$res['anio']][$res['rubro']][$res['mes']]['nacional']=$res['nacional'];
                

                }
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp3Ind5($anios, $grafico){

    $this->layout=false;

            $result = Ap3Ind5::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'rubro ASC'
             )));
            //saco el total el >1 significa que no debe tomar el valor de la columna 1, porque es un total en si
            
            foreach ($result as $res) {
                
                
                if(!isset($json['informe'][$res['anio']][$res['rubro']][$res['mes']])){

                   $json['informe'][$res['anio']][$res['rubro']][$res['mes']]['valor']=$res['valor'];
                   
                

                }
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    public function actionAp4Ind11($anios, $grafico){

    $this->layout=false;

            $result = Ap4Ind11::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'delegacion ASC'
             )));
            
            foreach ($result as $res) {
                
               
               if(!isset($json['informe'][$res['anio']])){
                   $json['informe'][$res['anio']]=array(
                       'delegacion'=>array(),
                       
                   );
                   
                   
                } 
                
               if(!isset($json['informe'][$res['anio']]['delegacion'][$res['delegacion']])){
                   $json['informe'][$res['anio']]['delegacion'][$res['delegacion']]=array(
                       
                       'rubro'=>array(),
                       'total'=>0
                       
                   );
                   
                   
                }
                
                 if(!isset($json['informe'][$res['anio']]['delegacion'][$res['delegacion']]['rubro'][$res['rubro']])){
                   $json['informe'][$res['anio']]['delegacion'][$res['delegacion']]['rubro'][$res['rubro']]['valor']=$res['valor'];
                   $json['informe'][$res['anio']]['delegacion'][$res['delegacion']]['total']=$json['informe'][$res['anio']]['delegacion'][$res['delegacion']]['total']+$res['valor'];
                   
                }
                
                
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    public function actionAp4Ind12($anios, $grafico){

    $this->layout=false;
    
    
            //esta es la consulta del primer arreglo
            $result = Ap4Ind12::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'rubro ASC'
             )));
            
           
            
            
            
            foreach ($result as $res) {
                
               
               if(!isset($json['informe'][$res['trimestre']][$res['anio']])){
                   $json['informe'][$res['trimestre']][$res['anio']]=array(
                       'rubro'=>array(),
                       
                   );
                   
                   
                } 
                
               if(!isset($json['informe'][$res['trimestre']][$res['anio']]['rubro'][$res['rubro']])){
                   $json['informe'][$res['trimestre']][$res['anio']]['rubro'][$res['rubro']]=array(
                       
                       'columna'=>array(),
                       'suma'=>0
                       
                       
                       
                   );
                   
                   
                }
                
                 if(!isset($json['informe'][$res['trimestre']][$res['anio']]['rubro'][$res['rubro']]['columna'][$res['rubro2']])){
                     
                     
                   $json['informe'][$res['trimestre']][$res['anio']]['rubro'][$res['rubro']]['columna'][$res['rubro2']]['valor']=$res['valor'];
                   $json['informe'][$res['trimestre']][$res['anio']]['rubro'][$res['rubro']]['suma'] = $json['informe'][$res['trimestre']][$res['anio']]['rubro'][$res['rubro']]['suma'] + $res['valor'];
                           
                }
                
              
            }
            
            //termina el primer arreglo
            
            //esta es la consulta del segundo arreglo
            $result2 = Ap4Ind12a::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'rubro ASC'
             )));
            
    
            //---> inicia el segundo
            
            
            foreach ($result2 as $res) {
                
               
               if(!isset($json['informe2'][$res['apartado']][$res['trimestre']][$res['anio']])){
                   $json['informe2'][$res['apartado']][$res['trimestre']][$res['anio']]=array(
                       'rubro'=>array(),
                       
                   );
                   
                   
                } 
                
               if(!isset($json['informe2'][$res['apartado']][$res['trimestre']][$res['anio']]['rubro'][$res['rubro']])){
                   $json['informe2'][$res['apartado']][$res['trimestre']][$res['anio']]['rubro'][$res['rubro']]=array(
                       
                       'columna'=>array(),
                       'suma'=>0
                       
                       
                       
                   );
                   
                   
                }
                
                 if(!isset($json['informe2'][$res['apartado']][$res['trimestre']][$res['anio']]['rubro'][$res['rubro']]['columna'][$res['rubro2']])){
                     
                     
                   $json['informe2'][$res['apartado']][$res['trimestre']][$res['anio']]['rubro'][$res['rubro']]['columna'][$res['rubro2']]['valor']=$res['valor'];
                   $json['informe2'][$res['apartado']][$res['trimestre']][$res['anio']]['rubro'][$res['rubro']]['suma'] = $json['informe2'][$res['apartado']][$res['trimestre']][$res['anio']]['rubro'][$res['rubro']]['suma'] + $res['valor'];
                           
                }
                
              
            }
            
            
            
            
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
   
    public function actionAp4Ind2($anios, $grafico){

    $this->layout=false;

            $result = Ap4Ind2::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'id ASC'
             )));
            //saco el total el >1 significa que no debe tomar el valor de la columna 1, porque es un total en si
            
            foreach ($result as $res) {
                
                
                if(!isset($json['informe'][$res['anio']][$res['mes']])){

                   $json['informe'][$res['anio']][$res['mes']]['df']=$res['df'];
                   $json['informe'][$res['anio']][$res['mes']]['nacional']=$res['nacional'];
                

                }
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp4Ind31($anios, $trim_inicio, $trim_fin, $entidades, $grafico){

    $this->layout=false;

            $result = Ap4Ind31::model()->findAll((array(
            'condition'=>'anio in('.$anios.') and  (mes between '.$trim_inicio.' and '.$trim_fin.') and entidad in ('.$entidades.') ',
            'order'=>'entidad ASC'
             )));
            
            
            
            foreach ($result as $res) {
                
                
                
                if(!isset($json['informe'][$res['anio']][$res['entidad']])){

                    $json['informe'][$res['anio']][$res['entidad']]=array(
                       
                        'mes'=>array(),
                        'promedio'=>0,
                        
                        
                    );

                }
                if(!isset($json['informe'][$res['anio']][$res['entidad']]['mes'][$res['mes']])){

                    $json['informe'][$res['anio']][$res['entidad']]['mes'][$res['mes']]=array(
                        'valor'=>array(),
                        
                    );

                }
                
                if(!isset($json['informe'][$res['anio']][$res['entidad']]['mes'][$res['mes']][$res['valor']])){

                    $json['informe'][$res['anio']][$res['entidad']]['mes'][$res['mes']]['valor']=$res['valor'];
                    
                    $json['informe'][$res['anio']][$res['entidad']]['promedio']=$json['informe'][$res['anio']][$res['entidad']]['promedio']+$json['informe'][$res['anio']][$res['entidad']]['mes'][$res['mes']]['valor'];

                }
                
               
                
                
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    
    
    
    public function actionAp4Ind4($anios, $grafico){

    $this->layout=false;

            $result = Ap4Ind4::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'entidad ASC'
             )));
            
            foreach ($result as $res) {
                
                
               if(!isset($json['informe'][$res['entidad']][$res['anio']]['mes'][$res['mes']])){

                   $json['informe'][$res['entidad']][$res['anio']]['mes'][$res['mes']]['valor']=$res['valor'];
                   
                

                }
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp5Ind1($anios, $grafico){

    $this->layout=false;

            $result = Ap5Ind1::model()->findAll((array(
            'condition'=>'anio in('.$anios.')  ',
            'order'=>'rubro ASC'
             )));
            
            
            
            foreach ($result as $res) {
                
                
                
                if(!isset($json['informe'][$res['anio']])){

                    $json['informe'][$res['anio']]=array(
                       
                        'entidad'=>array(),
                        
                        
                        
                    );

                }
                if(!isset($json['informe'][$res['anio']]['entidad'][$res['entidad']])){

                    $json['informe'][$res['anio']]['entidad'][$res['entidad']]=array(
                        'rubro'=>array(),
                        
                    );

                }
                
                if(!isset($json['informe'][$res['anio']]['entidad'][$res['entidad']]['rubro'][$res['rubro']])){
                    
                    $json['informe'][$res['anio']]['entidad'][$res['entidad']]['rubro'][$res['rubro']]=array(
                        'mes'=>array(),
                    );
                   
                    
                    
                }
                
                if(!isset($json['informe'][$res['anio']]['entidad'][$res['entidad']]['rubro'][$res['rubro']]['mes'][$res['mes']])){
                    
                    $json['informe'][$res['anio']]['entidad'][$res['entidad']]['rubro'][$res['rubro']]['mes'][$res['mes']]=array(
                        'valor'=>array(),
                    );
                   
                    
                    
                }
                
                if(!isset($json['informe'][$res['anio']]['entidad'][$res['entidad']]['rubro'][$res['rubro']]['mes'][$res['mes']]['valor'][$res['valor']])){
                    
                    $json['informe'][$res['anio']]['entidad'][$res['entidad']]['rubro'][$res['rubro']]['mes'][$res['mes']]['valor']=$res['valor'];
                   
                    
                    
                }
                
               
                
                
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    public function actionAp5Ind21($anios, $grafico){

    $this->layout=false;

            $result = Ap5Ind21::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'rubro ASC'
             )));
            
            foreach ($result as $res) {
                
                
               if(!isset($json['informe'])){

                   $json['informe'][$res['rubro']]['valor']=$res['valor'];
                   
                

                }
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp5Ind22($anios, $grafico){

    $this->layout=false;

            $result = Ap5Ind22::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'rubro ASC'
             )));
            
            foreach ($result as $res) {
                
               
               if(!isset($json['informe'][$res['anio']])){
                   $json['informe'][$res['anio']]=array(
                       'rubro'=>array(),
                       'suma'=>0,
                   );
                   
                   
                } 
                
               if(!isset($json['informe'][$res['anio']]['rubro'][$res['rubro']])){
                   $json['informe'][$res['anio']]['rubro'][$res['rubro']]=array(
                       
                       'df'=>array(),
                       'total'=>array(),
                   );
                   
                   
                }
                
                if(!isset($json['informe'][$res['anio']]['rubro'][$res['rubro']]['x'])){

                   $json['informe'][$res['anio']]['rubro'][$res['rubro']]['df']['valor']=$res['df'];
                   $json['informe'][$res['anio']]['rubro'][$res['rubro']]['total']['valor']=$res['total'];
                   
                   $json['informe'][$res['anio']]['suma']=$json['informe'][$res['anio']]['suma']+$res['total'];
                   
                }
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    
    
    public function actionAp5Ind23($anios, $grafico){

    $this->layout=false;

            $result = Ap5Ind23::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'id ASC'
             )));
            
            foreach ($result as $res) {
                
               
               if(!isset($json['informe'][$res['anio']])){
                   $json['informe'][$res['anio']]=array(
                       'rubro'=>array(),
                       
                   );
                   
                   
                } 
                
               if(!isset($json['informe'][$res['anio']]['rubro'][$res['rubro']])){
                   $json['informe'][$res['anio']]['rubro'][$res['rubro']]=array(
                       
                       'delegacion'=>array(),
                       
                   );
                   
                   
                }
                
                 if(!isset($json['informe'][$res['anio']]['rubro'][$res['rubro']]['delegacion'][$res['delegacion']])){
                   $json['informe'][$res['anio']]['rubro'][$res['rubro']]['delegacion'][$res['delegacion']]=array(
                       
                       'unidades'=>array(),
                       'porcentual'=>array(),
                   );
                   
                   
                }
                
                if(!isset($json['informe'][$res['anio']]['rubro'][$res['rubro']]['delegacion'][$res['delegacion']]['x'])){

                   $json['informe'][$res['anio']]['rubro'][$res['rubro']]['delegacion'][$res['delegacion']]['unidades']=$res['unidades'];
                   $json['informe'][$res['anio']]['rubro'][$res['rubro']]['delegacion'][$res['delegacion']]['porcentual']=$res['porcentual'];
                   
                   
                }
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    
    
    
    public function actionAp5Ind3($entidades,$grafico){

    $this->layout=false;

            $result = Ap5Ind3::model()->findAll((array(
            'condition'=>'entidad in('.$entidades.')',
            'order'=>'entidad ASC'
             )));
            
            foreach ($result as $res) {
                
                
               if(!isset($json['informe'][$res['entidad']])){

                   $json['informe'][$res['entidad']]=array(
                       'columna'=>array(),
                   );
                
                }
                
                if(!isset($json['informe'][$res['entidad']]['columna']['x'])){

                   $json['informe'][$res['entidad']]['columna']=array(
                       'columna1'=>[$res['facilidad']],
                       'columna2'=>[$res['apertura']],
                       'columna3'=>[$res['manejo']],
                       'columna4'=>[$res['registro']],
                       'columna5'=>[$res['cumplimiento']],
                   );
                 
                }
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    public function actionAp5Ind4($grafico){

    $this->layout=false;

            $result = Ap5Ind4::model()->findAll((array(
            //'condition'=>'entidad in('.$entidades.')',
            'order'=>'rubro ASC'
             )));
            
            foreach ($result as $res) {
                
                
               if(!isset($json['informe'][$res['rubro']])){

                   $json['informe'][$res['rubro']]=array(
                       'columna'=>array(),
                   );
                
                }
                
                if(!isset($json['informe'][$res['rubro']]['columna']['x'])){

                   $json['informe'][$res['rubro']]['columna']=array(
                       'valor'=>[$res['valor']],
                       
                   );
                 
                }
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp6Ind11($anios, $meses, $grafico){

    $this->layout=false;

            $result = Ap6Ind11::model()->findAll((array(
            'condition'=>'anio in('.$anios.') and mes in('.$meses.')',
            'order'=>'rubro ASC'
             )));
            $anio_ref=$anios-1;
            //saco sumatoria del periodo actual que solicitan para df
            $sql1 = "SELECT SUM(df) as prom from ap6Ind11 where anio in('.$anios.') and mes =0"; 
            $df_total = Yii::app()->db->createCommand($sql1)->queryRow();
            
            //saco sumatoria del periodo actual que solicitan para nacional
            $sql1 = "SELECT SUM(nacional) as prom from ap6Ind11 where anio in('.$anios.') and mes =0"; 
            $nal_total = Yii::app()->db->createCommand($sql1)->queryRow();
            
            
            //saco sumatoria del periodo pasado que solicitan para df
            $sql1 = "SELECT SUM(df) as prom from ap6Ind11 where anio in('.$anio_ref.') and mes =0"; 
            $df_total_pasado = Yii::app()->db->createCommand($sql1)->queryRow();
            
            //saco sumatoria del periodo pasado que solicitan para nacional
            $sql1 = "SELECT SUM(nacional) as prom from ap6Ind11 where anio in('.$anio_ref.') and mes =0"; 
            $nal_total_pasado = Yii::app()->db->createCommand($sql1)->queryRow();
            
            $total_df=(($df_total/$df_total_pasado)-1)*100;
            $total_nal=(($nal_total/$df_total_pasado)-1)*100;
            
            
            
            foreach ($result as $res) {
                
                
                if(!isset($json['informe'][$res['anio']][$res['rubro']])){

                   $json['informe']['df_total']=$total_df;
                   $json['informe']['nacional_total']=$total_nal;
                

                }
                 
            }
            
            
            foreach ($result as $res) {
                
                
                if(!isset($json['informe'][$res['anio']][$res['rubro']][$res['mes']])){

                   $json['informe'][$res['anio']][$res['rubro']][$res['mes']]['df']=$res['df'];
                   $json['informe'][$res['anio']][$res['rubro']][$res['mes']]['nacional']=$res['nacional'];
                

                }
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
     public function actionAp6Ind12($serie, $grafico){
        
     //esto es solo grafico
      
         
        $json = array(
                4625.2,
                1146.5,
                477.3,
                478.4,
                311.5,
                276.4

               
        );   
         
         header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    }
    
    
    
    
    public function actionAp6Ind13($anio, $grafico){

    $this->layout=false;

            $result = Ap6Ind13::model()->findAll((array(
            'condition'=>'anio in('.$anio.')',
            'order'=>'rubro ASC'
             )));
            
            
            
            foreach ($result as $res) {
                
                
            
                if(!isset($json['informe'][$res['anio']][$res['rubro']][$res['mes']])){

                   $json['informe'][$res['anio']][$res['rubro']][$res['mes']]['valor']=$res['valor'];
                   
                

                }
                
                
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    public function actionAp6Ind2($anios, $grafico){

    $this->layout=false;

            $result = Ap6Ind2::model()->findAll((array(
            'condition'=>'anio in('.$anios.')  ',
            'order'=>'id ASC'
             )));
            //saco el total el >1 significa que no debe tomar el valor de la columna 1, porque es un total en si
            
            //saco el sumatoria del periodo que solicitan para df
            $sql = "SELECT SUM(df) as prom from ap6Ind2 "; 
            $sumdf = Yii::app()->db->createCommand($sql)->queryRow();
           
            //saco el sumatoria del periodo que solicitan para nacional
            $sql1 = "SELECT SUM(nacional) as prom from ap6Ind2"; 
            $sumnal = Yii::app()->db->createCommand($sql1)->queryRow();
            
            
            //saco el promedio del periodo que solicitan para df
            $sql = "SELECT AVG(df) as prom from ap6Ind2 "; 
            $promdf = Yii::app()->db->createCommand($sql)->queryRow();
           
            //saco el promedio del periodo que solicitan para nacional
            $sql1 = "SELECT AVG(nacional) as prom from ap6Ind2"; 
            $promnal = Yii::app()->db->createCommand($sql1)->queryRow();
            
            
            foreach ($result as $res) {
                if(!isset($json['informe'])){

                    $json['informe']=array(
                        'anio'=>array(),
                        'promedios'=>array(
                          
                        'promdf'=>$promdf['prom'],
                        'promnal'=>$promnal['prom'],
                            ),
                        
                    );

                }
                if(!isset($json['informe']['anio'][$res['anio']])){

                    $json['informe']['anio'][$res['anio']]=array(
                        
                        
                            'df'=>$res['df'],
                        'nacional'=>$res['nacional'],
                            
                        
                        
                    );

                }
               
                
               
                
                
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp7Ind11($anios, $grafico){

    $this->layout=false;

            $result = Ap7Ind11::model()->findAll((array(
            'condition'=>'anio in('.$anios.')  ',
            'order'=>'rubro ASC'
             )));
            
            
            
            foreach ($result as $res) {
                
                
                
                if(!isset($json['informe'][$res['anio']])){

                    $json['informe'][$res['anio']]=array(
                       
                        'rubro'=>array(),
                        
                        
                        
                    );

                }
                if(!isset($json['informe'][$res['anio']]['rubro'][$res['rubro']])){

                    $json['informe'][$res['anio']]['rubro'][$res['rubro']]=array(
                        
                        
                    );

                }
                
                if(!isset($json['informe'][$res['anio']][$res['rubro']]['valores'])){

                    $json['informe'][$res['anio']]['rubro'][$res['rubro']]['estimado']=$res['estimado'];
                    $json['informe'][$res['anio']]['rubro'][$res['rubro']]['registrado']=$res['registrado'];
                    
                    
                    
                }
                
               
                
                
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    public function actionAp7Ind12($serie, $grafico){
        
     //esto es solo grafico
      
         
        $json = array(
                24488,
                25078,
                24962,
                25441,
                25143,
                25777,
                27666,
                29205,
                30249,
                30603,
                33304,
                30425,
                32026,
                35223,
                34647,
                36311,
                42014


               
        );   
         
         header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    }
    
    public function actionAp7Ind13($serie, $grafico){
        
     //esto es solo grafico
      
         
        $json = array(
                10450,
                10526,
                11219,
                11862,
                12653,
                12684,
                12891,
                13803,
                13387,
                13787,
                14482,
                13592,
                14989,
                16381,
                20105,
                20368,
                23597



               
        );   
         
         header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    }
    
    
    
    public function actionAp7Ind14($serie, $grafico){
        
     //esto es solo grafico
      
         
        $json = array(
                62,
                70,
                59,
                57,
                52,
                49,
                58,
                61,
                67,
                63,
                71,
                62,
                93,
                91,
                101,
                119,
                135




               
        );   
         
         header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    }
    
    
    public function actionAp7Ind2($anios, $grafico){

    $this->layout=false;

            $result = Ap7Ind2::model()->findAll((array(
            'condition'=>'anio in('.$anios.')  ',
            'order'=>'rubro ASC'
             )));
            
            
            
            foreach ($result as $res) {
                
                
                
                if(!isset($json['informe'][$res['anio']])){

                    $json['informe'][$res['anio']]=array(
                       
                        'rubro'=>array(),
                        
                        
                        
                    );

                }
                if(!isset($json['informe'][$res['anio']]['rubro'][$res['rubro']])){

                    $json['informe'][$res['anio']]['rubro'][$res['rubro']]=array(
                        
                        
                    );

                }
                
                if(!isset($json['informe'][$res['anio']][$res['rubro']]['valores'])){

                    $json['informe'][$res['anio']]['rubro'][$res['rubro']]['ejercicio']=$res['ejercicio'];
                    $json['informe'][$res['anio']]['rubro'][$res['rubro']]['estructura']=$res['estructura'];
                    
                    
                    
                }
                
               
                
                
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    public function actionAp7Ind3($anios, $grafico){

    $this->layout=false;

            $result = Ap7Ind3::model()->findAll((array(
            'condition'=>'anio in('.$anios.')  ',
            'order'=>'rubro ASC'
             )));
            
            
            
            foreach ($result as $res) {
                
                
                
                if(!isset($json['informe'])){

                    $json['informe']=array(
                       
                        'rubro'=>array(),
                        
                        
                        
                    );

                }
                if(!isset($json['informe']['rubro'][$res['rubro']])){

       
                        $json['informe']['rubro'][$res['rubro']]['saldo1']=$res['saldo1'];
                        $json['informe']['rubro'][$res['rubro']]['colocacion1']=$res['colocacion1'];
                        $json['informe']['rubro'][$res['rubro']]['amortizacion1']=$res['amortizacion1'];
                        $json['informe']['rubro'][$res['rubro']]['colocacion2']=$res['colocacion2'];
                        $json['informe']['rubro'][$res['rubro']]['amortizacion2']=$res['amortizacion2'];
                        $json['informe']['rubro'][$res['rubro']]['actualizacion2']=$res['actualizacion2'];
                        $json['informe']['rubro'][$res['rubro']]['saldo2']=$res['saldo2'];
                        $json['informe']['rubro'][$res['rubro']]['endeudamiento']=$res['endeudamiento'];
                        
                        

                }
               
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    public function actionAp8Ind11($anios, $meses, $grafico){

    $this->layout=false;

            $result = Ap8Ind11::model()->findAll((array(
            'condition'=>'anio in('.$anios.') and mes in('.$meses.')  ',
            'order'=>'id ASC'
             )));
            
            
            
            foreach ($result as $res) {
                
                //al por mayor por año y columna
                if(!isset($json['informe']['pormayor'][$res['anio']])){

                    $json['informe']['pormayor'][$res['anio']]=array(
                        
                        //personas ocupadas nacional y df mayoreo
                        'p_ocupadas_n_ma'=>array(),
                        'p_ocupadas_df_ma'=>array(),
                        
                        //remunaeraciones ocupadas nacional y df mayoreo
                        'remuneraciones_n_ma'=>array(),
                        'remuneraciones_df_ma'=>array(),
                        
                        //remuneracione spor persona  nacional y df mayoreo
                        'remuneraciones_pp_n_ma'=>array(),
                        'remuneraciones_pp_df_ma'=>array(),
                        
                        //ingresos nacional y df mayoreo
                        'ingreso_n_ma'=>array(),
                        'ingreso_df_ma'=>array(),
                        
                        //compras nacional y df mayoreo
                        'compras_n_ma'=>array(),
                        'compras_df_ma'=>array(),
                        
                        
                        
                    );
                    
                }
                
                //personas ocupadas nacional y df mayoreo
                if(!isset($json['informe']['pormayor'][$res['anio']]['p_ocupadas_n_ma']['mes'][$res['mes']])){
                    
                    $json['informe']['pormayor'][$res['anio']]['p_ocupadas_n_ma']['total']=$json['informe']['pormayor'][$res['anio']]['p_ocupadas_n_ma']['total']+$res['p_ocupadas_n_ma'];
                    
                }
                
                if(!isset($json['informe']['pormayor'][$res['anio']]['p_ocupadas_df_ma']['mes'][$res['mes']])){

                    $json['informe']['pormayor'][$res['anio']]['p_ocupadas_df_ma']['total']=$json['informe']['pormayor'][$res['anio']]['p_ocupadas_df_ma']['total']+$res['p_ocupadas_df_ma'];;
                    
                }
                
                //remunaeraciones ocupadas nacional y df mayoreo
                if(!isset($json['informe']['pormayor'][$res['anio']]['remuneraciones_n_ma']['mes'][$res['mes']])){

                    $json['informe']['pormayor'][$res['anio']]['remuneraciones_n_ma']['total']=$json['informe']['pormayor'][$res['anio']]['remuneraciones_n_ma']['total']+$res['remuneraciones_n_ma'];;
                    
                }
                if(!isset($json['informe']['pormayor'][$res['anio']]['remuneraciones_df_ma']['mes'][$res['mes']])){

                    $json['informe']['pormayor'][$res['anio']]['remuneraciones_df_ma']['total']=$json['informe']['pormayor'][$res['anio']]['remuneraciones_df_ma']['total']+$res['remuneraciones_df_ma'];;
                    
                }
                
                //remuneracione spor persona  nacional y df mayoreo
                if(!isset($json['informe']['pormayor'][$res['anio']]['remuneraciones_pp_n_ma']['mes'][$res['mes']])){

                    $json['informe']['pormayor'][$res['anio']]['remuneraciones_pp_n_ma']['total']=$json['informe']['pormayor'][$res['anio']]['remuneraciones_pp_n_ma']['total']+$res['remuneraciones_pp_n_ma'];;
                    
                }
                if(!isset($json['informe']['pormayor'][$res['anio']]['remuneraciones_pp_df_ma']['mes'][$res['mes']])){

                    $json['informe']['pormayor'][$res['anio']]['remuneraciones_pp_df_ma']['total']=$json['informe']['pormayor'][$res['anio']]['remuneraciones_df_ma']['total']+$res['remuneraciones_pp_df_ma'];;
                    
                }
                
                //ingresos nacional y df mayoreo
                if(!isset($json['informe']['pormayor'][$res['anio']]['ingreso_n_ma']['mes'][$res['mes']])){

                    $json['informe']['pormayor'][$res['anio']]['ingreso_n_ma']['total']=$json['informe']['pormayor'][$res['anio']]['ingreso_n_ma']['total']+$res['ingreso_n_ma'];;
                    
                }
                if(!isset($json['informe']['pormayor'][$res['anio']]['ingreso_df_ma']['mes'][$res['mes']])){

                    $json['informe']['pormayor'][$res['anio']]['ingreso_df_ma']['total']=$json['informe']['pormayor'][$res['anio']]['ingreso_df_ma']['total']+$res['ingreso_df_ma'];;
                    
                }
                
                //compras nacional y df mayoreo
                if(!isset($json['informe']['pormayor'][$res['anio']]['compras_n_ma']['mes'][$res['mes']])){

                    $json['informe']['pormayor'][$res['anio']]['compras_n_ma']['total']=$json['informe']['pormayor'][$res['anio']]['compras_n_ma']['total']+$res['compras_n_ma'];;
                    
                }
                if(!isset($json['informe']['pormayor'][$res['anio']]['compras_df_ma']['mes'][$res['mes']])){

                    $json['informe']['pormayor'][$res['anio']]['compras_df_ma']['total']=$json['informe']['pormayor'][$res['anio']]['compras_df_ma']['total']+$res['compras_df_ma'];;
                    
                }
                
                
                
                
                
                
                
                //al por menor por año y por columna
                
                if(!isset($json['informe']['pormenor'][$res['anio']])){

                    $json['informe']['pormenor'][$res['anio']]=array(
                        
                        //personas ocupadas nacional y df menudeo
                        'p_ocupadas_n_me'=>array(),
                        'p_ocupadas_df_me'=>array(),
                        
                        //remunaeraciones ocupadas nacional y df menudeo
                        'remuneraciones_n_me'=>array(),
                        'remuneraciones_df_me'=>array(),
                        
                        //remuneracione spor persona  nacional y df menudeo
                        'remuneraciones_pp_n_me'=>array(),
                        'remuneraciones_pp_df_me'=>array(),
                        
                        //ingresos nacional y df menudeo
                        'ingreso_n_me'=>array(),
                        'ingreso_df_me'=>array(),
                        
                        //compras nacional y df menudeo
                        'compras_n_me'=>array(),
                        'compras_df_me'=>array(),
                        
                        
                        
                    );
                    
                }
                
                //personas ocupadas nacional y df mayoreo
                if(!isset($json['informe']['pormenor'][$res['anio']]['p_ocupadas_n_me']['mes'][$res['mes']])){
                    
                    $json['informe']['pormenor'][$res['anio']]['p_ocupadas_n_me']['total']=$json['informe']['pormenor'][$res['anio']]['p_ocupadas_n_me']['total']+$res['p_ocupadas_n_me'];
                    
                }
                
                if(!isset($json['informe']['pormenor'][$res['anio']]['p_ocupadas_df_me']['mes'][$res['mes']])){

                    $json['informe']['pormenor'][$res['anio']]['p_ocupadas_df_me']['total']=$json['informe']['pormenor'][$res['anio']]['p_ocupadas_df_me']['total']+$res['p_ocupadas_df_me'];;
                    
                }
                
                //remunaeraciones ocupadas nacional y df mayoreo
                if(!isset($json['informe']['pormenor'][$res['anio']]['remuneraciones_n_me']['mes'][$res['mes']])){

                    $json['informe']['pormenor'][$res['anio']]['remuneraciones_n_me']['total']=$json['informe']['pormenor'][$res['anio']]['remuneraciones_n_me']['total']+$res['remuneraciones_n_me'];;
                    
                }
                if(!isset($json['informe']['pormenor'][$res['anio']]['remuneraciones_df_me']['mes'][$res['mes']])){

                    $json['informe']['pormenor'][$res['anio']]['remuneraciones_df_me']['total']=$json['informe']['pormenor'][$res['anio']]['remuneraciones_df_me']['total']+$res['remuneraciones_df_me'];;
                    
                }
                
                //remuneracione spor persona  nacional y df mayoreo
                if(!isset($json['informe']['pormenor'][$res['anio']]['remuneraciones_pp_n_me']['mes'][$res['mes']])){

                    $json['informe']['pormenor'][$res['anio']]['remuneraciones_pp_n_me']['total']=$json['informe']['pormenor'][$res['anio']]['remuneraciones_pp_n_me']['total']+$res['remuneraciones_pp_n_me'];;
                    
                }
                if(!isset($json['informe']['pormenor'][$res['anio']]['remuneraciones_pp_df_me']['mes'][$res['mes']])){

                    $json['informe']['pormenor'][$res['anio']]['remuneraciones_pp_df_me']['total']=$json['informe']['pormenor'][$res['anio']]['remuneraciones_df_me']['total']+$res['remuneraciones_pp_df_me'];;
                    
                }
                
                //ingresos nacional y df mayoreo
                if(!isset($json['informe']['pormenor'][$res['anio']]['ingreso_n_me']['mes'][$res['mes']])){

                    $json['informe']['pormenor'][$res['anio']]['ingreso_n_me']['total']=$json['informe']['pormenor'][$res['anio']]['ingreso_n_me']['total']+$res['ingreso_n_me'];;
                    
                }
                if(!isset($json['informe']['pormenor'][$res['anio']]['ingreso_df_me']['mes'][$res['mes']])){

                    $json['informe']['pormenor'][$res['anio']]['ingreso_df_me']['total']=$json['informe']['pormenor'][$res['anio']]['ingreso_df_me']['total']+$res['ingreso_df_me'];;
                    
                }
                
                //compras nacional y df mayoreo
                if(!isset($json['informe']['pormenor'][$res['anio']]['compras_n_me']['mes'][$res['mes']])){

                    $json['informe']['pormenor'][$res['anio']]['compras_n_me']['total']=$json['informe']['pormenor'][$res['anio']]['compras_n_me']['total']+$res['compras_n_me'];;
                    
                }
                if(!isset($json['informe']['pormenor'][$res['anio']]['compras_df_me']['mes'][$res['mes']])){

                    $json['informe']['pormenor'][$res['anio']]['compras_df_me']['total']=$json['informe']['pormenor'][$res['anio']]['compras_df_me']['total']+$res['compras_df_me'];;
                    
                }
                
                
                
                
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp8Ind12($anios, $grafico){

    $this->layout=false;

            $result = Ap8Ind12::model()->findAll((array(
            'condition'=>'anio in('.$anios.') ',
            'order'=>'id ASC'
             )));
            
            
            
            foreach ($result as $res) {
                
                //al por mayor por año y columna
                if(!isset($json['informe'][$res['anio']][$res['mes']])){

                   
                        
                        //compras nacional y df mayoreo
                        $json['informe'][$res['anio']][$res['mes']]['compras_n_ma']=$res['compras_n_ma'];
                        $json['informe'][$res['anio']][$res['mes']]['compras_df_ma']=$res['compras_df_ma'];
                        
                        //compras nacional y df menudeo
                        $json['informe'][$res['anio']][$res['mes']]['compras_n_me']=$res['compras_n_me'];
                        $json['informe'][$res['anio']][$res['mes']]['compras_df_me']=$res['compras_df_me'];
                        
                    
                }
            }
            
        header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    } 
    
    
    public function actionAp8Ind13($serie, $grafico){
        
     //esto es solo grafico
     if($serie == 1){   
        //DF 
        $json = array(
                94.9,
                90.97,
                89.39,
                103.43,
                104.76,
                105.35,
                100.03,
                101.25,
                106.04,
                109.55,
                100.01,
                94.33,
                82.58,
                81.7,
                89.17,
                85.98,
                83.98,
                85.24,
                83.91,
                81.04,
                87.88,
                86.18,
                84.85,
                94.7,
                90.6,
                96.09,
                106.21,
                101.77,
                98.92,
                104.43,
                99.05,
                102.37,
                100.08,
                108.59,
                106.78,
                106.59,
                87.98,
                85.36,
                97.42,
                85.48,
                91.93,
                100.73,
                113.74,
                125.61,
                121.9,
                128.53,
                142.96,
                156.3,
                135.02,
                115.56,
                130.56,
                121.91,
                114.1,
                120.61,
                116.07,
                124.77,
                109.59,
                103.22,
                107.54,
                106.12,
                98.39,
                108.93,
                116.28,
                114.88,
                119.26,
                119.96,
                120,
                125.03,
                115.9,
                142.12,
                123.64,
                117.4,
                103.26,
                97.53,
                110.85,
                110.26,
                107.05,
                103.51,
                109.88,
                99.87,
                111.68

        );
        
     }else{
         //nacional
         $json = array(
                94.05,
                93.47,
                93.16,
                105.25,
                104.95,
                105.79,
                104.64,
                100.28,
                100.4,
                106.01,
                95.46,
                96.55,
                85.35,
                84.75,
                90.24,
                87.58,
                87.55,
                91.54,
                92.25,
                89.07,
                88.94,
                94.11,
                88,
                97.01,
                85.48,
                88.87,
                97.62,
                94.04,
                94.44,
                96.77,
                97.21,
                97.35,
                96.29,
                100.86,
                99.92,
                104.93,
                88.33,
                89.35,
                97.61,
                91.18,
                97.66,
                102.33,
                100.47,
                105.69,
                105.53,
                108.4,
                108.83,
                113.82,
                101.33,
                100.67,
                108.54,
                99.5,
                106.55,
                107.51,
                106.5,
                110.21,
                105.17,
                110.69,
                107.08,
                108.86,
                100.85,
                98.82,
                101,
                104.59,
                106.33,
                104.16,
                104.48,
                107.97,
                101.91,
                112.82,
                105.7,
                112.14,
                100.04,
                97.87,
                106.04,
                104.07,
                111.19,
                106.97,
                112.57,
                106.94,
                109.45


        );
         
     }
         
         
         header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    }
    
    
    
    public function actionAp8Ind14($serie, $grafico){
        
     //esto es solo grafico
     if($serie == 1){   
        //DF 
        $json = array(
                96.12,
                93.66,
                94.16,
                101.18,
                98.64,
                98.6,
                101.32,
                99.31,
                96.81,
                106.07,
                101.25,
                112.88,
                90.7,
                85.45,
                93.16,
                90.45,
                91.19,
                92.7,
                96.17,
                93.21,
                91.06,
                100.46,
                99.66,
                116.85,
                89.23,
                88.17,
                99.04,
                92.24,
                93.71,
                94.39,
                95.31,
                96.49,
                95.18,
                103.23,
                103.05,
                114.9,
                94.75,
                88.79,
                98.7,
                95.34,
                97.83,
                98.44,
                98.17,
                103.64,
                99.64,
                107.05,
                111.1,
                121.69,
                94.9,
                94.81,
                101.95,
                98.88,
                104.22,
                104.78,
                104.5,
                107.61,
                103.3,
                116.11,
                116.7,
                122.3,
                100.43,
                98.03,
                102.74,
                104.98,
                109.39,
                104.27,
                110.19,
                108.54,
                101.61,
                115.43,
                118.48,
                126.9,
                102.64,
                98.01,
                104.51,
                103.41,
                108.96,
                107.1,
                110.96,
                109.54,
                109.37


        );
        
     }else{
         //nacional
         $json = array(
                93.54,
                92.84,
                93.51,
                98.12,
                98.72,
                98.04,
                104.06,
                100.36,
                96.7,
                108.68,
                104.12,
                111.31,
                87.14,
                82.1,
                90.53,
                86.5,
                86.27,
                92.3,
                96.12,
                91.13,
                89,
                99.52,
                103.6,
                116.72,
                90.39,
                91.08,
                97.83,
                92,
                94.29,
                94.53,
                101.28,
                96.95,
                100.4,
                109.71,
                111.2,
                127.76,
                98.91,
                95.51,
                108.27,
                102.72,
                104.6,
                107.2,
                107.26,
                114.64,
                117.22,
                125.57,
                138.73,
                171.66,
                104.18,
                105.22,
                113.75,
                106.7,
                117.73,
                123.9,
                133.84,
                131,
                126.97,
                141.58,
                144.51,
                150.46,
                121.6,
                119.76,
                125.96,
                123.61,
                126.04,
                131.16,
                148.85,
                149.32,
                138.69,
                160.06,
                167.45,
                185.19,
                133.59,
                116.51,
                138.53,
                130.86,
                136.1,
                147.04,
                146.74,
                144.34,
                150.86



        );
         
     }
         
         
         header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    }
    
    
     public function actionAp8Ind21($anios,$anio_tiendas,$grafico){

    $this->layout=false;

            $result = Ap8Ind21::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'rubro ASC'
             )));
            
             $result_tiendas = Ap8Ind21a::model()->findAll((array(
            'condition'=>'anio in('.$anio_tiendas.')',
            'order'=>'rubro ASC'
             )));
            
            
            
            foreach ($result as $res) {
                
                if(!isset($json['u_comercio'][$res['anio']][$res['rubro']])){

                    $json['u_comercio'][$res['anio']][$res['rubro']]['unidades']=$res['unidades'];
                    $json['u_comercio'][$res['anio']][$res['rubro']]['personal']=$res['personal'];
                    
                    
                }
            }
            
            foreach ($result_tiendas as $res) {
                
                if(!isset($json['tiendas'][$res['anio']][$res['rubro']])){

                    $json['tiendas'][$res['anio']][$res['rubro']]['valor']=$res['valor'];
                    
                    
                    
                }
                   
            }
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    
    public function actionAp8Ind3($anios,$grafico){

    $this->layout=false;

            $result = Ap8Ind3::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'mes ASC'
             )));
            
            
            
            
            foreach ($result as $res) {
                
                if(!isset($json['u_comercio'][$res['anio']][$res['mes']])){

                    $json['informe'][$res['anio']][$res['mes']]['df']=$res['df'];
                    $json['informe'][$res['anio']][$res['mes']]['nacional']=$res['nacional'];
                    
                    
                }
            }
            
            
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp9Ind1($anios,$grafico){

    $this->layout=false;

            $result = Ap9Ind1::model()->findAll((array(
            'condition'=>'anio in('.$anios.')',
            'order'=>'anio ASC'
             )));
            
            
            
            
            foreach ($result as $res) {
                
                if(!isset($json['u_comercio'][$res['anio']])){

                    $json['informe'][$res['anio']]['habitaciones']=$res['habitaciones'];
                    $json['informe'][$res['anio']]['ocupacion']=$res['ocupacion'];
                    
                    
                }
            }
            
            
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    
    public function actionAp9Ind2($anios,$meses,$grafico){

    $this->layout=false;

            $result = Ap9Ind2::model()->findAll((array(
            'condition'=>'anio in('.$anios.') and mes in('.$meses.')',
            'order'=>'anio ASC'
             )));
            
            
            
            
            foreach ($result as $res) {
                
                if(!isset($json['informe'][$res['mes']])){

                    $json['informe'][$res['mes']]=array(
                       
                        'anio'=>array(),
                        
                        
                        
                    );

                }
                if(!isset($json['informe'][$res['mes']]['anio'][$res['anio']])){

                    $json['informe'][$res['mes']]['anio'][$res['anio']]=array(
                        'rubro'=>array(),
                        'total'=>0,
                    );

                }
                
                if(!isset($json['informe'][$res['mes']]['anio'][$res['anio']]['rubro'][$res['rubro']])){

                    $json['informe'][$res['mes']]['anio'][$res['anio']]['rubro'][$res['rubro']]['valor']=$res['valor'];
                    $json['informe'][$res['mes']]['anio'][$res['anio']]['total']=$json['informe'][$res['mes']]['anio'][$res['anio']]['total']+$res['valor'];
                    
                    
                }
            }
            
            
          
            header('Content-type: application/json');  
            echo json_encode($json);  
            Yii::app()->end(); 
    }
    
    public function actionAp9Ind2a($serie, $grafico){
        
     //esto es solo grafico
      
         
        $json = array(
                3572547,
                4316904,
                4783655,
                4589398,
                5005797,
                4969016

               
        );   
         
         header('Content-type: application/json');  
        echo json_encode($json);  
        Yii::app()->end(); 
    }
    
    
    
    

}
