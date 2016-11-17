<?php include "header.php"; ?>

  <div class="wrapper">
    <?php include "sidebar.php"; ?>
    <div class="page-content">
      <?php include "navbar.php"; ?>
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <a href="javascript:void(0);" class="btn btn-info create"><i class="mdi mdi-library"></i>Departman Oluştur</a>
            <form class="form-create form-inline hidden" method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Departman Adı Giriniz">
              </div>
              <button type="submit" class="btn btn-success">Kaydet</button>
              <button type="button" class="btn btn-danger">İptal</button>
            </form>
          </div>
          <div class="card-block">
            <table class="table" id="dataTable-department">
              <thead>
              <tr>
                <th>Departman Adı</th>
                <th>Çalışan Sayısı</th>
                <th>İşlemler</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Bilişim Departmanı</td>
                <td>11</td>
                <td class="text-xs-center">
                  <a href="" class="table-icon" rel="tooltip" title="Güncelle" data-toggle="modal" data-target="#updateModal" data-department="Bilişim Departmanı"><i class="mdi mdi-autorenew"></i></a>
                  <a href="" class="table-icon" rel="tooltip" title="Sil" data-toggle="modal" data-target="#deleteModal"><i class="mdi mdi-delete"></i></a>
                </td>
              </tr>
              <tr>
                <td>Muhasebe Departmanı</td>
                <td>6</td>
                <td class="text-xs-center">
                  <a href="" class="table-icon" rel="tooltip" title="Güncelle" data-toggle="modal" data-target="#updateModal" data-department="Bilişim Departmanı"><i class="mdi mdi-autorenew"></i></a>
                  <a href="" class="table-icon" rel="tooltip" title="Sil" data-toggle="modal" data-target="#deleteModal"><i class="mdi mdi-delete"></i></a>
                </td>
              </tr>
              <tr>
                <td>Halkla İlişkiler Departmanı</td>
                <td>4</td>
                <td class="text-xs-center">
                  <a href="" class="table-icon" rel="tooltip" title="Güncelle" data-toggle="modal" data-target="#updateModal" data-department="Bilişim Departmanı"><i class="mdi mdi-autorenew"></i></a>
                  <a href="" class="table-icon" rel="tooltip" title="Sil" data-toggle="modal" data-target="#deleteModal"><i class="mdi mdi-delete"></i></a>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="mdi mdi-close"></i>
          </button>
          <h4 class="modal-title" id="updateModalLabel">Departman Güncelle</h4>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="form-group">
              <label for="updateDepartment" class="form-control-label">Departman Adı:</label>
              <input type="text" class="form-control" id="updateDepartment">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
          <button type="button" class="btn btn-success">Güncelle</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="mdi mdi-close"></i>
          </button>
          <h4 class="modal-title" id="deleteModalLabel">Silme Onayı</h4>
        </div>
        <div class="modal-body">
          <p>Silmek istediğinize emin misiniz?</p>
        </div>
        <div class="modal-footer">
          <form method="post">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            <button type="submit" class="btn btn-danger">Sil</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php include "footer.php"; ?>