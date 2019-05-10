@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('admin.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('admin.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">أدخل الاسم</label>
		<div class="col-md-8">
			<input type="text" name="name" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">أدخل الرقم</label>
		<div class="col-md-8">
			<input type="text" name="email" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	{{--<div class="form-group">
		<label class='switch'>
            <input type='checkbox' name="state" value="0">
             <span class='slider round'></span>
            </label>
	</div>--}}
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

@endsection



