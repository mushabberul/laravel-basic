@forelse ($products as $key => $value)

    @if ($loop->even)
        <div class="bg-primary">
            <ul>
                <li>{{$key}}</li>
                <li>{{$value['name']}}</li>
                <li>{{$value['color']}}</li>
                <li>{{$value['price']}}</li>
            </ul>
        </div>
    @else
        <div class="bg-secondary">
            <ul>
                <li>{{$key}}</li>
                <li>{{$value['name']}}</li>
                <li>{{$value['color']}}</li>
                <li>{{$value['price']}}</li>
            </ul>
        </div>
    @endif

        @empty
        No Product found
@endforelse
