<form class="forms" data-url="{{ url('user-school/'.$data->id) }}" method="POST">
  <div class="modal-header">
    <h4 class="modal-title" id="exampleModalLabel"> @lang('main.form.edit')</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

  </div>
  <div class="modal-body">
    <div class="errors"></div>

    @csrf
    @method('PUT')

    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Nama </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="name" value="{{ $data->name }}" required>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Username </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="username" value="{{ $data->username }}" required>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Password </label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="password" required>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Konfirmasi Password </label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="repeat_password" required>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Cari Sekolah </label>
      <div class="col-sm-9">
        <select class="form-control select2school" style="width: 100%;">
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Sekolah </label>
      <div class="col-sm-9">
        <input type="text" class="form-control school_name"  value="{{ $data->school->name }}" required readonly />
        <input type="hidden" name="school_id" class="form-control school_id" value="{{ $data->school_id }}" />
      </div>
    </div>



  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-reply-all"></i> @lang('main.button.cancel')</button>
    <button type="submit" class="btn btn-success "> <i class="fa fa-paper-plane"></i> @lang('main.button.edit')</button>
  </div>
</form>


<script>
  select2School("select2school","{{ url('autocomplete/school') }}");
</script>

