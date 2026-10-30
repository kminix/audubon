<div>
    <h1>Audubon Bird Sightings</h1>

    <div>
        @if (count($sightings) > 0)
        <table style="width:50%;">
            <tr>
                <th>Species</th>
                <th>Descriptions</th>
                <th>Sighted Location</th>
            </tr>
            @foreach($sightings as $sighting)
                <tr>
                    <td>{{ $sighting->getSpecies() }}</td>
                    <td>{{ $sighting->getDescription() }}</td>

                    <td>{{ $sighting->getLocation() }} at {{ $sighting->getSightedAt() }} </td>

                    <td> </td>
                </tr>
            @endforeach

        </table>
        @else
            <h1>No Sightings Reported</h1>
        @endif
    </div>

    <a href="/create-sighting"><button>Add your sighting</button></a>
</div>