@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'subscription'])
@stop()

@section('content')

<h1>Tele2</h1>

@foreach ($subscription as $sub)
    @if ($sub->provider_name == "Tele2")
    <div class="aboItem">
        <div class="phoneName">
           {{ $sub->handset_name }}
        </div>
        <div class="phoneImg">
            <img src="https://www.dixons.nl/uploads/category/telecom/phoneimages/{{ $sub->wposid }}.png">
        </div>
        <div class="phonePrice">
            <span class="vanPrice">	{{ $sub->month_price_total }} </span>
            <br>
            <span class="voorPrice"> {{ $sub->month_price_action }}</span><span class="pmnd"> p/mnd </span>
            <span class="bijbetaling">Bijbetaling: {{ $sub->handset_price_with_subscription }}.- </span>
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
                            - Abonnement {{ $sub->month_price_subscription }}.- p/mnd
                        </li>
                        <li>
                            - Maandbedrag telefoon {{ $sub->month_price_handset }}.- p/mnd
                        </li>
                    @endif

                <li>
                    - Aansluitkosten {{ $sub->connection_fee }}
                </li>
            </ul>
                <span class="phoneLosPrice">
                    Los toestel 8GB voor {{ $sub->handset_price_without_subscription }}.-
                </span>
            <div class="afhaal-button">
                <a class="winkelmandjeButton" href="/apple/iphone/iphone-5c">
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
    @endif
@endforeach

<h1 style="clear:both;">KPN</h1>

@foreach ($subscription as $sub)
    @if ($sub->provider_name == "KPN")
        <div class="aboItem">
            <div class="phoneName">
                {{ $sub->handset_name }}
            </div>
            <div class="phoneImg">
                <img src="https://www.dixons.nl/uploads/category/telecom/phoneimages/{{ $sub->wposid }}.png">
            </div>
            <div class="phonePrice">
                <span class="vanPrice">	{{ $sub->month_price_total }} </span>
                <br>
                <span class="voorPrice"> {{ $sub->month_price_action }}</span><span class="pmnd"> p/mnd </span>
                <span class="bijbetaling">Bijbetaling: {{ $sub->handset_price_with_subscription }}.- </span>
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
                            - Abonnement {{ $sub->month_price_subscription }}.- p/mnd
                        </li>
                        <li>
                            - Maandbedrag telefoon {{ $sub->month_price_handset }}.- p/mnd
                        </li>
                    @endif

                    <li>
                        - Aansluitkosten {{ $sub->connection_fee }}
                    </li>
                </ul>
                <span class="phoneLosPrice">
                    Los toestel 8GB voor {{ $sub->handset_price_without_subscription }}.-
                </span>
                <div class="afhaal-button">
                    <a class="winkelmandjeButton" href="/apple/iphone/iphone-5c">
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
    @endif
@endforeach

@stop()