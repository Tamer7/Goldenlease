@include('theme:rentit::layouts.header')

<!-- /HEADER -->

<!-- CONTENT AREA -->
<div class="content-area pb-edit-content" data-p-id="{{app( 'request' )->route()->controller->page_id ?? ''}}">

  {!! $content ?? '' !!}
  </div>
  <!-- /CONTENT AREA -->
  <!-- FOOTER -->
  @include('theme:rentit::footer')
  <!-- /FOOTER -->

  <!-- /WRAPPER -->

{!!   $lr_footer ?? '' !!}
  </div>
  </body>
  </html>