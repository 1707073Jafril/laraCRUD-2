<html>
    <body> 
        <h1>Product</h1>
        <h2>
            <a href="{{route('product.create')}}">Add Product</a>
        </h2>
        <div>
            @if(session()-> has('success'))
                <div>
                    Product Updated Succesfully!
                </div>
            @endif
        </div>
        <div>
            @if(session()-> has('del_success'))
                <div>
                    Product Deleted Succesfully!
                </div>
            @endif
        </div>
        <div>
            <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->prices}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="{{route('product.edit',['id'=>$product->id])}}">
                            Edit
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.delete',['id'=>$product->id])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete"> 
                        </form>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
    </body>
</html>