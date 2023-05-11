<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        @auth
            @php
                $userGroup = DB::table('user__groups')
                    ->where('user_id', Auth::user()->id)
                    ->join('groups', 'user__groups.group_id', '=', 'groups.id')
                    ->select('groups.name')
                    ->first();
            @endphp

            @if($userGroup)
                <h1>Welcome {{ Auth::user()->name }} from {{ $userGroup->name }}!</h1>
            @else
                <h1>Welcome {{ Auth::user()->name }}!</h1>
            @endif
        @else
            <h1>Hello World!</h1>
        @endauth
    </body>
</html>