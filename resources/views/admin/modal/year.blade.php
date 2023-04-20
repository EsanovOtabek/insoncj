<div class="modal fade" id="modal-addYear">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('admin.years.store') }}">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Jurnal yilini qo'shish</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body form-group">
                    <input type="number" name="year"  class="form-control" id="name" required placeholder="Jurnal yili">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Bekor qilish</button>
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


