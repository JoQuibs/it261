<?php
$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';
// variable key value
// $name $image
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7 Class Exercise - Pictures</title>
    <style>
        table{
            border:1px solid red;
            border-collapse:collapse;
        }
    </style>
</head>
<div id="wrapper">
    <main>
    <h2>Welcome to our Gallery</h2>
    <table>
        <tr>
            <td><img src="images/trump.jpg" alt="Donald_Trump"></td>
            <td>Donald Trump</td>
            <td>President from NY</td>
        </tr>
        <tr>
            <td><img src="images/biden.jpg" alt="Joe_Biden"></td>
            <td>Joe Biden</td>
            <td>Vice President from PA</td>
        </tr>
        <tr>
            <td><img src="images/clint.jpg" alt="Hilary_Clinton"></td>
            <td>Hilary Clinton</td>
            <td>Secretary from NY</td>
        </tr>
        <tr>
            <td><img src="images/sande.jpg" alt="Bernie_Sanders"></td>
            <td>Bernie Sanders</td>
            <td>Senator from VT</td>
        </tr>
        <tr>
            <td><img src="images/warre.jpg" alt="Elizabeth_Warren"></td>
            <td>Elizabeth Warren</td>
            <td>Senator from MA</td>
        </tr>
        <tr>
            <td><img src="images/harri.jpg" alt="Kamala_Harris"></td>
            <td>Kamala Harris</td>
            <td>Sentor from CA</td>
        </tr>
        <tr>
            <td><img src="images/booke.jpg" alt="Cory_Booker"></td>
            <td>Cory Booker</td>
            <td>Senator from NJ</td>
        </tr>
        <tr>
            <td><img src="images/ayang,jpg" alt="Andrew_Yang"></td>
            <td>Andrew Yang</td>
            <td>Entrepreneur from NY</td>
        </tr>
        <tr>
            <td><img src="images/butti.jpg" alt="Pete Buttigieg"></td>
            <td>Pete Buttigieg</td>
            <td>Mayor from IN</td>
        </tr>
        <tr>
            <td><img src="images/klobu.jpg" alt="Amy Klobuchar"></td>
            <td>Amy Klobuchar</td>
            <td>Senator from MN</td>
        </tr>
        <tr>
            <td><img src="images/castr.jpg" alt="Julian Castro"></td>
            <td>Julian Castro</td>
            <td>Housing Urban from TX</td>
        </tr>
    </table>
    </main>
<body>
<table>
<?php foreach($people as $name => $image) :?>
<tr>
<td><img src="images/<?php echo substr($image, 0, 5)    ;?>.jpg" alt="<?php echo $name;?>"></td>
<td><?php echo str_replace('_',' ', $name) ;?></td>
<td></td>
</tr>
<?php endforeach ;?>
</table>
</body>
</html>