<table class="table table-responsive">
    <thead>
    <th>Id</th>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->id !!}</td>
			<td>{!! $product->name !!}</td>
			<td>{!! $product->price !!}</td>
			<td>{!! $product->quantity !!}</td>
			<td>{!! $product->created_at !!}</td>
			<td>{!! $product->updated_at !!}</td>
            <td>
                <a href="{!! route('products.edit', [$product->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('products.delete', [$product->id]) !!}" onclick="return confirm('Are you sure wants to delete this Product?')">
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>