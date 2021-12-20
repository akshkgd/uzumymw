<style>
  p{
    font-size:18px;
  }  
</style>
<p style="font-size:16px">Hey {!! strtok($name, ' ') !!},</p>



<p style="font-size:16px">This is {!! strtok($teacher, ' ') !!}, Super Congratulations on registering for the <strong>‘{{$workshopName}}’</strong>. Your class will start from {{ Carbon\Carbon::parse($nextClass)->format('D, d M') }} at {{ Carbon\Carbon::parse($nextClass)->format('h:i A') }} (IST). </p>
<p style="font-size:16px">You can login to codekaro.in and join the live classes through the option (launch Class) on the dashboard. Class joining link will also be shared on WhatsApp Group 15 minutes before the class.</p> 
<p style="font-size:16px">If you have not joined the WhatsApp group yet, click on the link below and hop into the New Age learning experience.</p>  
<strong><p style="font-size:16px">Join the group ASAP to get all important links and updates related to the {{$workshopName}}: <a href="{{$workshopGroup}}">CLICK HERE</a> </p> </strong> 
<br><br>
<p style="font-size:16px">See you soon </p> 
<p style="font-size:16px">{{$teacher}}</p>



