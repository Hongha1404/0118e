<h1>Create new item</h1>
<form action="{{ url('admin/category/add') }}" method="POST">
    @csrf
    Name: <input type="text" name="name">
    <input type="submit">
</form>