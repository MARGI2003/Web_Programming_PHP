<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Digital Clock</title>
	<style>
		@font-face {
			font-family: customfont;
			src: url(Digital_Clock_Font/digital-7.regular.ttf);
		}
	</style>
</head>

<body style="position: relative;">
	<center>
		<table style="border-radius:9px;margin-top: 29px;" border="1" cellspacing="0" width="48%" height="675px"
			bgcolor="Black">
			<table style="border-radius:15px;margin-top: -610px;border-style: ridge;" border="8" cellspacing="0"
				width="38%" height="550px" bordercolor="A1AEB1">
				<table style="border-radius:27px;margin-top: -525px;" border="2" cellspacing="0" width="34%"
					height="500px" bordercolor="A1AEB1">
					<table style="margin-top: -500px;" cellspacing="0" width="29%" height="90">
						<tr style="border: none;">
							<th>
								<font color="#A1AEB1" face="Cooper Black" size="4.5">DATE</font>
							</th>
							<th>
								<font color="#A1AEB1" face="Cooper Black" size="4.5">MONTH</font>
							</th>
							<th>
								<font color="#A1AEB1" face="Cooper Black" size="4.5">YEAR</font>
							</th>
						</tr>
					</table>
					<table style="border-radius:9px;margin-top: -30px;" border="2" cellspacing="0" width="28%"
						height="90" bordercolor="A1AEB1">
						<tr style="border: none;">
							<td>
								<i>
									<font color="#c30010"
										style="font-family:customfont;margin-left: 5px;letter-spacing: 33px;font-size: 80px;">
										21</font>
								</i>
							</td>
							<td>
								<i>
									<font color="#c30010"
										style="font-family:customfont;margin-left: -60px;letter-spacing: 20px;font-size: 80px;">
										02</font>
								</i>
							</td>
							<td>
								<i>
									<font color="#c30010"
										style="font-family:customfont;margin-right: -35px;letter-spacing: 20px;font-size: 80px;">
										10</font>
								</i>
							</td>
						</tr>
					</table>
					<table style="margin-top: -23px;" cellspacing="0" width="29%" height="90">
						<tr style="border: none;">
							<th>
								<font color="#A1AEB1" face="Cooper Black" size="4.5">HOUR</font>
							</th>
							<th>
								<font color="#A1AEB1" face="Cooper Black" size="4.5" style="margin-left: 15px;">MINUTE
								</font>
							</th>
							<th>
								<font color="#A1AEB1" face="Cooper Black" size="4.5" style="margin-right: -10px;">SECOND
								</font>
							</th>
						</tr>
					</table>
					<table style="border-radius:8px;margin-top: -30px;position: relative;" border="2" cellspacing="0"
						width="32%" height="90" bordercolor="A1AEB1">
						<tr style="border: none;">
							<td>
								<i>
									<font color="#c30010"
										style="font-family:customfont;margin-left: 30px;letter-spacing: 45px;font-size: 100px;">
										11</font>
								</i>
								<font color="#c30010" style="margin-left: -29px;letter-spacing: 45px;font-size: 90px;">:
								</font>
							</td>
							<td>
								<i>
									<font color="#c30010"
										style="font-family:customfont;margin-left: -44px;letter-spacing: 20px;font-size: 100px;">
										33</font>
								</i>
								<font color="#c30010" style="margin-left: -5px;letter-spacing: 45px;font-size: 90px;">:
								</font>
							</td>
							<td>
								<i>
									<font color="#c30010"
										style="font-family:customfont;margin-left: -35px;letter-spacing: 20px;font-size: 100px;">
										25</font>
								</i>
							</td>
						</tr>
					</table>
					<form style="margin-top: 25px;margin-left: -10px;">
						<input type="radio" name="week"
							style="transform: scale(2);accent-color: #c30010;margin-left: 18px;position: absolute;">
						<font color="#A1AEB1" face="Cooper Black" style="margin-left: 28px;position: relative;">
							<sub>SUN</sub></font>
						&nbsp; &nbsp;&nbsp;&nbsp;
						<input type="radio" name="week"
							style="transform: scale(2);accent-color: #c30010;margin-left: 1px;position: absolute;">
						<font color="#A1AEB1" face="Cooper Black" style="margin-left: 12px;position: relative;">
							<sub>MON</sub></font>
						&nbsp; &nbsp;&nbsp;&nbsp;
						<input type="radio" name="week"
							style="transform: scale(2);accent-color: #c30010;margin-left: 1px;position: absolute;">
						<font color="#A1AEB1" face="Cooper Black" style="margin-left: 12px;position: relative;">
							<sub>TUE</sub></font>
						&nbsp; &nbsp;&nbsp;&nbsp;
						<input type="radio" name="week"
							style="transform: scale(2);accent-color: #c30010;margin-left: 1px;position: absolute;">
						<font color="#A1AEB1" face="Cooper Black" style="margin-left: 12px;position: relative;">
							<sub>WED</sub></font>
						&nbsp; &nbsp;&nbsp;&nbsp;
						<input type="radio" name="week"
							style="transform: scale(2);accent-color: #c30010;margin-left: 1px;position: absolute;">
						<font color="#A1AEB1" face="Cooper Black" style="margin-left: 12px;position: relative;">
							<sub>THU</sub></font>
						&nbsp; &nbsp;&nbsp;&nbsp;
						<input type="radio" name="week"
							style="transform: scale(2);accent-color: #c30010;margin-left: 1px;position: absolute;">
						<font color="#A1AEB1" face="Cooper Black" style="margin-left: 12px;position: relative;">
							<sub>FRI</sub></font>
						&nbsp; &nbsp;&nbsp;&nbsp;
						<input type="radio" name="week"
							style="transform: scale(2);accent-color: #c30010;margin-left: 1px;position: absolute;">
						<font color="#A1AEB1" face="Cooper Black" style="margin-left: 12px;position: relative;">
							<sub>SAT</sub></font>
					</form>
					<table style="border-radius:8px;margin-top: 15px;" border="2" cellspacing="0" width="8%" height="90"
						bordercolor="A1AEB1">
						<tr style="border: none;">
							<td>
								<i>
									<font color="#c30010"
										style="font-family:customfont;margin-right: -70px;letter-spacing: 20px;font-size: 82px;">
										29</font>
								</i>
							</td>
						</tr>
					</table>
					<font color="#A1AEB1" face="Cooper Black" size="4">
						<p style="margin-top: -55px;margin-left: 160px;"><sup>o</sup>C</p>
					</font>
					<font color="#A1AEB1" face="Cooper Black" size="4">
						<p style="margin-top: -40px;margin-left: -190px;">TEMP.</p>
					</font>
					<form style="margin-top: -75px;margin-left: 400px;">
						<input type="radio" name="week"
							style="transform: scale(2);accent-color: #c30010;position: absolute;">
						<font color="#A1AEB1" face="Cooper Black"><sub>
								<font size="-4" style="margin-left: 14px;position: relative;">AM</font>
							</sub></font><br>
						<input type="radio" name="week"
							style="transform: scale(2);accent-color: #c30010;margin-top: 13px;position: relative;">
						<font color="#A1AEB1" face="Cooper Black"><sub>
								<font size="-4" style="margin-left: -10px;position: relative;">PM</font>
							</sub></font>
					</form><br>
					<font color="#A1AEB1" face="Arial"><img src="Images/Digital_Clock.png" alt="company_logo"
							style="text-align: left;margin-left: -410px;margin-top: 15px;height: 35px;"></img></font>
					<font color="#A1AEB1" face="Arial" size="2">
						<p style="text-align: right;margin-right: 520px;margin-top: -20px;"><b>OLC-302</b></p>
					</font>
				</table>
			</table>
		</table>
	</center>
</body>

</html>