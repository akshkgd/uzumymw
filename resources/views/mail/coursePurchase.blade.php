<p style="font-size:16px">{!! strtok($email_data['name'], ' ') !!} you are awesome! :)</p>
<p style="font-size:16px">You have just now enrolled for the <strong>{{ $email_data['workshopName'] }}</strong> . I'm super excited about having you on board. Your class will start from {{ Carbon\Carbon::parse($email_data['nextClass'])->format('D, d M') }} at {{ Carbon\Carbon::parse($email_data['nextClass'])->format('h:i A') }} (IST). </p>
<p style="font-size:16px; font-weight:bold;">Next Steps:</p>
<ol>
    <li style="font-size:16px">Join the Private WhatApp Group: <a href="{{ $email_data['workshopGroup'] }}">CLICK
            HERE</a></li>

</ol>
<p style="font-size:16px">I want to make sure you are on-boarded into our system smoothly… :) </p>
<p style="font-size:16px">Because I care for you. I would like you to get the best value out of this investment that you have just made.</p>

<p style="font-size:16px">Besides the course, please ensure you attend all the Hackathons, and complete all the assignments on time.</p>
<p style="font-size:16px; font-weight:bold">Reply to me if you have completed all the on-boarding steps.</p>

</p>

<br>
<p style="font-size:16px; margin-bottom:0">All the best,</p>
<p style="font-size:16px; margin:0">{{ $email_data['teacher'] }}</p>
