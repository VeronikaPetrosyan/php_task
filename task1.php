<?php
/*Ստեղծել կամայական չափի զանգված, որի  տարրերը random ձևով գեներացված
1-100 միջակայքում ընկած ամբողջ տիպի թվեր են.  Տպել էկրանին զանգվածը: Զանգվածից հեռացնել կրկնվող տարրերը: Դասավորել ըստ նվազման և տպել էկրանին 2 սյունակից կազմված աղյուսակի տեսքով
 ( հերթական համար , զանգվածի տարր). */

$numbers = range (0, 100);
shuffle($numbers );
$random_numbers = array_slice($numbers, 0,3);
print_r($random_numbers) ;

$unique = array_unique($random_numbers);
rsort($unique);
print_r($unique);


echo "<table border='1'>";
foreach($unique as $key => $value) {
    ?>
    <tr>
        <th><?= ++$key ?>
        </th>
        <td><?= $value ?></td>
    </tr>

    <?php
}

