<!DOCTYPE html>
<html>

	<head>

		<!-- css -->
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<meta charset="UTF-8">

		<!-- title -->
		<title>Your Quote | Universal Converting Equipment</title>
		
	</head>
	
	<body>
	
		
		<?php 
		
		#GENERAL INFO!!
		
			$quotenumber = $_REQUEST['1_1'] ;
			$company = $_REQUEST['1_2'] ;
			$attention = $_REQUEST['1_3'] ;
			$date = date('jS F Y') ;
			$price = '<b>' . $_REQUEST['1_4'] . '</b>' ;
		
		##MACHINE SPEC!!
		
			$unwindtype = $_REQUEST['3_1'] ;
			$unwindwidth = $_REQUEST['3_2'] ; 
			$unwinddiameter = $_REQUEST['3_3'] ;
			$unwindweight = $_REQUEST['3_4'] ;
			$unwindmaterial = $_REQUEST['3_5'] ;
			$unwindthickness = $_REQUEST['3_6'] ;
			$unwindtension = $_REQUEST['3_7'] ;
			$unwindcorematerial = $_REQUEST['3_8'] ;
			$unwindcoresize = $_REQUEST['3_9'] ;
		
			$slittingtype = $_REQUEST['3_10'] ;
			$knivesincl = $_REQUEST['3_11'] ;
			$anvilsincl = $_REQUEST['3_12'] ;
			$razorholdersincl = $_REQUEST['3_13'] ;
			$minimumslitwidth = $_REQUEST['3_14'] ;
			$trimremovaltype = $_REQUEST['3_15'] ;
		
			$rewinddiameter = $_REQUEST['3_16'] ;
			$rewindweight = $_REQUEST['3_17'] ;
			$diffshaft = $_REQUEST['3_18'] ;
			$antistatic = $_REQUEST['3_19'] ;
			$maxspeed = $_REQUEST['3_20'] ;
			$rewindtension = $_REQUEST['3_21'] ;
			$unloading = $_REQUEST['3_22'] ;
			$rewindcorematerial = $_REQUEST['3_23'] ;
			$rewindcoresize = $_REQUEST['3_24'] ;
		
		
		##SECTION FOUR!!
		
			$fourStandard = '	<hr/>
								
								<div>
									<h2>4. Unwind Details</h2>
									
								</div>
								
								<br/>' ;

			$unwindyes = '		<div>
			
									<h4 id="empty_title">Unwind Type</h4>
									
									<p id="withimage">T
									
										Air shaft using air-bladders to secure rolls both axially and radially during winding.
											
									</p>

									<img src="images/4_unwind/unwind.jpeg" alt="Unwind Type" id="unwind_image" />
		
								</div>
								
								<br/>' ;
	
	
			$unwindprice = '	<p class="price">£9,999</p>' ;

			$unwindcontrolbrakeyes = '<div>
									
									<h4 id="6_2_title">SUnwind Control Brake</h4>
		
										<p id="withoutimage">Pneumatic brake with tension controlled relative to roll diameter</p>

								</div>
								
								<br/>' ;
	
	
			$unwindcontrolbrakeprice = '	<p class="price">£9,999</p>' ;




		
		##SECTION FIVE!!
		
			$fiveStandard = '	<hr/>
			
								<div>
									
									<h2>5. Main Drive Details</h2>		
								
								</div>
								
								<br/>' ;
	
			$drivelengthcounteryes = '		<div>
									
									<h4 id="empty_title">Length Counter</h4>
									
									<p id="withoutimage">PLC controlled, automatically stops at set length (no slowdown preset required).</p>
	
								</div>
								
								<br/>' ;
	
	
			$drivelengthcounterprice = '		<p class="price">£9,999</p>' ;
		
		
			$idleyes = '		<div>	
								
									<h4 id="6_2_title">Idle Rollers</h4>
								
									<p id="withoutimage">All idle rollers are balanced.</p>
		
								</div>
								
								<br/>' ;
		
			
			$idleprice = '		<p class="price">£9,999</p>' ;

		
		
		##SECTION SIX!!
		
			$sixStandard = '	<hr/>
			
								<div>
									
									<h2>6. Slitting</h2>
									
								</div>
								
								<br/>' ;
		
			$shearyes = '		<div>

									<h4 id="empty_title">Shear Slitting</h4>

									<p id="withimage">Shaft-mounted shear knives. Circular knives that rotate together as a male and female pair acting much like a pair of scissors, generally used for heavier gauge films and papers</p>
								
									<img src="images/6_1_slitter/shear.jpeg" alt="Shear Slitter" id="shear_image" />
		
								</div>
								
								<br/>' ;
	
	
			$shearprice = '		<p class="price">£9,999</p>' ;
		
				
			$razoryes = '		<div>

									<h4>Razor Slitting</h4>

									<p id="withimage">Razor blades in comb. Ideal for slitting plastic films.</p>
								
									<img src="images/6_1_slitter/razor.jpeg" alt="Razor Slitter" id="razor_image" />
									
								</div>
								
								<br/>' ;


			$razorprice = '		<p class="price">£9,999</p>' ;

		
			$crushcutyes = '	<div>

									<h4>Crush Cut</h4>

									<p id="withimage">Dovetail bar fitted to machine to mount knives. Air manifold which each knife holder is connected to.</p>
								
									<img src="images/6_1_slitter/crush.jpeg" alt="Crush Cut" id="crush_image" />
									
								</div>
								
								<br/>' ;
	
			
			$crushcutprice = '	<p class="price">£9,999</p>' ;

		

			
		##SECTION SEVEN!!
		
			$fiveStandard = '	<hr id="7"/>
								
								<div>
									
									<h2>7. Rewind Section Details</h2>		
	
								</div>
								
								<br/>' ;
		
			$airshaftsyes = '		<div>

									<h4 id="empty_title">Air Shafts</h4>
									
									<p id="withimage">Duplex (two) air shafts that swing out horizontally for loading and unloading.</p>
									
									<img src="images/7_rewind/air.jpeg" alt="Air Shafts" id="air_image" />
								
								</div>
								
								<br/>' ;
			
			$airshaftsprice = '	<p class="price">£9,999</p>' ;


			$differshaftsyes = '		<div>

									<h4 id="6_2_title">Differential Shafts</h4>

									<p id="withimage">Differential shafts with double ball differential chucks. The chucks lock to the inside of the core and produce no core dust. The tension in the product is constant across the full web width regardless of whether different slit widths are rewound at the same time.</p>
							
									<img src="images/7_rewind/diff.jpeg" alt="Differential Shafts" id="diff_image" />
									
								</div>
								
								<br/>' ;
			
			$differshaftsprice = '	<p class="price">£9,999</p>' ;


			$tensioncontrolyes = '	<div>

									<h4 id="6_2_title">Tension Control</h4>

									<p id="withoutimage">Automatic control of tension as the diameter of the roll changes.</p>
									
									
								</div>
								
								<br/>' ;
			
			$tensioncontrolprice = '<p class="price">£9,999</p>' ;



			$lengthcounteryes = '<div>

									<h4 id="6_2_title">Length Counter</h4>

									<p id="withoutimage">Length counting and programmable stop at set length.</p>
											
								</div>
								
								<br/>' ;
			
			$lengthcounterprice = '<p class="price">£9,999</p>' ;



		##SECTION EIGHT!!
		
			$eightStandard = '	<hr id="8"/>
			
								<div>

									<h2>8. Drives and Controls</h2>	


								</div>
								
								<br/>' ;
		
			$operatorcontrolsyes = '<div>

									<h4 id="empty_title">Operator Controls</h4>

									<p id="withimage">Colour touch screen incorporating all machine operations.  Message displays indicate faults conditions such as guards open or E-stop pressed. The comprehensive system has been designed to be simple and straight forward to operate.</p>
							
									<img src="images/8_drive/controls.jpeg" alt="" id="operatorcontrols_image" />
									
								</div>
								
								<br/>' ;
			
			$operatorcontrolsprice = '<p class="price">£9,999</p>' ;



			$drivemotorsyes = '	<div>

									<h4 id="6_2_title">Drive Motors</h4>

									<p id="withoutimage">AC Vector Motors with closed loop feedback.</p>
																
								</div>
								
								<br/>' ;
			
			$drivemotorsprice = '<p class="price">£9,999</p>' ;


			$drivetypeyes = '	<div>

									<h4 id="6_2_title">Drive Type</h4>

									<p id="withoutimage">Digital AC vector drives from Emerson Control Techniques.</p>							
									
								</div>
								
								<br/>' ;
			
			$drivetypeprice = '	<p class="price">£9,999</p>' ;


			$machineguardingyes = '<div>

									<h4 id="6_2_title">Machine Guarding</h4>

									<p id="withoutimage">We provide physical guards around the machine with light barriers to prevent access to the unwind and rewind at speeds above 15m/min. Universal ensures its machines conform to International safety standards including EN 13418:2008.</p>						
									
								</div>
								
								<br/>' ;
			
			$machineguardingprice = '<p class="price">£9,999</p>' ;


		
			$null = '' ;
		
		##SECTION FOUR IF STATEMENTS
		
			if(($_POST['4_1']) == 'Yes')
    			{
    			$unwindyes = $unwindyes ;
				$unwindno = $null ;
				$unwindoption = $null ;
				}
			elseif(($_POST['4_1']) == 'No')
				{
				$unwindyes = $null ;
				$unwindno = $null ;
				$unwindoption = $null ;	
				}	
			elseif(($_POST['4_1']) == 'Optional')
				{
				$unwindoption = $unwindyes . $unwindprice ;
				$unwindyes = $null ;
				$unwindno = $null ;
				}	
			else
				{
				$unwindyes = $null ;
				$unwindno = $null ;
				$unwindoption = $null ;
				echo( '4.1 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	
		
			if(($_POST['4_2']) == 'Yes')
    			{
    			$unwindcontrolbrakeyes = $unwindcontrolbrakeyes ;
				$unwindcontrolbrakeno = $null ;
				$unwindcontrolbrakeoption = $null ;
				}
			elseif(($_POST['4_2']) == 'No')
				{
				$unwindcontrolbrakeyes = $null ;
				$unwindcontrolbrakeno = $null ;
				$unwindcontrolbrakeoption = $null ;	
				}	
			elseif(($_POST['4_2']) == 'Optional')
				{
				$unwindcontrolbrakeoption = $unwindcontrolbrakeyes . $unwindcontrolbrakeprice ;
				$unwindcontrolbrakeyes = $null ;
				$unwindcontrolbrakeno = $null ;
				}	
			else
				{
				$unwindcontrolbrakeyes = $null ;
				$unwindcontrolbrakeno = $null ;
				$unwindcontrolbrakeoption = $null ;
				echo( '4.2 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	
		

		##SECTION FIVE IF STATEMENTS
		
			if(($_POST['5_1']) == 'Yes')
    			{
    			$drivelengthcounteryes = $drivelengthcounteryes ;
				$drivelengthcounterno = $null ;
				$drivelengthcounteroption = $null ;
				}
			elseif(($_POST['5_1']) == 'No')
				{
				$drivelengthcounteryes = $null ;
				$drivelengthcounterno = $null ;
				$drivelengthcounteroption = $null ;	
				}	
			elseif(($_POST['5_1']) == 'Optional')
				{
				$drivelengthcounteroption = $drivelengthcounteryes . $drivelengthcounterprice ;
				$drivelengthcounteryes = $null ;
				$drivelengthcounterno = $null ;
				}	
			else
				{
				$drivelengthcounteryes = $null ;
				$drivelengthcounterno = $null ;
				$drivelengthcounteroption = $null ;
				echo( '5.1 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	


			if(($_POST['5_2']) == 'Yes')
    			{
    			$idleyes = $idleyes ;
				$idleno = $null ;
				$idleoption = $null ;
				}
			elseif(($_POST['5_2']) == 'No')
				{
    			$idleyes = $null ;
				$idleno = $null ;
				$idleoption = $null ;
				}	
			elseif(($_POST['5_2']) == 'Optional')
				{
				$idleoption = $idleyes . $idleprice ;
    			$idleyes = $null ;
				$idleno = $null ;
				}	
			else
				{
				$idleyes = $null ;
				$idleno = $null ;
				$idleoption = $null ;
				echo( '5.2 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

		
		
		
		
		##SECTION SIX IF STATEMENTS
		
			if(($_POST['6_1']) == 'Yes')
    			{
    			$shearyes = $shearyes ;
				$shearno = $null ;
				$shearoption = $null ;
				}
			elseif(($_POST['6_1']) == 'No')
				{
				$shearyes = $null ;
				$shearno = $null ;
				$shearoption = $null ;	
				}	
			elseif(($_POST['6_1']) == 'Optional')
				{
				$shearoption = $shearyes . $shearprice ;
				$shearyes = $null ;
				$shearno = $null ;
				}	
			else
				{
				$shearyes = $null ;
				$shearno = $null ;
				$shearoption = $null ;
				echo( '6.1 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	




			if(($_POST['6_2']) == 'Yes')
    			{
    			$razoryes = $razoryes ;
				$razorno = $null ;
				$razoroption = $null ;
				}
			elseif(($_POST['6_2']) == 'No')
				{
    			$razoryes = $null ;
				$razorno = $null ;
				$razoroption = $null ;
				}	
			elseif(($_POST['6_2']) == 'Optional')
				{
				$razoroption = $razoryes . $razorprice ;
    			$razoryes = $null ;
				$razorno = $null ;
				}	
			else
				{
				$razoryes = $null ;
				$razorno = $null ;
				$razoroption = $null ;
				echo( '6.2 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	


			if(($_POST['6_3']) == 'Yes')
    			{
    			$crushcutyes = $crushcutyes ;
				$crushcutno = $null ;
				$crushcutoption = $null ;
				}
			elseif(($_POST['6_3']) == 'No')
				{
    			$crushcutyes = $null ;
				$crushcutno = $null ;
				$crushcutoption = $null ;
				}	
			elseif(($_POST['6_3']) == 'Optional')
				{
				$crushcutoption = $crushcutyes . $crushcutprice ;
    			$crushcutyes = $null ;
				$crushcutno = $null ;
				}	
			else
				{
				$crushcutyes = $null ;
				$crushcutno = $null ;
				$crushcutoption = $null ;
				echo( '6.3 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	


				
			##SECTION SEVEN IF STATEMENTS
			
			
			if(($_POST['7_1']) == 'Yes')
    			{
    			$airshaftsyes = $airshaftsyes ;
				$airshaftsno = $null ;
				$airshaftsoption = $null ;
				}
			elseif(($_POST['7_1']) == 'No')
				{
    			$airshaftsyes = $null ;
				$airshaftsno = $null ;
				$airshaftsoption = $null ;
				}	
			elseif(($_POST['7_1']) == 'Optional')
				{
				$duplexoption = $airshaftsyes . $airshaftsprice ;
    			$airshaftsyes = $null ;
				$airshaftsno = $null ;
				}	
			else
				{
				$airshaftsyes = $null ;
				$airshaftsno = $null ;
				$airshaftsoption = $null ;
				echo( '7.1 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_2']) == 'Yes')
    			{
    			$differshaftsyes = $differshaftsyes ;
				$differshaftsno = $null ;
				$differshaftsoption = $null ;
				}
			elseif(($_POST['7_2']) == 'No')
				{
    			$differshaftsyes = $null ;
				$differshaftsno = $null ;
				$differshaftsoption = $null ;
				}	
			elseif(($_POST['7_2']) == 'Optional')
				{
				$differshaftsoption = $differshaftsyes . $differshaftsprice ;
    			$differshaftsyes = $null ;
				$differshaftsno = $null ;
				}	
			else
				{
				$differshaftsyes = $null ;
				$differshaftsno = $null ;
				$differshaftsoption = $null ;
				echo( '7.2 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_3']) == 'Yes')
    			{
    			$tensioncontrolyes = $tensioncontrolyes ;
				$tensioncontrolno = $null ;
				$tensioncontroloption = $null ;
				}
			elseif(($_POST['7_3']) == 'No')
				{
    			$tensioncontrolyes = $null ;
				$tensioncontrolno = $null ;
				$tensioncontroloption = $null ;
				}	
			elseif(($_POST['7_3']) == 'Optional')
				{
				$tensioncontroloption = $tensioncontrolyes . $tensioncontrolprice ;
    			$tensioncontrolyes = $null ;
				$tensioncontrolno = $null ;
				}	
			else
				{
				$tensioncontrolyes = $null ;
				$tensioncontrolno = $null ;
				$tensioncontroloption = $null ;
				echo( '7.3 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_4']) == 'Yes')
    			{
    			$lengthcounteryes = $lengthcounteryes ;
				$lengthcounterno = $null ;
				$lengthcounteroption = $null ;
				}
			elseif(($_POST['7_4']) == 'No')
				{
    			$lengthcounteryes = $null ;
				$lengthcounterno = $null ;
				$lengthcounteroption = $null ;
				}	
			elseif(($_POST['7_4']) == 'Optional')
				{
				$lengthcounteroption = $lengthcounteryes . $lengthcounterprice ;
    			$lengthcounteryes = $null ;
				$lengthcounterno = $null ;
				}	
			else
				{
				$lengthcounteryes = $null ;
				$lengthcounterno = $null ;
				$lengthcounteroption = $null ;
				echo( '7.4 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	



			##SECTION EIGHT IF STATEMENTS
			
			if(($_POST['8_1']) == 'Yes')
    			{
    			$operatorcontrolsyes = $operatorcontrolsyes ;
				$operatorcontrolsno = $null ;
				$operatorcontrolsoption = $null ;
				}
			elseif(($_POST['8_1']) == 'No')
				{
    			$operatorcontrolsyes = $null ;
				$operatorcontrolsno = $null ;
				$operatorcontrolsoption = $null ;
				}	
			elseif(($_POST['8_1']) == 'Optional')
				{
				$operatorcontrolsoption = $operatorcontrolsyes . $operatorcontrolsprice ;
    			$operatorcontrolsyes = $null ;
				$operatorcontrolsno = $null ;
				}	
			else
				{
				$operatorcontrolsyes = $null ;
				$operatorcontrolsno = $null ;
				$operatorcontrolsoption = $null ;
				echo( '8.1 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	


			if(($_POST['8_2']) == 'Yes')
    			{
    			$drivemotorsyes = $drivemotorsyes ;
				$drivemotorsno = $null ;
				$drivemotorsoption = $null ;
				}
			elseif(($_POST['8_2']) == 'No')
				{
    			$drivemotorsyes = $null ;
				$drivemotorsno = $null ;
				$drivemotorsoption = $null ;
				}	
			elseif(($_POST['8_2']) == 'Optional')
				{
				$drivemotorsoption = $drivemotorsyes . $drivemotorsprice ;
    			$drivemotorsyes = $null ;
				$drivemotorsno = $null ;
				}	
			else
				{
				$drivemotorsyes = $null ;
				$drivemotorsno = $null ;
				$drivemotorsoption = $null ;
				echo( '8.2 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['8_3']) == 'Yes')
    			{
    			$drivetypeyes = $drivetypeyes ;
				$drivetypeno = $null ;
				$drivetypeoption = $null ;
				}
			elseif(($_POST['8_3']) == 'No')
				{
    			$drivetypeyes = $null ;
				$drivetypeno = $null ;
				$drivetypeoption = $null ;
				}	
			elseif(($_POST['8_3']) == 'Optional')
				{
				$drivetypeoption = $drivetypeyes . $drivetypeprice ;
    			$drivetypeyes = $null ;
				$drivetypeno = $null ;
				}	
			else
				{
				$drivetypeyes = $null ;
				$drivetypeno = $null ;
				$drivetypeoption = $null ;
				echo( '8.3 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['8_4']) == 'Yes')
    			{
    			$machineguardingyes = $machineguardingyes ;
				$machineguardingno = $null ;
				$machineguardingoption = $null ;
				}
			elseif(($_POST['8_4']) == 'No')
				{
    			$machineguardingyes = $null ;
				$machineguardingno = $null ;
				$machineguardingoption = $null ;
				}	
			elseif(($_POST['8_4']) == 'Optional')
				{
				$unloadingoption = $machineguardingyes . $machineguardingprice ;
    			$machineguardingyes = $null ;
				$machineguardingno = $null ;
				}	
			else
				{
				$machineguardingyes = $null ;
				$machineguardingno = $null ;
				$machineguardingoption = $null ;
				echo( '8.4 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	


			
		##COMPOSITION STARTS HERE
			
			$sectionOne = '		<p><b>PRIVATE AND CONFIDENTIAL</b></p>
								
								<img src="images/misc/logo.jpeg" alt="Universal Logo" id="logo" />

								<hr/>
								
								<img src="images/misc/x1.jpeg" alt="Universal X1" id="mainImage" />

								<p id="title">Universal X1</p>

								<p id="subtitle">Slitter Rewinder</p>

								<table id="info">
								
									<tr id="infotr">
									
										<th id="infoth">Quote Number</th>
										<td id="infotd"><span id="bigger">' . $quotenumber . '</span></td>
									
									</tr>
								
									<tr id="infotr">
									
										<th id="infoth">Company</th>
										<td id="infotd"><span id="bigger">' . $company . '</span></td>
									
									</tr>
								
									<tr id="infotr">
									
										<th id="infoth">For the attention of</th>
										<td id="infotd"><span id="bigger">' . $attention . '</span></td>
									
									</tr>
								
									<tr id="infotr">
									
										<th id="infoth">Issued</th>
										<td id="infotd"><span id="bigger">' . $date . '</span></td>
									
									</tr>
								
									<tr id="infotr">
									
										<th id="infoth">Sales Contact</th>
										<td id="infotd"><span id="bigger">Alan Jones</span><br/>
											<span id="smalltext"><b>Managing Director</b><br/>
											<b>Email: </b>ajones@universalconvertingequipment.com<br/>
											<b>Telephone: </b>+44 (0) 1473 403333</span></td>
									
									</tr>
								
								</table>	
								
								<hr/>
		
								<h2>Quotation Contents</h2>
							
								<p>
							
									<ul id="contents">
									
										<li><a href="#1">1. Introduction</a></li>
										<li><a href="#2">2. Universal X1 Slitter Rewinder</a></li>
										
										<ul id="contents">
										
											<li id="contentsnolink">Key Benefits</li>
										
										</ul>
										
										<li><a href="#3">3. Your Machine Specification</a></li>
										<li><a href="#4">4. Unwind Details</a></li>
										
										<ul id="contents">
										
											<li id="contentsnolink">Unwind Type</li>
											<li id="contentsnolink">Unwind Control Brake</li>
										
										</ul>
										
										<li><a href="#5">5. Main Drive Details</a></li>
										
										<ul id="contents">
										
											<li id="contentsnolink">Length Counter</li>
											<li id="contentsnolink">Idle Rollers</li>
										
										</ul>
										
										<li><a href="#6">6. Slitting</a></li>
										
										<ul id="contents">
										
											<li id="contentsnolink">Shear Slitting</li>
											<li id="contentsnolink">Razor Slitting</li>
											<li id="contentsnolink">Crush Cut</li>
										
										</ul>			
										
										<li><a href="#7">7. Rewinding Section Details</a></li>
										
										<ul id="contents">
										
											<li id="contentsnolink">Air Shafts</li>
											<li id="contentsnolink">Differential Shafts</li>
											<li id="contentsnolink">Tension Control</li>
											<li id="contentsnolink">Length Counter</li>
										
										</ul>			
										
										<li><a href="#8">8. Drives and Controls</a></li>
										
										<ul id="contents">
										
											<li id="contentsnolink">Operator Controls</li>
											<li id="contentsnolink">Drive Motors</li>
											<li id="contentsnolink">Drive Type</li>
											<li id="contentsnolink">Machine Guarding</li>
										
										</ul>			
										
										<li><a href="#9">9. Your Machine Quotation</a></li>
										
										<ul id="contents">
										
											<li id="contentsnolink">Optional Extras</li>
										
										</ul>			
										
										<li><a href="#10">10. Terms and Conditions</a></li>
										<li><a href="#11">11. Installation</a></li>		
									
									</ul>
									
								</p>
								
								<hr id="1"/><div>
								
								<h2>1. Introduction</h2>		
								
								<br/>
	
								<p id="withoutimage">Over 600 installations around the world over the last 17 years.
				
									<ul id="list">
										
										<li>1996 - Formed by ex-Atlas / Titan personnel</li>
										<li>2003 - Universal Adhesive Systems Ltd formed and acquired the assets and key personnel of Mercer Adhesive Systems limited. Purchased building and located new business in Daventry, UK.</li>
										<li>2003 - Purchased and relocated to new premises </li>
										<li>2011 - 500th installation worldwide.</li>
										<li>2012 - Purchased neighbouring buildings in Ipswich, UK to increase manufacturing space by 50%</li>
									
									</ul>
		
								</p>
		
								<p id="withimage">Universal Converting Equipment design, develop and build slitter rewinders, salvage rewinders, core cutters,  hot melt adhesive coating and laminating systems and ancillary systems.  The Universal range of Slitter Rewinders has the small footprint low cost ‘X1’ at one end of the scale and the highly automated ‘X9’ at the other. We develop and build both the machinery and  control systems so we offer a high level of customisation and prompt support. All machines are designed and built in the UK. </p>
						
								<img src="images/1_intro/energy.jpeg" alt="Efficient Energy Usage" id="energy_image" />
						
								<p id="withimage">Universal offer a wide range of ancillary equipment, including automatic core cutters, drive and control system upgrades, web guiding systems and differential winding shafts. Universal also produce a range of hot melt adhesive coating and laminating equipment.</p>
						
								
							</div>
							
							<br/>
							
							<img src="images/1_intro/diagram.jpeg" alt="Universal" id="universal_image" />
				
							<hr id="2"/>
							
							<div>
								
								<h2>2. Universal X1 Slitter Rewinder</h2>		
							
								<br/>
							
								<p id="withimage">
					
									The Universal X1 is a slitter rewinder designed primarily to slit down small roll sizes, but has the flexibility to meet a wide range of converting needs.  Available with either shear, razor or crush slitting, this low cost, small footprint slitting machine is suitable for a wide range of materials and can be fitted with web tension options.
									
									<br/>
									
									<br/>
									
									The Universal X1 is available in the following variants:
									
									<ul id="list">
									
										<li><b>X1</b> - Front loading parent roll</li>
										<li><b>X1R</b> - Rear loading parent roll</li>
									
									</ul>
								
								</p>
					
								<img src="images/2_x6/x6.jpeg" alt="Universal X6 Slitter Rewinder" id="x6_image" />
					
								<br/>
								
								<h3>Key Benefits</h3>
								
								<p id="withoutimage">
								
									<b>Compact Design</b>
									
									<br/>
									
									The Universal X1 has a small footprint and a short web path.
								
								</p>
								
								<p id="withoutimage">
								
									<b>Substantial construction</b>
									
									<br/>
									
									The X1 utilises cross braced frames, precision bored as a pair. The rollers are aluminium tubes precisely machined and balanced.
									
								</p>
								
								<p id="withoutimage">
								
									<b>Simple operation</b>
									
									<br/>
									
									Adjustable parameters have been minimised, so an operator can be trained in just a few hours. We believe the X6 is about as simple to operate as a duplex centre-wind slitter can be.
									
								</p>
								
								<p id="withoutimage">
									
									<b>Safety</b>
									
									<br/>
									
									Universal ensures its machines conform to international safety standards including EN 13418:2008.
									
								</p>
								
								<p id="withoutimage">
								
									<b>No hydraulics</b>
									
									<br/>
									
									We do not use hydraulic systems for guiding or roll lift in, eliminating the risk of material contamination.
									
								</p>
								
								<p id="withoutimage">
								
									<b>Worldwide support</b>
									
									<br/>
									
									Same day support is available by telephone, and additionally Internet support is available.  Service engineers are normally available within 48 hours.
									
									<br/>
									
									Additional support (drive system) can be obtained from Control Techniques LLC, a full list of worldwide service locations can be found at <a href="http://www.universalconvertingequipment.com/ct">www.universalconvertingequipment.com/ct</a>
						
								</p>
								
								<p id="withoutimage">
									
									<b>UK Design and Build</b>
									
									<br/>
									
									The X6 is designed and built in the UK.
									
								</p>
					
							</div>
							
							<br/>' ; 
	
			$machineQuote = '<hr/>
							
							<div>

								<h2>3. Your Machine Specification</h2>		

								<br/>

								<p>
								
									<h4>Unwind/Master Rolls</h4>
								
									<ul id="list">
									
										<li>Shafted/Shaftless Unwind: ' . $unwindtype1 . '</li>
										<li>Integral/Separate Unwind: ' . $unwindtype2 . '</li>
										<li>Driven/Braked Unwind: ' . $unwindtype3 . '</li>
										<li>Maximum Roll Width: ' . $unwindmaxrollwid . '</li>
										<li>Maximum Roll Diameter: ' . $unwindmaxrolldia . '</li>
										<li>Minimum Web Width: ' . $unwindminwebwid . '</li>
										<li>Minimum Roll Diameter (For Floor Pickup): ' . $unwindminrolldia . '</li>
										<li>Maximum Roll Weight: ' . $maxrollweight . '</li>
										<li>Roll Material: ' . $unwindrollmaterial . '</li>
										<li>Material Thickness: ' . $unwindmaterialthick . '</li>
										<li>Web Guiding: ' . $webguiding . '</li>
										<li>Peeler Roller: ' . $peeler . '</li>
										<li>Tension Range: ' . $unwindtensionrange . '</li>
										<li>Camera System: ' . $camerasystem . '</li>
										<li>Core Material: ' . $unwindcorematerial . '</li>
										<li>Core Size: ' . $unwindcoresize . '</li>
									
									</ul>
									
									<h4>Slitting/Cutting</h4>
									
									<ul id="list">
									
										<li>Slitting Type: ' . $slittingtype . '</li>
										<li>Knives/Razors Included: ' . $knivesincl . '</li>
										<li>Shear Anvils Included: ' . $anvilsincl . '</li>
										<li>Razor Holders Included: ' . $razorholdersincl . '</li>
										<li>Minimum Slit Width: ' . $minslitwidth . '</li>
										<li>Splice Table: ' . $splicetable . '</li>
										<li>Automatic Knife Positioning: ' . $autoknife . '</li>
										<li>Trim Removal Type: ' . $trimremoval . '</li>
									
									</ul>
						
									<h4>Rewind/Finish Rolls</h4>
									
									<ul id="list">
									
										<li>Maximum Roll Diameter: ' . $rewindmaxrolldia . '</li>
										<li>Maximum Rewind Weight (Per Shaft): ' . $rewindmaxrollweight . '</li>
										<li>Turretting Rewind: ' . $turretting . '</li>
										<li>Constant Geometry Lay-on Rollers: ' . $layonrollers . '</li>
										<li>Differential Shafts: ' . $deffershafts . '</li>
										<li>Bowed Roller: ' . $bowedroller . '</li>
										<li>Spreader Roller: ' . $spreaderroller . '</li>
										<li>Anti-static System: ' . $antistatic . '</li>
										<li>Maximum Machine Speed: ' . $maxmachincespeed . '</li>
										<li>Tension Range: ' . $rewindtensionrange . '</li>
										<li>Laser Core Alignment: ' . $laser . '</li>
										<li>Unloading: ' . $unloading . '</li>
										<li>Core Material: ' . $rewindcorematerial . '</li>
										<li>Core Size: ' . $rewindcoresize . '</li>
									
									</ul>
								
								</p>
						
							</div>
							
							<br/>' ;	
			
			$sectionFour = 	$fourStandard . 
							$unwindyes . 
							$shaftedyes . 
							$chucksyes . 
							$armsyes . 
							$motoryes . 
							$drivenyes . 
							$safetyyes . 
							$controlsyes . 
							$guidingyes . 
							$spliceyes . 
							$trashyes ;
			
			$sectionFive = 	$fiveStandard . 
							$mainyes . 
							$bowedyes ;
			
			$sectionSix = 	$sixStandard . 
							$shearyes . 
							$autoyes . 
							$razoryes . 
							$trimwinderyes . 
							$trimbloweryes . 
							$tensionyes ;
			
			$sectionSeven =	$sevenStandard . 
							$duplexyes . 
							$windingyes . 
							$computacoreyes . 
							$layonyes . 
							$tensionconrolyes . 
							$lengthcounteryes . 
							$staticyes . 
							$unloadingyes . 
							$pusheryes . 
							$robotyes . 
							$camerayes ;
			
			$sectionEight =	$eightStandard . 
							$operatorcontrolsyes . 
							$remotediagnosticsyes . 
							$drivemotorsyes . 
							$drivetypeyes . 
							$machineguardingyes ;
			
			$sectionNine = '<hr id="9"/>
							
							<div>
							
								<h2>9. Your Machine Quotation</h2>		
							
							</div>
							
							<br/>
							
							<div>		
							
								<p id="withoutimage">Based on your specification (<a href="#3">section 3</a>),  the cost to supply a Universal X6 Slitter Rewinder is ' . $price . ' (ex-works)<br/><br/>This quote is subject to our standard terms and conditions of sale, available at <a href="http://www.universalconvertingequipment.com/terms">www.universalconvertingequipment.com/terms</a></p>

							</div>
							
							<br/>
							
							<div>
		
								<h3>Options</h3>' . 
								$unwindoption . 
								$shaftedoption . 
								$chucksoption . 
								$armsoption . 
								$motoroption . 
								$drivenoption . 
								$safetyoption . 
								$controlsoption . 
								$guidingoption . 
								$spliceoption . 
								$trashoption . 
								$mainoption . 
								$bowedoption . 
								$shearoption . 
								$autooption . 
								$razoroption . 
								$trimwinderoption . 
								$trimbloweroption . 
								$tensionoption . 
								$duplexoption . 
								$windingoption . 
								$computacoreoption . 
								$layonoption . 
								$tensionconroloption . 
								$lengthcounteroption . 
								$staticoption . 
								$unloadingoption . 
								$pusheroption . 
								$robotoption . 
								$cameraoption . 
								$operatorcontrolsoption . 
								$remotediagnosticsoption . 
								$drivemotorsoption . 
								$drivetypeoption . 
								$machineguardingoption . 
							
							'</div>' ;

			$sectionTen = '	<hr id="10"/>
		
							<div>
			
								<h2 id="tandctitle">10. Terms and Conditions</h2>		
						
							</div> 
							
							<br/>
							
							<div id="leftcol">		
								
								<h4 id="tandch4">Exclusions</h4>
								
								<p id="tandcp">
								
									The following are specifically excluded from this quotation (except where specified):
									
									<ul id="tandclist">
									
										<li>Value Added Tax and Import Duties. (See note below)</li>
										<li>Any foundations or civil work</li>
										<li>Off-loading machine and commissioning at customer’s premises</li>
										<li>Export packaging</li>
										<li>Anything not specifically stated in the quotation</li>
									
									</ul>
								
								</p>
							
								<h4 id="tandch4">Value Added Tax (EEC Countries)</h4>
								
								<p id="tandcp">To comply with 1993 EEC VAT Regulations, can you please ensure your VAT Registration Number is clearly stated on your purchase order.</p>
							
								<h4 id="tandch4">Delivery</h4>
								
								<p id="tandcp">Our delivery is dependent on production commitments at the time of order. Normally 14-16 weeks.</p>
							
								<h4 id="tandch4">Terms of Payment</h4>
								
								<p id="tandcp">40% with order. <br/>55% on completion of machine build and acceptance trials at our site. This payment needs to be received and cleared in the nominated bank account before the machine is shipped to the customer. <br/>5% 30 days after dispatch of the machine. <br/><br/>All non-UK payments to be made by irrevocable letter of credit confirmed by a UK clearing bank. All costs associated with raising the Letter of Credit are to be paid by the customer.<br/><br/>All pricing is in GBP (£) unless otherwise stated.</p>
							
								<h4 id="tandch4">Warranty</h4>
								
								<p id="tandcp">The goods offered under this quotation are warranted free from defects in design, material and construction for a period of 12 months from the date of dispatch. Should a component fail during the 12 month warranty period it will be exchanged free of charge. The warranty is for parts only and does not include labour, travelling or delivery.</p>
							
							</div>
							
							<br/>
							
							<div id="rightcol">
							
								<h4 id="tandch4">Validity</h4>
								
								<p id="tandcp">This offer is valid for 60 days from document date.</p>
							
								<h4 id="tandch4">Safety/Documentation</h4>
								
								<p id="tandcp">The machine will conform to local safety standards. It will be supplied with a full set of documentation in English.</p>
							
								<h4 id="tandch4">Test Materials</h4>
								
								<p id="tandcp">If Customer materials are to be used for test or acceptance trials are to be supplied as free issue by the customer, who will be responsible for all transport charges.</p>
							
								<h4 id="tandch4">Ownership</h4>
								
								<p id="tandcp">All machinery and components delivered remain the property of Universal Control Equipment Ltd until full payment has been received.</p>
							
								<h4 id="tandch4">Standard Terms and Conditions of Sale</h4>
								
								<p id="tandcp">The sale of the machine is subject to the standard terms and conditions of sale of Universal Converting Equipment a trading division of Universal Control Equipment Ltd.
					Terms are available at <a href="http://www.universalconvertingequipment.com/terms">www.universalconvertingequipment.com/terms</a></p>
							
								<h4 id="tandch4">Design Update</h4>
								
								<p id="tandcp">Please note that we are continually developing our designs and products. The photographs, descriptions and specifications given in this quote are for guidance only and are subject to change. Final details will be confirmed at the time of order placement.</p>
																					
							</div>' ;

			$sectionEleven = '<hr id="11"/>
		
							<div>
			
								<h2>11. Installation</h2>		
						
							</div> 
							
							<br/>
							
							<div>		
								
								<p>The customer will be responsible for providing a level base for the machine and also the necessary services such as electricity and air supplies as detailed below:</p>
							
								<h4>Power</h4>
								
								<p>
								
									<ul id="list">
									
										<li>380-420V 3 phase (No Neutral), 50Hz ±10%</li>
										<li>440-480V 3 phase (No Neutral), 60Hz ±10%</li>
										<li>20 KVA @ 32 Amps</li>
									
									</ul>
								
								</p>
							
								<h4>Air</h4>
								
								<p>
								
									<ul id="list">
									
										<li>Pressure - 6 bar minimum</li>
										<li>Consumption - 0.1 Cubic meters per minute</li>
										<li>Quality - Clean & Dry filtered to 0.3 Micron particles 99.9% oil mist removed</li>
										<li>Connection - 10mm</li>
									
									</ul>
								
								</p>
							
								<h4>Environmental</h4>
								
								<p>
								
									<ul id="list">
									
										<li>Temperature - 0-40 Degrees Celsius</li>
										<li>Relative Humidity - Max 80% non-condensing</li>
										<li>Max Working Height - 1000 M Above sea level</li>
										<li>Noise Levels - 78 dB(A) Without trim system</li>
									
									</ul>
								
								</p>
							
								<p>Normally installation and training would be undertaken by the same engineer. I would allow for an engineer being on site for six days to install the machine and provide operator training. Standard charges are:
								
									<ul id="list">
									
										<li>Travel time and site time £75/hour</li>
										<li>Car mileage £0.75 per mile</li>
										<li>Other travel and subsidence expenses at cost</li>
									
									</ul>
								
								</p>
							
							
							</div>' ;

			$footer = '		<div>
		
								<p id="footerp">
								
									Universal Converting Equipment, B12 Farthing Road Industrial Estate, Ipswich, Suffolk, IP1 5AP, UK
									
									<br/>
									
									Phone +44 (0) 1473 403333  
									
									<a id="footerlink" href="http://www.universalconvertingequipment.com/">www.universalconvertingequipment.com/</a>
								</p>
		
							</div>' ;
			
			$quote = 		$sectionOne . 
							$machineQuote . 
							$sectionFour . 
							$sectionFive . 
							$sectionSix . 
							$sectionSeven . 
							$sectionEight . 
							$sectionNine . 
							$sectionTen . 
							$sectionEleven . 
							$footer ;
				
			echo($quote);		
				
		?>

	</body>
	
</html>