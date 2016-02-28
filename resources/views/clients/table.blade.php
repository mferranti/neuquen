<table class="table table-responsive">
    <thead>
    <th>Id</th>
			<th>Name</th>
			<th>Lastname</th>
			<th>Dni</th>
			<th>Cuit</th>
			<th>Phone</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{!! $client->id !!}</td>
			<td>{!! $client->name !!}</td>
			<td>{!! $client->lastname !!}</td>
			<td>{!! $client->dni !!}</td>
			<td>{!! $client->cuit !!}</td>
			<td>{!! $client->phone !!}</td>
			<td>{!! $client->created_at !!}</td>
			<td>{!! $client->updated_at !!}</td>
            <td>
                <a href="{!! route('clients.edit', [$client->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('clients.delete', [$client->id]) !!}" onclick="return confirm('Are you sure wants to delete this Client?')">
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>