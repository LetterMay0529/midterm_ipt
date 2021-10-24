<h1>Verify your email address</h1>

<p>
    Hi! {{$user->name}},
</p>

<p>
    Thank's for signing up to CheapTalk.
    To get access to your account please verify your email by clicking the link below
</p>
<p>
<a  href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}">
 Click here to verify.</a>
 </p>