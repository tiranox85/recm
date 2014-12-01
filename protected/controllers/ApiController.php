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
    
    
    

}
