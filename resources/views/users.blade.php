<h1>
    users data
</h1>


@if(isset($results))
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
        </tr>


    @foreach($results as $result)
        <tr>
            <td>{{$result->id}}</td>
            <td>{{$result->name}}</td>
            <td>{{$result->email}}</td>
            <td><a href="/users/delete/{{$result->id}}">delete</a> </td>
        </tr>
    @endforeach
    </table>
@endif
