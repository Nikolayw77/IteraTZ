<head>
    <style>
        td {
            height: 25px;
            border: 1px solid;
        }

        table {
            border: 1px solid;
            width: 100%;
            height: 50%;
            table-layout: fixed;
        }
    </style>
</head>

<body>

<?php

$arr = array(
            array('text' => 'Текст красного цвета'
            , 'cells' => '2,5'
            , 'align' => 'center'
            , 'valign' => 'center'
            , 'color' => 'FF0000'
            , 'bgcolor' => '0000FF')
        , array('text' => 'Текст зеленого цвета'
            , 'cells' => '6,9'
            , 'align' => 'right'
            , 'valign' => 'bottom'
            , 'color' => '00FF00'
            , 'bgcolor' => 'FFFF00'));


function printHtml($arr)
{
    $table = [
      ['<td></td>', '<td></td>', '<td></td>'],
      ['<td></td>', '<td></td>', '<td></td>'],
      ['<td></td>', '<td></td>', '<td></td>']
    ];

    foreach ($arr as $ar) {

        $text = $ar['text'];
        $cells = $ar['cells'];
        $align = $ar['align'];
        $valign = $ar['valign'];
        $color = $ar['color'];
        $bgcolor = $ar['bgcolor'];

        $attributes = "align=\"$align\" valign=\"$valign\" style=\"color:$color\" bgcolor=\"$bgcolor\" ";

        switch ($cells) {

            case '1':
                $table[0][0] = "<td $attributes> $text </td>";
            break;


            case '2':
                $table[0][1] = "<td $attributes> $text </td>";
            break;


            case '3':
                $table[0][2] = "<td $attributes> $text </td>";
            break;


            case '4':
                $table[1][0] = "<td $attributes> $text </td>";
            break;


            case '5':
                $table[1][1] = "<td $attributes> $text </td>";
            break;


            case '6':
                $table[1][2] = "<td $attributes> $text </td>";
            break;


            case '7':
                $table[2][0] = "<td $attributes> $text </td>";
            break;


            case '8':
                $table[2][1] = "<td $attributes> $text </td>";
                break;


            case '9':
                $table[2][2] = "<td $attributes> $text </td>";
                break;


            case '1,2':
                $table[0][0] = "<td $attributes colspan=\"2\"> $text </td>";
                $table[0][1] = "";
            break;


            case '1,2,3':
                $table[0][0] = "<td $attributes colspan=\"3\"> $text </td>";
                $table[0][1] = "";
                $table[0][2] = "";
            break;


            case '2,3':
                $table[0][1] = "<td $attributes colspan=\"2\"> $text </td>";
                $table[0][2] = "";
            break;


            case '4,5':
                $table[1][0] = "<td $attributes colspan=\"2\"> $text </td>";
                $table[1][1] = "";
            break;


            case '4,5,6':
                $table[1][0] = "<td $attributes colspan=\"3\"> $text </td>";
                $table[1][1] = "";
                $table[1][1] = "";
            break;


            case '5,6':
                $table[1][1] = "<td $attributes colspan=\"2\"> $text </td>";
                $table[1][2] = "";
            break;


            case '7,8':
                $table[2][0] = "<td $attributes colspan=\"2\"> $text </td>";
                $table[2][1] = "";
            break;


            case '7,8,9':
                $table[2][0] = "<td $attributes colspan=\"3\"> $text </td>";
                $table[2][1] = "";
                $table[2][2] = "";
            break;


            case '8,9':
                $table[2][1] = "<td $attributes colspan=\"2\"> $text </td>";
                $table[2][2] = "";
            break;


            case '1,4':
                $table[0][0] = "<td $attributes rowspan=\"2\"> $text </td>";
                $table[1][0] = "";
            break;


            case '1,4,7':
                $table[0][0] = "<td $attributes rowspan=\"3\"> $text </td>";
                $table[1][0] = "";
                $table[2][0] = "";
            break;


            case '4,7':
                $table[1][0] = "<td $attributes rowspan=\"2\"> $text </td>";
                $table[2][0] = "";
            break;


            case '2,5':
                $table[0][1] = "<td $attributes rowspan=\"2\"> $text </td>";
                $table[1][1] = "";
            break;


            case '2,5,8':
                $table[0][1] = "<td $attributes rowspan=\"3\"> $text </td>";
                $table[1][1] = "";
                $table[2][1] = "";
            break;


            case '5,8':
                $table[1][1] = "<td $attributes rowspan=\"2\"> $text </td>";
                $table[2][1] = "";
            break;


            case '3,6':
                $table[0][2] = "<td $attributes rowspan=\"2\"> $text </td>";
                $table[1][2] = "";
            break;


            case '3,6,9':
                $table[0][2] = "<td $attributes rowspan=\"3\"> $text </td>";
                $table[1][2] = "";
                $table[2][2] = "";
            break;


            case '6,9':
                $table[1][2] = "<td $attributes rowspan=\"2\"> $text </td>";
                $table[2][2] = "";
            break;


            case '1,2,4,5':
                $table[0][0] = "<td $attributes rowspan=\"2\" colspan=\"2\"> $text </td>";
                $table[0][1] = "";
                $table[1][0] = "";
                $table[1][1] = "";
            break;


            case '2,3,5,6':
                $table[0][1] = "<td $attributes rowspan=\"2\" colspan=\"2\"> $text </td>";
                $table[0][2] = "";
                $table[1][1] = "";
                $table[1][2] = "";
            break;


            case '4,5,7,8':
                $table[1][0] = "<td $attributes rowspan=\"2\" colspan=\"2\"> $text </td>";
                $table[1][1] = "";
                $table[2][0] = "";
                $table[2][1] = "";
            break;


            case '5,6,8,9':
                $table[1][1] = "<td $attributes rowspan=\"2\" colspan=\"2\"> $text </td>";
                $table[1][2] = "";
                $table[2][1] = "";
                $table[2][2] = "";
            break;


            case '1,2,3,4,5,6,7,8,9':
                $table[0][0] = "<td $attributes rowspan=\"3\" colspan=\"3\"> $text </td>";
                $table[0][1] = "";
                $table[0][2] = "";
                $table[1][0] = "";
                $table[1][1] = "";
                $table[1][2] = "";
                $table[2][0] = "";
                $table[2][1] = "";
                $table[2][2] = "";
            break;


            default:
            echo "Incorrect cells ";
        }
    }
    $t00 = $table[0][0];
    $t01 = $table[0][1];
    $t02 = $table[0][2];

    $t10 = $table[1][0];
    $t11 = $table[1][1];
    $t12 = $table[1][2];

    $t20 = $table[2][0];
    $t21 = $table[2][1];
    $t22 = $table[2][2];

    echo "
         <table>
           <tr>
               $t00
               $t01
               $t02
           </tr>

          <tr>
               $t10
               $t11
               $t12
           </tr>

           <tr>
               $t20
               $t21
               $t22
           </tr>
         </table>";
}

printHtml($arr);
?>

</body>
