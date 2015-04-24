<div class="aboItem">
    <div class="phoneName">
        {{ $sub->handset_name }}
    </div>
    <div class="phoneImg">
        <img src="https://www.dixons.nl//images/110/150/0/{{ $sub->wposid }}.png">
    </div>
    <div class="phonePrice">
        <span class="vanPrice">	@if($sub->month_price_total <> 0){{$sub->month_price_total}}@endif </span>
        <br>
                     <span class="voorPrice">{{split_number_int($sub->month_price_action)}}@if(split_number_fraction($sub->month_price_action) == 0).-
                         @else<span>.{{split_number_fraction($sub->month_price_action)}}</span>
                         @endif</span>
        <span class="pmnd"> p/mnd </span>
        <span class="bijbetaling">Bijbetaling: {{ split_number_int($sub->handset_price_with_subscription) }}.- </span>
        <img src="https://www.dixons.nl/uploads/category/telecom/line.png">
    </div>
    <div class="aboSpecs">
                <span class="aboType">
                    {{ $sub->provider_name }} {{ $sub->subscription_name }}
                </span>
        <ul>
            <li>
                - {{ $sub->subscription_minutes }}
            </li>
            <li>
                - <b>{{ $sub->subscription_data }}</b>
            </li>
            <li>
                - {{ $sub->subscription_duration }}
            </li>

            <!--// If the there is no handset price do not show. -->
            @if ($sub->month_price_handset > 0)
                <li>
                    - Abonnement {{split_number_int($sub->month_price_subscription)}}@if(split_number_fraction($sub->month_price_subscription) == 0).- p/mnd
                    @else.{{split_number_fraction($sub->month_price_subscription)}} p/mnd @endif
                </li>
                <li>
                    - Maandbedrag telefoon {{split_number_int($sub->month_price_handset)}}@if(split_number_fraction($sub->month_price_handset) == 0).- p/mnd
                    @else.{{split_number_fraction($sub->month_price_handset)}} p/mnd @endif
                </li>
            @endif

            <li>
                - Aansluitkosten {{split_number_int($sub->connection_fee)}}@if(split_number_fraction($sub->connection_fee) == 0).-
                @else.{{split_number_fraction($sub->connection_fee)}}@endif
            </li>
        </ul>
                <span class="phoneLosPrice">
                    Los toestel voor {{split_number_int($sub->handset_price_without_subscription)}}@if(split_number_fraction($sub->handset_price_without_subscription) == 0).-
                    @else.{{split_number_fraction($sub->handset_price_without_subscription)}}</span>
                    @endif

        <div class="afhaal-button">
            <a class="winkelmandjeButton" href="http://www.dixons.nl/catalog/search/?q={{ $sub->wposid }}">
                AFHALEN IN EEN WINKEL
            </a>
        </div>
                <span class="extraInfo">
                    &nbsp;&nbsp;&nbsp;&nbsp;Abonnementen alleen in onze winkels.
                    <br>
                    Reserveer je nieuwe smartphone bij jouw dixons.
                </span>
    </div>
</div>