<?php include 'header.php' ?>

  <div class="wrapper">
    <?php include "sidebar.php"; ?>
    <div class="page-content">
      <?php include "navbar.php"; ?>
      <div class="container-fluid">
        <div class="card mb-0">
          <div class="card-header">
            <a href="user-create.php" class="btn btn-info"><i class="mdi mdi-account-multiple"></i>Kullanıcı Oluştur</a>
          </div>
          <div class="card-block">
            <table class="table" id="dataTable-user">
              <thead>
              <tr>
                <th>Adı</th>
                <th>Soyadı</th>
                <th>Rolü</th>
                <th>Birimi</th>
                <th>Departman</th>
                <th>Detay</th>
              </tr>
              </thead>
              <tbody>
              <?php
                include "dbsettings.php";
                $sql  = 'SELECT T_USER.PK,T_USER.FIRST_NAME,T_USER.LAST_NAME,T_ROLE.ROLE_NAME,T_UNIT.UNIT_NAME,T_DEPARTMENT.DEPARTMENT_NAME 
                FROM T_USER
                INNER JOIN T_ROLE ON T_USER.ROLE_FK = T_ROLE.PK
                LEFT JOIN T_UNIT ON T_ROLE.UNIT_FK = T_UNIT.PK
                LEFT JOIN T_DEPARTMENT ON T_ROLE.DEPARTMENT_FK = T_DEPARTMENT.PK
                ORDER BY T_USER.FIRST_NAME,T_USER.LAST_NAME';
                $stmt = oci_parse($conn, $sql);
                $r    = oci_execute($stmt);
                while ($row = oci_fetch_array($stmt, OCI_RETURN_NULLS + OCI_ASSOC)) {
                  echo '<tr>';
                  echo '<td>'.$row['FIRST_NAME'].'</td>';
                  echo '<td>'.$row['LAST_NAME'].'</td>';
                  echo '<td>'.$row['ROLE_NAME'].'</td>';
                  echo '<td>'.($row['UNIT_NAME']!=null?$row['UNIT_NAME']:'Birime bağlı değil').'</td>';
                  echo '<td>'.($row['DEPARTMENT_NAME']!=null?$row['DEPARTMENT_NAME']:'Departmana bağlı değil').'</td>';
                  echo '
                     <td class="text-xs-center">
                      <a href="user-detail.php" class="table-icon" rel="tooltip" title="Detay"><i class="mdi mdi-magnify"></i></a>
                     </td>';
                echo '<tr>';
              }
            ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'footer.php' ?>