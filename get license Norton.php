<html>

<head>

<title></title>

<style>

    body{

        background: #003300;

        font-size: 20px;

        color: #ddd;

        margin: 0;

        word-spacing: 2px;

        padding: 5px 10px 5px 10px;

        text-align: center;

    }

    input{

        padding: 10px 20px 10px 20px;

        font-size: 20px;

        text-align: center;

        inline: none;

        outline: none;

    }

</style>

</head>

<body>

        <form action="" method="GET">

            <tr>

        <td colspan="4">

            <input type="text" name="min" value="" placeholder="Min" />

        </td>

        <td colspan="4">

            <input type="text" name="max" value="" placeholder="Max" />

        </td>

        <td colspan="4">

            <input type="submit" value="GET" />

        </td>

        </tr>

        </form>

</body>

</html>

<?php

</script>

<?php

if(isset($_GET['min']) && isset($_GET['max']))

{

set_time_limit(0);

$min = $_GET['min'];

$max = $_GET['max'];

for ($i=$min; $i<=$max; $i++)

{

$url = 'https://www.complete360.co.za/index.php/subscriber/SubsProducts/'.$i;

$ct = file_get_contents($url);

if (stripos($ct, 'We could not get the installed Device details. Please log in again and retry or contact support.')===false || stripos($ct, 'Sorry, you do not have access to that product.')===false) 

{

echo $ct . "<br />";

}

}

} else {

$url = 'https://www.complete360.co.za/index.php/subscriber/SubsProducts/60000';

$ct = file_get_contents($url);

echo $ct . "<br />";

}

?>
