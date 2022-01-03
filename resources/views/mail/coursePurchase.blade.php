<p style="font-size:16px">{!! strtok($name, ' ') !!} you are awesome! :)</p>
<p style="font-size:16px">You have just now enrolled for the <strong>{{ $workshopName }}</strong> . I'm super excited about having you on board. Your class will start from {{ Carbon\Carbon::parse($nextClass)->format('D, d M') }} at {{ Carbon\Carbon::parse($nextClass)->format('h:i A') }} (IST). </p>
<p style="font-size:16px; font-weight:bold;">Next Steps:</p>
<ol>
    <li style="font-size:16px">Join the Private WhatApp Group: <a href="{{ $workshopGroup }}">CLICK
            HERE</a></li>
    <li style="font-size:16px;">Create Account on Discord: <a
            href="https://discord.com/register">CLICK HERE</a></li>
    <li style="font-size:16px">Join Discord Community: <a href="{{ $discord }}">CLICK HERE</a>
    </li>

</ol>
<p style="font-size:16px">I want to make sure you are on-boarded into our system smoothly… :) </p>
<p style="font-size:16px">Because I care for you. I would like you to get the best value out of this investment that you have just made.</p>

<p style="font-size:16px">Besides the course, please ensure you attend all the Hackathons, and complete all the assignments on time.</p>
<p style="font-size:16px; font-weight:bold">Reply to me if you have completed all the on-boarding steps.</p>

</p>

<br>
<p style="font-size:16px; margin-bottom:0">All the best,</p>
<p style="font-size:16px; margin:0">{{ $teacher }}</p>
