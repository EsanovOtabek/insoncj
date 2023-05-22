<div class="modal fade" id="modal-addIssue">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('admin.issues.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Jurnal sonini qo'shish</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body form-group">
                    <label for="number">Jurnal soni</label>
                    <input type="number" name="number"  class="form-control" id="number" required placeholder="Jurnal soni">

                    <label for="year_id">Jurnal yilini tanlang</label>
                    <select class="custom-select" id="year_id" name="year_id">
                        <option disabled selected> -- Tanlang -- </option>
                        @foreach($years as $year)
                            <option value="{{ $year->id }}"> {{ $year->year }} - yil.</option>
                        @endforeach
                    </select>

                    <br>
                    <label for="file">Jurnalni rasmini yuklang</label>
                    <input type="file" name="image"  class="form-control" id="image" required placeholder="Yuklang" accept=".jpg, .png, .jpeg">

                    <br>
                    <label for="file">Jurnalni yuklang</label>
                    <input type="file" name="file"  class="form-control" id="file" required placeholder="Yuklang" accept="application/pdf">
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


