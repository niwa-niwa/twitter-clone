@if(count($users) > 0)
    <ul class="list-unstyled">
        @foreach ($users as $user)
        <li class="media">
            <img src="{{ Gravatar::src($user->email, 50) }}" alt="" class="mr-2 roundd">
            <div class="media-body">
                <div>
                    {{ $user->name }}
                </div>
                <div>
                    <p>{!! link_to_route('users.show', 'View Profile', ['id'=> $user->id]) !!}</p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    {{ $users->links('pagination::bootstrap-4') }}
@endif