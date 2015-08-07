<!--
php artisan tinker
Mail::send('emails.test',['testVar'=>'Just test...'], function($message){ $message->to('1111782@isep.ipp.pt')->subject('subject test'); });
 -->
php artisan tinker<p>
  This is a test, an email test.
</p>
<p>
  The variable <code>$testVar</code> contains the value:
</p>
<ul>
  <li><strong>{{ $testVar }}</strong></li>
</ul>
<hr>
<p>
  That is all.
</p>
