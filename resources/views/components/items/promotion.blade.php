@if($promotion)
<x-ui.block
    :title="$promotion->name"
    :description="$promotion->description"
    :to="$promotion->link">
    <div class="block__catalog catalogBlock">
        @foreach($promotion->getProducts() as $product)
            @include('components.items.product')
        @endforeach
    </div>
</x-ui.block>
@endif
