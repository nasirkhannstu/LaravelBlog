Click here to reset password: <br>

<a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswoedReset) }}">{{ $link }}</a>