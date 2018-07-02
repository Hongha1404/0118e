<h1>Category List</h1>
<a href="category/add">Create new item</a>
@if(Session::has('success'))
    <p style="color: #1e7e34">{{ Session::get('success') }}</p>
    @endif
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Parent</th>
        <th>Action</th>
    </tr>
    @foreach($list as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->parent_id}}</td>
            <td><a href="{{'category/'.$item->id.'/edit'}}">Edit</a>|<a href="{{'category/'.$item->id.'/destroy'}}">Delele</a></td>
        </tr>
    @endforeach
</table>
