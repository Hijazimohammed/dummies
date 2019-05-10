@extends('parent')

@section('main')

<div align="right">
	<a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">إضافة</a>
</div>
<br />

@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p align="right">{{ $message }}</p>
</div>
@endif

  
<table class="table table-bordered table-striped" id="studentModal" role="dialog">
	<tr>
        <th width="35%">الحالة</th>
        <th width="25%">رقم</th>
		<th width="25%">الاسم</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td>
                    <form action="{{ route('admin.destroy', $row->id) }}" method="post" style="display: inline">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                    <a href="{{ route('admin.edit', $row->id) }}" class="btn btn-warning">تعديل</a>
                    <label class='switch'>
                     <input type='checkbox' name="state" value="0" id="state" unchecked>
                    <span class='slider round'></span>
                    </label>
            </td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->name }}</td>
        </tr>
        
			
			
	@endforeach
</table>
{!! $data->links() !!}
@endsection