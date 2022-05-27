<div id="{{$recommendUid}}" class="o-grid">
      @if($recommendLinkList)
            @foreach($recommendLinkList as $recommendLink)
                @include('partials.card', [
                    "heading" => $recommendLink->recommendLinkLabel,
                    "content" => "Some text to e replaced",
                    "href" => $recommendLink->recommendLinkTarget,
                    "gridColumns" => $gridColumns,
                ])
            @endforeach
      @endif

      <!-- Preloader -->
      @if($enableRekAI)
        @include('partials.card-preload', [
            'rekaiNumberOfRecommendation' => $rekaiNumberOfRecommendation
        ])
      @endif

      @if(!$enableRekAI && !$recommendLinkList)
        @include('partials.notice')
      @endif
</div>
