<h1>Category List</h1>
<a href="category/add">Create new item</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Parent</th>
    </tr>
    @foreach($list as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->parent_id}}</td>
        </tr>
    @endforeach
</table>
