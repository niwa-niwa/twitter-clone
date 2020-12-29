<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body"><img src="{{ Gravatar::src($user->email, 500) }}" alt="" class="rounded img-fluid"></div>
</div>
@include('user_follow.follow_button', ['user' => $user])