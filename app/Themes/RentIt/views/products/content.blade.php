<style>
    .product-select{
        position: relative;
    }
    .product-select .select2-container--classic .select2-selection--single {
        height: 56px !important;
        border: 1px solid #222222 !important;
        border-radius: 50px !important;
        background-color: transparent !important;
        background-image: none !important;
        margin-top: 12px !important;
    }

    .product-select .select2-container--classic .select2-selection--single .select2-selection__rendered {
        padding: 14px 32px !important;
    }

    .product-select .select2-container--classic .select2-selection--single .select2-selection__arrow {
        height: 56px !important;
        background-image: none !important;
        background-color: transparent !important;
        padding: 0px 20px;
        border-left: none !important;
        margin-top: 12px !important;
    }
    .product-select .select2-container--classic .select2-selection--single .select2-selection__arrow b {
      display: none !important;
    }

    .product-select .select2-container--classic .select2-selection--single:focus {
        border: 1px solid #3A386F !important;
    }

    .product-select .select2-container--classic .select2-selection--single .select2-selection__clear {
        height: 56px !important;
        margin-right: 40px !important;
        font-size: 20px !important;
        display: none !important;
    }

    .product-select .select2-dropdown {
        border-color: #222222 !important;
        padding: 20px !important;
        margin-top: 10px !important;
        border-radius: 10px !important;
    }
</style>
{{-- Additional Div Start   --}}
<div class="h-[80px] bg-white w-full"></div>
{{-- Additional Div End   --}}

{{-- Hero Section Start  --}}
<section
    class="2xl:h-[750px] xl:h-[600px] lg:h-[500px] md:h-[400px] h-[250px] flex items-center justify-center xl:px-0 md:px-10 px-5 relative">
    <div class="container mx-auto" style="z-index: 10">
        <div class="w-full">
            <h1 class="text-[20px] font-bold text-white text-center md:block hidden">HOME/CARS</h1>
            <h2 class="text-white font-bold lg:text-[56px] md:text-[40px] text-[20px] md:text-center text-left">
                {{ __('Our Impressive Fleet') }}
            </h2>
        </div>
    </div>
    <div class="new-overlay-right">
    </div>
    <img class="absolute top-0 left-0 h-full w-full object-cover"
        src={{ asset('rentit/assets/img/updated/products-banner.jpg') }} alt="">
</section>
{{-- Hero Section End   --}}

{{-- Product Archive Section Start  --}}
<section class="lg:pt-[60px] pt-[53px] lg:pb-0 pb-[53px] xl:px-0 md:px-10 px-5 relative">
    <div class="container mx-auto lg:w-[80%] w-full">
        {{-- showing result  --}}
        <div class="flex items-center justify-between text-[#888888]">
            <h6 class="font-medium text-[18px]">Showing<span> </span>{{ $products->firstItem() }} -
                <span>{{ $products->lastItem() }} </span>of <span>{{ $products->total() }} </span>result</h6>
            <div class="text-[14px] relative inline-block w-[145px] h-[37px]">
                <select
                   class="block appearance-none w-full p-[10px]  border-none focus:outline-none bg-[#F8F8F8] cursor-pointer" id="sortingSelect">
                   <option value="default">Default Sorting</option>
                   <option value="highest">Highest</option>
                   <option value="lowest">Lowest</option>
               </select>
                <div class="pointer-events-none absolute inset-y-0 right-1 flex items-center px-2 text-gray-700">
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.00002 4.56252C3.91211 4.56252 3.82411 4.52892 3.75699 4.4618L0.31949 1.0243C0.18517 0.889982 0.18517 0.672475 0.31949 0.53824C0.453811 0.404006 0.671318 0.40392 0.805553 0.53824L4.00002 3.73271L7.19449 0.53824C7.32881 0.40392 7.54632 0.40392 7.68055 0.53824C7.81479 0.672561 7.81487 0.890068 7.68055 1.0243L4.24305 4.4618C4.17594 4.52892 4.08794 4.56252 4.00002 4.56252Z"
                            fill="#222222" />
                    </svg>
                </div>
            </div>
        </div>
        {{-- product Archive & Filter  --}}
        <div class="grid lg:grid-cols-3 grid-cols-1 xl:gap-[60px] gap-10 mt-8">
            {{-- product Archive  --}}
            <div class="lg:col-span-2 col-span-3 lg:order-1 order-2">
                @if ($products && $products->total() > 0)
                    <div class="grid md:grid-cols-2 grid-cols-1 xl:gap-[48px] gap-[30px]" id="productContainer">
                        @foreach ($products as $product)
                            @php
                                $product_meta = getProductMetas($product);
                            @endphp
                            <div class="p-3 rounded-[10px] bg-[#F8F8F8] group hover:bg-[#B19158] cursor-pointer product-card" data-price="{{ $product->price }}">
                                @if (isset($product->img) && $product->img > 0)
                                    <div class="bg-white md:h-[204px]">
                                        <a href="{{ route('products.show', ['products' => $product->alias]) }}">
                                            <img class="h-full w-full object-contain relative"
                                                src="{{ the_image_url($product->img) }}"
                                                alt="{{ $product->title ?? '' }}">
                                        </a>
                                    </div>
                                @endif
                                <div class="pt-8 pb-3 text-[#222222] group-hover:text-white">
                                    <h4 class="h-[60px] text-[24px] font-bold ">{{ $product->title ?? '' }}</h4>
                                    <div class="flex justify-between gap-4 items-end mt-4">
                                        <div class="flex flex-col">
                                            <span
                                                class="text-[#9a9a9a] group-hover:text-[#d8c8ab] text-[16px] font-semibold">
                                                {{ __('Starting at') }}
                                            </span>
                                            <h6 class="text-[24px] font-bold">{!! ec_price($product->final_cost ?? $product->price) !!}
                                                {{ __('/day') }}</h6>
                                        </div>
                                        <a class="text-white text-[16px] font-bold py-[10px] px-[26px] rounded-full bg-[#3A386F] group-hover:bg-white group-hover:text-[#3A386F]"
                                            href="{{ route('products.show', ['products' => $product->alias]) }}">
                                            Rent
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- pagaination  --}}
                    @if ($products->lastPage() > 1)
                        <div class="flex justify-center mt-[48px]">
                            <ul class="flex items-center gap-[48px] text-[20px] font-semibold text-[#7a7a7a]">
                                @if ($products->currentPage() !== 1)
                                    <li class="hover:text-[#3A386F]"><a
                                            href="{{ $products->url($products->currentPage() - 1) }}">
                                            < </a>
                                    </li>
                                @endif
                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    @if ($products->currentPage() == $i)
                                        <li class="text-[#3A386F]">
                                            {{ $i }}
                                        </li>
                                    @else
                                        <li><a href="{{ $products->url($i) }}">{{ $i }}</a></li>
                                    @endif
                                @endfor
                                @if ($products->currentPage() !== $products->lastPage())
                                    <li class="hover:text-[#3A386F]"><a
                                            href="{{ $products->url($products->currentPage() + 1) }}"> > </a></li>
                                @endif
                            </ul>
                        </div>
                    @endif
                @endif
            </div>
            {{-- Filter --}}
            <div class="lg:col-span-1 col-span-3 lg:order-2 order-1">
                <form action="{{ route('products.index') }}" method="get">
                    {!! $sidebar !!}
                </form>
            </div>
        </div>
    </div>
    <img class="vector-right" src="{{ asset('rentit/assets/img/updated/vector-2.png') }}" alt="">
</section>
{{-- Product Archive Section End  --}}

<script>
    $(document).ready(function() {
        $('#pickupLocation').select2({
            theme: 'classic',
            width: '100%',
            placeholder: 'Pickup Location',
            allowClear: true,
            closeOnSelect: true
        });
        $('#pickupTime').select2({
            theme: 'classic',
            width: '100%',
            placeholder: 'Pickup Time',
            allowClear: true,
            closeOnSelect: true
        });
        $('#dropOffLocationSelect').select2({
            theme: 'classic',
            width: '100%',
            placeholder: 'Drop off Location',
            allowClear: true,
            closeOnSelect: true
        });
        $('#dropOffTime').select2({
            theme: 'classic',
            width: '100%',
            placeholder: 'Drop off Time',
            allowClear: true,
            closeOnSelect: true
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sortingSelect = document.getElementById('sortingSelect');
        const productContainer = document.getElementById('productContainer');
        const defaultProductCards = Array.from(productContainer.getElementsByClassName('product-card'));
        const productCards = Array.from(productContainer.getElementsByClassName('product-card'));

        sortingSelect.addEventListener('change', function() {
            const sortValue = sortingSelect.value;
            sortProducts(sortValue);
        });

        function sortProducts(sort) {
            let sortedProducts;
            if (sort == 'highest') {
                sortedProducts = productCards.sort((a, b) => parseFloat(b.dataset.price) - parseFloat(a.dataset.price));
            }
            else if (sort == 'lowest') {
                sortedProducts = productCards.sort((a, b) => parseFloat(a.dataset.price) - parseFloat(b.dataset.price));
            }
            else {
                sortedProducts = defaultProductCards;
            }
            productContainer.innerHTML = '';
            sortedProducts.forEach(product => productContainer.appendChild(product));
        }
        
    });
</script>