<table class="table table-hover table-bordered table-striped table-vcenter">
    <thead>
    <tr>
        <th>Naam</th>
        <th>Commissie</th>
        <th>Handset Categorie</th>
        <th>Bewerken</th>
    </tr>
    </thead>
    <tbody>
    @foreach($subscriptionItems as $subscription)
        <tr>
            <td>{{ $subscription->name }}</td>
            <td>{{ $subscription->commission }}</td>
            <td>{{ $subscription->handset_category }}</td>
            <td><a href="/provider/{{ $subscription->id }}/edit" class="btn btn-info" role="button">Bewerk</a></td>
        </tr>
    @endforeach
    </tbody>
</table>