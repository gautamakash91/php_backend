<html>
  <head>
  
  </head>
  <body>
    <table>
      <tr>
        <td>
          S.no
        </td>
      </tr>
      <?php
        for($i=1; $i<=10; $i++){
          echo "<tr>";
          echo "<td>";
          echo $i;
          echo "</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>