@if(app(\App\Services\UserServiceInterface::class)->hasFollowing())
<div class="panel panel-default">
    <div class="panel-heading">Your Friends</div>
    <div class="panel-body">
    </div>
</div>
@else
<div class="panel panel-default">
    <div class="panel-heading">Users to follow</div>
    <div class="panel-body">
        @foreach(app(\App\Services\UserServiceInterface::class)->getUsers(10) as $user)
            <li><a href="{{ route('profile',$user->username) }}">{{ $user->name }}</a></li>
        @endforeach
    </div>
</div>
@endif