<table class="table table-responsive">
    <thead>
    <th>Id</th>
			<th>Name</th>
			<th>Anesthesia</th>
			<th>Duration</th>
			<th>Price</th>
			<th>Additional</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($modules as $module)
        <tr>
            <td>{!! $module->id !!}</td>
			<td>{!! $module->name !!}</td>
			<td>{!! $module->anesthesia !!}</td>
			<td>{!! $module->duration !!}</td>
			<td>{!! $module->price !!}</td>
			<td>{!! $module->additional !!}</td>
			<td>{!! $module->created_at !!}</td>
			<td>{!! $module->updated_at !!}</td>
            <td>
                <a href="{!! route('modules.edit', [$module->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('modules.delete', [$module->id]) !!}" onclick="return confirm('Are you sure wants to delete this Module?')">
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>