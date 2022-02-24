<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11</title>
    </head>
    <body>
        <pre>
        <?php
            //require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            
            //$v1 = new Visitante();
            $a1 = new Aluno();
            //$b1 = new Bolsista();
           
            //$v1->setName('Juvenal');
            //$v1->setAge(33);
            //$v1->setGenere('M');
            
            $a1->setName('Pedro');
            $a1->setMatricula(1111);
            $a1->setAge(16);
            $a1->setGenere('M');
            $a1->setCurso('Informática');
            $a1->pagarMensalidade();
            
            $b1 = new Bolsista();
            $b1->setMatricula(1112);
            $b1->setName('Jubileu');
            $b1->setBolsa(12.5);
            $b1->setCurso('Administração');
            $b1->setAge(17);
            $b1->pagarMensalidade();
            
            print_r($a1);
            print_r($b1);
            
        ?>
        </pre>
    </body>
</html>
