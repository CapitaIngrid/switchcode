<?PHP
        $cargo = $_POST["cargo"];     
    
        
        switch($cargo){
            case "Secretária":
            print "Secretária";
            break;
            
            case "Gerente":
                print "Gerente";
            break;
            
            case "Operário":
                print "Operário";  
                              
            break;
            
            case "Analista":
                print "Analista"; 
                              
            break;

            case "Faxineiro":
               print "Faxineiro";  
                             
            break;
        }

        
    ?>