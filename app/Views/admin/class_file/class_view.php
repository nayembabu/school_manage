
<div class="col-12">

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Data Table With Full Features</h3>
        <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >Add Class</div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Class Name</th>
                        <th>Class Roman</th>
                        <th>Numerical</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sl = 1; foreach ($class as $single) { ?>
                        <tr>
                            <td><?= $sl; ?></td>
                            <td><?= $single['class_name_s']; ?></td>
                            <td><?= $single['class_roman']; ?></td>
                            <td><?= $single['numerical']; ?></td>
                            <td><a class="btn btn-sm btn-success" ><i class="fa fa-eye"></i></a> <a class="btn btn-sm btn-dark" ><i class="fa fa-pencil"></i></a> </td>
                        </tr>
                    <?php $sl++; } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>
    <!-- /.box -->

</div>
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="class/insert" method="post">
      <div class="modal-body">

            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Class Name</span>
                <input type="text" class="form-control" name="className" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Class Roman Type</span>
                <input type="text" class="form-control" name="classRomans" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg">Class Numerical Type </span>
                <input type="text" class="form-control" name="classNosss" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
