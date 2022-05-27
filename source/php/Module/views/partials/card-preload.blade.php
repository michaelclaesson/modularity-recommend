  @for ($i = 0; $i < $rekaiNumberOfRecommendation; $i++)
      <div class="c-card o-grid-{{ $gridColumns }} rek-ai-preload-remove">
          <div class="c-card__body">
          @typography([
            'element' => 'h4',
            'classList' => ['u-preloader'],
            'attributeList' => [
              'style' => 'width: ' .rand(30, 90). '%; border-radius: 10px;'
            ]
          ])
          <br>
          @endtypography
          @typography([
            'element' => 'p',
            'classList' => ['u-preloader'],
            'attributeList' => [
              'style' => 'border-radius: 10px;'
            ]
          ])
          <br><br>
          @endtypography
          </div>
      </div>
  @endfor
