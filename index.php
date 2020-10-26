<!-- photo homme ou femme exercice video 10b-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        html,body{margin:0;padding:0;width:100%;}
        header{display:flex;flex-direction:column;text-align:center;font-weight:bold;margin:0;} 
        nav{display:flex;flex-direction:column;width:100%;text-align:center;} 
        h1{color:grey;}
        main{margin:auto;width:100%;text-align:center;}
        a{text-decoration:none;color:grey;background-color:tomato;padding:1.5em;}
        header{
        background-color:
        <?php
        $genre = "F";
        if($genre=="F")
        {
        echo '#fd6c9e ';
        }
        elseif($genre=="H")
        {
        echo'#0000FF';
        }
        else
        echo '#181818';
        ?>
        ;
        }

        @media screen and (min-width:760px){
            header{font-weight:bold;margin:0;}
            nav{display:flex;flex-direction:row;justify-content:space-around;width:80%;margin:auto;margin-bottom:2em;}  
        }
    </style>
</head>
<body>

<!--header-->
    <header >
        <h1>Qui êtes-vous ?</h1>
        <?php  
            //initialisation des variables
            $nom ="LAVANDIER";
            $prenom ="Catherine";
            $genre ="F";     
        ?> 
     
       
            <nav>
                <?php
                    //$menu = ['ACCUEIL', 'PRÉSENTATION', 'PORTFOLIO', 'CONTACT'];
    
                    //foreach ($menu as $arg) {
                       //echo "<a>$arg</a>";
                   // }  
                ?>
                <a href="page1.php">ACCUEIL</a>
                <a href="page2.php">PRÉSENTATION</a>
                <a href="page3.php">PORTFOLIO</a>
                <a href="page4.php">CONTACT</a>
            </nav>        
    </header>
 <!--Main-->
    <main>
        <!--code pour h1-->
        <h1> 
            <?php  
        //initialisation des variables
                $nom ="LAVANDIER";
                $prenom ="Catherine";
                $genre ="F";
                if($genre=="F"){
                echo "Mme ".$nom." ".$prenom.'<br><img src="img/femme.jpg" alt="femme" width="500">';       
                } else if ($genre=="H") {echo "M. ".$nom." ".$prenom.'<br><img src="img/homme.jpg" alt="homme" width="500">';
                } else echo"Je n'ai pas compris"; 
             ?>
        </h1>
        

        

      

    </main>
<!--fin main-->   
</body>
</html>