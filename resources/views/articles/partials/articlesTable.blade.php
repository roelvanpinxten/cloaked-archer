<table class="table table-hover table-bordered table-striped table-vcenter">
    <thead>
    <tr>
        <th>Provider</th>
        <th>Naam</th>
        <th>Abonnement</th>
        <th>Type</th>
    </tr>
    </thead>
    <tbody>
    @foreach($articleItems as $article)
        <tr class="clickable-row" onclick="window.document.location='/articles/{{ $article->id }}/edit';">
            <td>{{ $article->provider_name }}</td>
            <td>{{ $article->article_name }}</td>
            <td>{{ $article->subscription }}</td>
            <td>{{ $article->subscription_type }}</td>
        </tr>
    @endforeach
    </tbody>
</table>