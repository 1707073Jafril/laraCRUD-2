<!DOCTYPE html>
<body>
    <h2> Edit Data</h2>
    <form method="post" action="{{route('product.update',['id'=>$id])}}">
        @csrf
        @method('put')
        <div>
            <label>Name : </label>
            <input type="text" name="name" placeholder="Name" value="{{$id->name}}">
        </div>
        <div>
            <label>Quantity : </label>
            <input type="text" name="qty" placeholder="Quantity" value="{{$id->qty}}">
        </div>
        <div>
            <label>Prices : </label>
            <input type="text" name="prices" placeholder="Prices" value="{{$id->prices}}">    
        </div>
        <div>
            <label>Description : </label>
            <input type="text" name="description" placeholder="Description" value="{{$id->description}}">  
        </div>

        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>