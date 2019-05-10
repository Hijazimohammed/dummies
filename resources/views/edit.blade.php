@extends('parent')

@section('main')
<div align="right">
	<a href="{{ route('admin.index') }}" class="btn btn-default">للخلف</a>
</div>
<br />

<form method="post" action="{{ route('admin.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">أدخل الأسم</label>
		<div class="col-md-8">
			<input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">أدخل رقم الجوال</label>
		<div class="col-md-8">
			<input type="text" name="email" value="{{ $data->email }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right"> الحالة</label>
		<label class='switch'>
                                <input type='checkbox' value="{{ $data->state }}" Name="state">
                                <span class='slider round'></span>
                                </label>
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="تعديل" />
	</div>
</form>
@endsection



