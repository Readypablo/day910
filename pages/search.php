
<?php

require_once 'bd_connect/db.php';
if (isset($_POST['query_find'])) {
    $query_find = mysqli_real_escape_string($con, $_POST['query_find']);
    $query = mysqli_query($con, "SELECT * FROM collective where first_name like '%$query_find%' or last_name like '%$query_find%' or experience like '%$query_find%' order by img limit 20");
    $output = '';
    if ($query->num_rows > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $output .= '<tr>
    <td>' . $row['first_name'] . '</td>
    <td>' . $row['last_name'] . '</td>
    <td> ' . $row['experience'] . '</td>
    <td> <img src="../img/' . $row['img'] . '" class="tabletka"</td>
  </tr>';
        }
    } else {
        $output = '
  <tr>
    <td colspan="4"> No result found. </td>   
  </tr>';
    }
    echo $output;
}
?>


