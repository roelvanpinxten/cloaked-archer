<div class="aboItem">
    <div class="phoneName">
       {{ $subscription->handset_name }}
    </div>
    <div class="phoneImg">
        <img src="/uploads/category/telecom/phoneimages/{{ $subscription->wposid }}.png">
    </div>
    <div class="phonePrice">
        <span class="vanPrice">	{{ $subscription->month_price_total }} </span>
        <br>
        <span class="voorPrice"> {{ $subscription->month_price_action }}</span><span class="pmnd"> p/mnd </span>
        <span class="bijbetaling">Bijbetaling: {{ $subscription->handset_price_with_subscription }}.- </span>
        <img src="/uploads/category/telecom/line.png">
    </div>
    <div class="aboSpecs">
			<span class="aboType">
				{{ $subscription->provider_name }} {{ $subscription->subscription_name }}
			</span>
        <ul>
            <li>
                - {{ $subscription->subscription_minutes }}
            </li>
            <li>
                - <b>{{ $subscription->subscription_data }}</b>
            </li>
            <li>
                - {{ $subscription->subscription_duration }}
            </li>
            <li>
                - Aansluitkosten {{ $subscription->connection_fee }}
            </li>
        </ul>
			<span class="phoneLosPrice">
				Los toestel 8GB voor {{ $subscription->handset_price_without_subscription }}.-
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