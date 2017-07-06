@if (app()->environment('production') && $adClient = config('services.google.ad_sense.client'))
    <div style="border-top: 2px solid #747474;margin-top:15px;padding-top:15px;">
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="{{ $adClient }}"
             data-ad-slot="{{ config('services.google.ad_sense.unit_sidebar') }}"
             data-ad-format="auto"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
@endif
