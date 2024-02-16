<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery.easing.min.js"></script>
<script type="text/javascript" src="jquery.easy-ticker.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	var dd = $('.vticker').easyTicker({
		direction: 'up',
		easing: 'easeInOutBack',
		speed: 'slow',
		interval: 2000,
		height:'auto',
		visible: 1,
		mousePause: 0,
		controls: {
			up: '.up',
			down: '.down',
			toggle: '.toggle',
			stopText: 'Stop !!!'
		}
	}).data('easyTicker');
	
	cc = 1;
		dd.stop();
		dd.options['visible'] =3;
		dd.start();
	
	
});
</script>

<style>
	.vticker{
		
		width:450px;
	}
	.vticker ul{
		padding:0;
	}
	.vticker li{
		list-style: none;
		padding:10px;
		font-size:14px;
	}
	.et-run{
		background: red;
	}
</style>

<div class="vticker">
	<ul><li><h4>Structural Steel Division of Jindal Steel and Power Limited</h4>
			SSD of JSPL, Raigarh conducted a Campus Drive at OPJU on April 2, 2018 and selected 17 students.</li>
		
		<li><h4>OPJEMS scholarship for 2017-18 academic year</h4>
			Three students from the School of Engineering, Pragya Pandey, 3rd Year Electrical, Amir Sohail Khan, 
			4th year Mechanical,and Nikhil Madaan, 2nd year Metallurgy are the proud recepients of the OPJEMS 
			scholarship for the 2017-18 academic year.</li>
		
		<li><h4>Industry-Academia Conclave (IAC-2018)</h4>
			OP Jindal University is organizing the 1st Industry-Academia Conclave (IAC-2018) on “Realigning Education
			towards Industry Needs” at the University Campus during April 12-13, 2018 in association with Jindal Steel 
			and Power Limited, Raigarh, India.</li>
		
		<li><h4>MOU with Innosapien Technologies Pvt Ltd</h4>
			OP Jindal University has established an MOU with Innosapien Technologies Pvt Ltd, Mumbai to foster the 
			innovations and Research in the field of Wearable Computing, Augmented & Virtual Reality (AVR).</li>
		
		<li><h4>Royal Infraconstru Ltd, Kolkata</h4>
			Royal Infraconstru Ltd, Kolkata conducted a Campus Drive at OPJU on January 8, 2018 and selected 
			two students. </li>
		
	</ul>
</div>