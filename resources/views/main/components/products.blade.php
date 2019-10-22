<div class="container">
    <h2>Products: </h2>
    @foreach ($products as $product)
        <div>{{ $product->name }}</div>
    @endforeach

    {{ $products->links() }}
</div>


