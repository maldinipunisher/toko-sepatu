<div class="bg-light px-4" style="padding-top: 60px">
    <h3 class="text-dark">Harga Spesial</h3>
    <div class="row row-cols-1 row-cols-sm-5 g-4 py-4">
        @foreach ($products as $product)
            <div class="col">
                <div class="card h-100">
                    <img src="@if($product->product_photo != null) {{$product->profile_photo}} @else images/no_image.png @endif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b>
                            <h5 class="card-title">{{ $product->name }}</h5>
                        </b>
                        <br>
                        <p class="card-text">Warna : {{$product->product_id}}</p>
                        <p class="card-text">Ukuran : 38-42</p>
                        <p class="card-text">Kategori : {{ $product->categories->name }}</p>
                        <b>
                            <p class="pt-n3">Rp. {{ $product->price }}</p>
                        </b>
                        <form action="/add" method="post">
                            @csrf

                            <button name="product_id" value="{{ $product->product_id }}" class="border-0 bg-white"
                                type="submit"><i
                                    class="bi bi-plus-lg position-absolute bottom-0 end-0 px-3 p-3 text-primary">Tambahkan</i></button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
<hr class="mb-n1">
</div>
