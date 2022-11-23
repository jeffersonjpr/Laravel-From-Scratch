<h1>{{ $heading }}</h1>
@if(count($listings) == 0)
    <p>No listings found</p>
@endif
@foreach ($listings as $listing)
    <div class="listing">
        <h2>{{ $listing['title'] }}</h2>
        <p>{{ $listing['description'] }}</p>
    </div>
@endforeach
