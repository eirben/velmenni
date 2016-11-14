<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'Line.php';
        include 'triangle.php';
        include 'Square.php';

        $myform = new triangle();
        $myform->setAx(34);
        $myform->setBx(6);
        $myform->setCx(50);
        $myform->setAy(7);
        $myform->setBy(19);
        $myform->setCy(25);
        $myform->setHeight(10);
        echo "Flatarmálið er  :".$myform->surface();
        echo "<br>Rúmmálið er  :".$myform->cubic();
        $myform_tri= new Square();
        $myform_tri->setAx(4);
        $myform_tri->setAy(10);
        $myform_tri->setBx(13);
        $myform_tri->setBy(11);
        $myform_tri->setCx(11);
        $myform_tri->setCy(2);
        $myform_tri->setDx(2);
        $myform_tri->setDy(2);
        echo "Flatarmál fernings : ".$myform_tri->surface();
        ?>
    </body>
</html>
