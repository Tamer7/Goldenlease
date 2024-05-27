@include('theme:rentit::layouts.header')

<!-- /HEADER -->

<!-- CONTENT AREA -->
<div class="content-area pb-edit-content" data-p-id="{{app( 'request' )->route()->controller->page_id ?? ''}}">

  {!! $content ?? '' !!}

</div>
<!-- /CONTENT AREA -->

<!-- FOOTER -->
@include('theme:rentit::footer')
{!!   $lr_footer ?? '' !!}
<!-- /FOOTER -->
</div>
</body>
</html>