<table class="table table-hover table-bordered table-striped table-vcenter">
    <thead>
    <tr>
        <th>Provider</th>
        <th>Handset</th>
        <th>Propositie naam</th>
        <th>Geldig T/M</th>
    </tr>
    </thead>
    <tbody>
    @foreach($subscriptionItems as $subscription)
        <tr class="clickable-row" onclick="window.document.location='/subscription/{{ $subscription->id }}/edit';">
            <td>{{ $subscription->provider_name }}</td>
            <td>{{ $subscription->handset_name }}</td>
            <td>{{ $subscription->subscription_name }}</td>
            <td>{{ $subscription->valid_until }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
