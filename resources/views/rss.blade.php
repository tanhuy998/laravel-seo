

<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">

<channel>
  <title>{{ $category->name }} - eFashion RSS</title>
  <link>{{ route('home') }}</link>
  <description>eFashion - Modern Fashion</description>
@foreach($products as $product)
<item>
    <title>{{ $product->name }}</title>
    <link>{{ route('product', ['id' => $product->slug]) }}</link>
    <description>{{ $product->detail }}</description>
  </item>
@endforeach
  
</channel>

</rss> 