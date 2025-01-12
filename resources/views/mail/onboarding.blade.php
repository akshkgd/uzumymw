<p style="font-size:16px">Hey {!! strtok($email_data['name'], ' ') !!}! 👋</p>

<p style="font-size:16px">Great news! You now have access to <strong>{{ $email_data['workshopName'] }}</strong>. You can start learning right away at <a href="https://codekaro.in/home">codekaro.in/home</a>.</p>

<p style="font-size:16px">To make the most of your course:</p>
<ul style="font-size:16px">
    <li>Be consistent!</li>
    <li>Complete all assignments!</li>
</ul>

<p style="font-size:16px">Need help? Just reply to this email!</p>

<br>
<p style="font-size:16px; margin-bottom:0">Happy learning!</p>
<p style="font-size:16px; margin:0">{{ $email_data['teacher'] }}</p>
