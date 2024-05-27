 {{-- Additional Div Start   --}}
 <div class="h-[80px] bg-white w-full"></div>
 {{-- Additional Div End   --}}

 {{-- Hero Section Start  --}}
 <section class="2xl:h-[750px] xl:h-[600px] lg:h-[500px] md:h-[400px] h-[250px] flex items-center justify-center xl:px-0 md:px-10 px-5 relative">
     <div class="container mx-auto" style="z-index: 10">
         <div class="w-full">
             <h1 class="text-[20px] font-bold text-white text-center md:block hidden">HOME/BLOG</h1>
             <h2 class="text-white font-bold lg:text-[56px] md:text-[40px] text-[20px] md:text-center text-left">
                 Hear from us
             </h2>
         </div>
     </div>
     <div class="new-overlay-right">
     </div>
     <img class="absolute top-0 left-0 h-full w-full object-cover"
         src={{ asset('rentit/assets/img/updated/blog-banner.jpg') }}>
 </section>
 {{-- Hero Section End   --}}

 {{-- post Archive Section Start  --}}
 <section class="md:pt-[56px] md:pb-0 pt-[53px] pb-[53px]  xl:px-0 md:px-10 px-5 relative">
    <div class="container mx-auto lg:w-[80%] w-full justify-center">
        <div class="shadow-xl md:rounded-[30px] rounded-[24px]">
            @if(isset($post->img) && $post->img > 0)
            <div class="md:rounded-t-[30px] rounded-t-[24px] md:h-[300px] h-[240px] overflow-hidden">
                <img class="h-full w-full object-cover" src={{ the_image_url($post->img,'thumbnail-870x370') }}
                    alt="">
            </div>
            @endif
            <div
                class="md:p-[30px] p-[24px] flex flex-col md:gap-3 gap-[10px] md:rounded-b-[30px] rounded-b-[24px] overflow-hidden bg-white">
                <span class="md:text-[18px] text-[14px] text-[#3A386F] font-medium">{{$post->created_at->format('F j') ?? ''}}</span>
                <h4 class="md:text-[24px] text-[20px] text-[#222222] font-bold">{!! $post->title ?? '' !!}</h4>
                <div class="blog-details-div">
                    {!! $post->text ?? '' !!}
                </div>
            </div>
        </div>
    </div>
    <img class="vector-right" src="{{ asset('rentit/assets/img/updated/vector-2.png') }}" alt="">
 </section>
 {{-- post Archive Section End --}}
