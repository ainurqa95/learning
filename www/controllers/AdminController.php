<?php

    /* наследуют AdminBase чтобы пользоватья бщим методом CheckAdmin
    */
	class AdminController extends AdminBase {

		public function actionIndex ()
		{	
	   
   	     // проверка доступа
            
        self::CheckAdmin();
		require_once(ROOT.'/views/admin/index.php');
		
		return true;


		}

       


	}


?>