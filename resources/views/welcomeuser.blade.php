
        @auth
            @php
                $userGroup = DB::table('user__groups')
                    ->where('user_id', Auth::user()->id)
                    ->join('groups', 'user__groups.group_id', '=', 'groups.id')
                    ->select('groups.name', 'groups.id')
                    ->first();
            @endphp

            @if($userGroup)
                <h1 class="text-red-500 text-2xl">Welcome {{ Auth::user()->name }} from {{ $userGroup->name }}!</h1>
                @php
                    $facilities = DB::table('facilities')
                        ->where('group_id', $userGroup->id)
                        ->get();
                @endphp
                @if(count($facilities) > 0)
                    <h1>Your facilities: </h1>
                    <ul>
                    @foreach($facilities as $facility)
                        <li>{{ $facility->name }}</li>
                    @endforeach
                    </ul>
                @else
                    <p>No facilities found for this group.</p>
                @endif
            @else
                <h1>Welcome {{ Auth::user()->name }}!</h1>
            @endif
        @else
            <h1>Hello {{ Auth::user()->name }}!</h1>
    @endauth