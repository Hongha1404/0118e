<h1>Edit {{ $category->name }}</h1>
<p>{{Form::model($category, array( 'method' => 'PATCH', 'url' => ['admin/category', $category->id], 'id' => 'frmCreateCategory'))}}
{{ Form::text('name', null, ['id' => 'txtName', 'class' => 'form-control']) }}</p>
{!! $errors->first('name', '<p style="color:red;">:message</p>') !!}
<p>{{ Form::submit('Save' )}}</p>
{{Form::close()}}