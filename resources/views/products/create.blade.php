<!DOCTYPE html>
<body>
    <form method="POST" action="{{route('product.store')}}">
        @csrf
        <div>
            <label>Name : </label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label>Quantity : </label>
            <input type="text" name="qty" placeholder="Quantity">
        </div>
        <div>
            <label>Prices : </label>
            <input type="text" name="prices" placeholder="Prices">    
        </div>
        <div>
            <label>Description : </label>
            <input type="text" name="description" placeholder="Description">  
        </div>

        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>