<h1>Create new item</h1>
{{ Form::open(array('method' => 'POST', 'url' => 'admin/category/add', 'id' => 'frmCreateCategory')) }}
<p><label>Name:</label>
    {{ Form::text('name', null, ['id' => 'txtName', 'class' => 'form-control']) }}</p>
    {!! $errors->first('name', '<p style="color:red;">:message</p>') !!}
    <p>{{ Form::submit('Save' )}}</p>
{{ Form::close() }}
