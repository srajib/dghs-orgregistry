<script>
  $(document).ready(function() {
    $("#tabs").tabs();
  });
  </script>
  <style>
  input[type=text]
  {
   border:1px solid green;
  }
  </style>




	<div style="margin-top:15px;">
		<table class="tableHeader" id="drafts" cellpadding="0" cellspacing="0" width="95%">
			<tr>
				<th width="100%" align="left" colspan="2"><b>Add Organization Details<b></th>  
				
			</tr>

	




<?php


	
$url ="http://app.dghs.gov.bd/dghshrm/uploads/";			
?>
<tr valign="top">
					<td width="0%" align="left" valign="top">
					 
				        
					</td>
                    <td>
                    
<div id="tabs">
    <ul>
        <li><a href="#fragment-1" style="background-color:#D6ECFA"><span><font color="#000000"font size="1.5">Basic Information</font></span></a></li>
        <li><a href="#fragment-2" style="background-color:#D6ECFA"><span><font color="#000000"font size="1.5">Contact Information</font></span></a></li>
		<li><a href="#fragment-3" style="background-color:#D6ECFA"><span><font color="#000000"font size="1.5">Source of electricity,Fuel,water supply& Toilet Facility</font></span></a></li>
		<li><a href="#fragment-4" style="background-color:#D6ECFA"><span><font color="#000000"font size="1.5">Other Information</font></span></a></li>
    </ul>
    <div id="fragment-1" style="height:700px;">
	  <div style="margin-left:10px;float:left;width:400px;">
      <form action="/orgregistry/pages/addorg" id="BbscodeAddorgForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST" /></div><table border="0" width="500">

<td width="200" height="30" align="right"><b>Organization Code :</b>
</td>
<td width="250"><div class="input text"><input name="data[Organization][organization_code]" type="text" value="10002317" readonly="readonly" id="BbscodeOrganizationCode" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Organization Name :</b>
</td>
<td><div class="input text"><input name="data[Organization][title]" type="text" id="OrganizationTitle" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Agency Code :</b>
</td>
<td><div class="input text"><input name="data[Organization][agencie_code]" type="text" id="OrganizationAgencieCode" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Agency Name :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Financial Code :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Ogranization Photo :</b>
</td>
<td><input type="file" name="data[Organization][photo]" id="OrganizationPhoto" /></td>
</tr>
<tr>
<td height="30" align="right"><b>Division Code :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Division Name :</b>
</td>
<td><select name="data[Organization][division_code]" id="OrganizationDivisionCode">
<option value="" selected="selected">Select Division</option>
<option value="1">Dhaka</option>
<option value="2">Chittagong</option>
<option value="3">Rajshahi</option>
<option value="4">Rangpur</option>
<option value="5">Khulna</option>
<option value="6">Barisal</option>
<option value="7">Sylhet</option>
</select></td>
</tr>

<tr>
<td height="30" align="right"><b>District Code :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>District Name :</b>
</td>
<td><select name="data[Organization][district_code]" id="OrganizationDistrictCode">
<option value="" selected="selected">Select District</option>
<option value="1">Dhaka</option>
<option value="2">Faridpur</option>
<option value="3">Gazipur</option>
<option value="4">Gopalganj</option>
<option value="5">Jamalpur</option>
<option value="6">Kishorgonj</option>
<option value="7">Madaripur</option>
<option value="8">Manikganj</option>
<option value="9">Munshiganj</option>
<option value="10">Mymensingh</option>
<option value="11">Narayanganj</option>
<option value="12">Narsingdi</option>
<option value="13">Netrakona</option>
<option value="14">Rajbari</option>
<option value="15">Shariatpur</option>
<option value="16">Sherpur</option>
<option value="17">Tangail</option>
<option value="18">Bandarban</option>
<option value="19">Brahmanbaria</option>
<option value="20">Chandpur</option>
<option value="21">Chittagong</option>
<option value="22">Comilla</option>
<option value="23">Cox&#039;s Bazar</option>
<option value="24">Feni</option>
<option value="25">Khagrachhari</option>
<option value="26">Lakshmipur</option>
<option value="27">Noakhali</option>
<option value="28">Rangamati</option>
<option value="29">Bogra</option>
<option value="31">Chapai Nawabganj</option>
<option value="32">Dinajpur</option>
<option value="33">Gaibandha</option>
<option value="34">Joypurhat</option>
<option value="35">Kurigram</option>
<option value="36">Lalmonirhat</option>
<option value="37">Naogaon</option>
<option value="38">Natore</option>
<option value="39">Nilphamari</option>
<option value="40">Pabna</option>
<option value="41">Panchagarh</option>
<option value="42">Rajshahi</option>
<option value="43">Rangpur</option>
<option value="44">Sirajganj</option>
<option value="45">Thakurgaon</option>
<option value="46">Bagerhat</option>
<option value="47">Chuadanga</option>
<option value="48">Jessore</option>
<option value="49">Jhenaidah</option>
<option value="50">Khulna</option>
<option value="51">Kushtia</option>
<option value="52">Magura</option>
<option value="53">Meherpur</option>
<option value="54">Narail</option>
<option value="55">Satkhira</option>
<option value="56">Barguna</option>
<option value="57">Barisal</option>
<option value="58">Bhola</option>
<option value="59">Jhalokati</option>
<option value="60">Patuakhali</option>
<option value="61">Pirojpur</option>
<option value="62">Habiganj</option>
<option value="64">Maulvibazar</option>
<option value="65">Sunamganj</option>
<option value="66">Sylhet</option>
</select></td>
</tr>
<tr>
<td height="30" align="right"><b>Upazilla code :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Upazilla Name :</b>
</td>
<td><select name="data[Organization][upazila_code]" id="OrganizationUpazilaCode">
<option value="" selected="selected">Select Upazilla</option>
<option value="573">Adarsha Sadar</option>
<option value="2">Dhaka Metropolitan</option>
<option value="3">Dhamrai</option>
<option value="4">Dohar</option>
<option value="5">IDH</option>
<option value="6">Keraniganj</option>
<option value="7">Nawabganj</option>
<option value="8">Savar</option>
<option value="9">Alfadanga</option>
<option value="10">Bhanga</option>
<option value="11">Boalmari</option>
<option value="12">Charbhadrason</option>
<option value="13">Faridpur Sadar</option>
<option value="14">Faridpur Sadar Upazila</option>
<option value="15">Madhukhali</option>
<option value="16">Modhukhali</option>
<option value="17">Nagarkanda</option>
<option value="18">Sadarpur</option>
<option value="19">Gazipur</option>
<option value="20">Gazipur Sadar</option>
<option value="21">Gazipur Sadar Upazila</option>
<option value="22">Kaliakair</option>
<option value="23">Kaliganj</option>
<option value="24">Kapasia</option>
<option value="25">Sreepur</option>
<option value="26">Gopalganj Sadar</option>
<option value="27">Gopalganj Sadar Upazila</option>
<option value="28">Kassiani</option>
<option value="29">Kotwalipara</option>
<option value="30">Mukshedpur</option>
<option value="31">Tungipara</option>
<option value="32">Bakshiganj</option>
<option value="33">Dewanganj</option>
<option value="34">Islampur</option>
<option value="35">Jamalpur Sadar</option>
<option value="36">Jamalpur Sadar Upazila</option>
<option value="37">Madarganj</option>
<option value="38">Melandaha</option>
<option value="39">Sarisabari</option>
<option value="40">Astagram</option>
<option value="41">Bajitpur</option>
<option value="42">Bhairab</option>
<option value="43">Hossainpur</option>
<option value="44">Itna</option>
<option value="45">Karimganj</option>
<option value="46">Katiadi</option>
<option value="47">Kishoreganj Sadar</option>
<option value="48">Kishoreganj Sadar Upazila</option>
<option value="49">Kuliarchar</option>
<option value="50">Mithamoin</option>
<option value="51">Nikhli</option>
<option value="52">Pakundia</option>
<option value="53">Tarail</option>
<option value="54">Kalkini</option>
<option value="55">Madaripur Sadar</option>
<option value="56">Madaripur Sadar Upazila</option>
<option value="57">Rajoir</option>
<option value="58">Shibchar</option>
<option value="59">Daulatpur</option>
<option value="60">Ghior</option>
<option value="61">Harirampur</option>
<option value="62">Madaripur Sadar</option>
<option value="63">Manikganj Sadar</option>
<option value="64">Manikganj Sadar Upazila</option>
<option value="65">Saturia</option>
<option value="66">Shibalaya</option>
<option value="67">Singair</option>
<option value="68">Gazaria</option>
<option value="69">Louhajang</option>
<option value="70">Munshiganj Sadar</option>
<option value="71">Munshiganj Sadar Upazila</option>
<option value="72">Serajdikhan</option>
<option value="73">Sreenagar</option>
<option value="74">Tungibari</option>
<option value="75">Bhaluka</option>
<option value="76">Dhubaura</option>
<option value="77">Fulbaria</option>
<option value="78">Fulpur</option>
<option value="79">Gofargaon</option>
<option value="80">Gouripur</option>
<option value="81">Haluaghat</option>
<option value="82">Iswarganj</option>
<option value="83">Muktagacha</option>
<option value="84">Mymensingh Sadar</option>
<option value="85">Mymensingh Sadar Upazila</option>
<option value="86">Nandail</option>
<option value="87">Trisal</option>
<option value="88">Araihazar</option>
<option value="89">Bandar</option>
<option value="90">Narayanganj Sadar</option>
<option value="91">Narayanganj Sadar Upazila</option>
<option value="92">Rupganj</option>
<option value="93">Sonargaon</option>
<option value="94">Belabo</option>
<option value="95">Monohardi</option>
<option value="96">Narsingdi Sadar</option>
<option value="97">Narsingdi Sadar Upazila</option>
<option value="98">Palash</option>
<option value="99">Raipura</option>
<option value="100">Shibpur</option>
<option value="101">Atpara</option>
<option value="102">Barhatta</option>
<option value="103">Durgapur</option>
<option value="104">Kalmakanda</option>
<option value="105">Kendua</option>
<option value="106">Khaliajhuir</option>
<option value="107">Madan</option>
<option value="108">Mohanganj</option>
<option value="109">Netrokona Sadar</option>
<option value="110">Netrokona Sadar Upazila</option>
<option value="111">Purbadhala</option>
<option value="112">Baliakandi</option>
<option value="113">Goalanda</option>
<option value="114">Kalukhali</option>
<option value="115">Pangsha</option>
<option value="116">Rajbari Sadar</option>
<option value="117">Rajbari Sadar Upazila</option>
<option value="118">Bhedarganj</option>
<option value="119">Damuddya</option>
<option value="120">Goshairhat</option>
<option value="121">Naria</option>
<option value="122">Shariatpur Sadar</option>
<option value="123">Shariatpur Sadar Upazila</option>
<option value="124">Zanzira</option>
<option value="125">Jhenaigati</option>
<option value="126">Nakhla</option>
<option value="127">Nalitabari</option>
<option value="128">Sherpur Sadar</option>
<option value="129">Sherpur Sadar Upazila</option>
<option value="130">Sribardi</option>
<option value="131">Basail</option>
<option value="132">Bhuapur</option>
<option value="133">Delduar</option>
<option value="134">Dhanbari</option>
<option value="135">Ghatail</option>
<option value="136">Gopalpur</option>
<option value="137">Kalihati</option>
<option value="138">Mirzapur</option>
<option value="139">Modhupur</option>
<option value="140">Nagarpur</option>
<option value="141">Sakhipur</option>
<option value="142">Tangail Sadar</option>
<option value="143">Tangail Sadar Upazila</option>
<option value="144">Alikadam</option>
<option value="145">Bandarban Sadar</option>
<option value="146">Bandarban Sadar Upazila</option>
<option value="147">Lama</option>
<option value="148">Nykongchari</option>
<option value="149">Rawangchari</option>
<option value="150">Ruma</option>
<option value="151">Thanchi</option>
<option value="152">Akhaura</option>
<option value="153">Ashugonj</option>
<option value="154">Bancharampur</option>
<option value="155">Brahmanbaria Sadar</option>
<option value="156">Brahmanbaria Sadar Upazila</option>
<option value="157">Kashba</option>
<option value="158">Nabinagar</option>
<option value="159">Nasirnagar</option>
<option value="160">Sarail</option>
<option value="161">Chandpur Sadar</option>
<option value="162">Chandpur Sadar Upazila</option>
<option value="163">Faridganj</option>
<option value="164">Haimchar</option>
<option value="165">Hajiganj</option>
<option value="166">Haziganj</option>
<option value="167">Kachua</option>
<option value="168">Matlab(Daxin)</option>
<option value="169">Matlab(Uttar)</option>
<option value="170">Saharasthi</option>
<option value="171">Anwara</option>
<option value="172">Banshkhali</option>
<option value="173">Boalkhali</option>
<option value="174">Chandanaish</option>
<option value="175">Chandpur Sadar Upazila</option>
<option value="176">Chittagong</option>
<option value="177">Chittagong Metropolitan</option>
<option value="178">Fatikchari</option>
<option value="179">Hathazari</option>
<option value="180">Lohagara</option>
<option value="181">Mirarsarai</option>
<option value="182">Mirersarai</option>
<option value="183">Patiya</option>
<option value="184">Potiya</option>
<option value="185">Rangunia</option>
<option value="186">Raujan</option>
<option value="187">Rowjan</option>
<option value="188">Sandwip</option>
<option value="189">Satkania</option>
<option value="190">Sitakunda</option>
<option value="191">Barura</option>
<option value="192">Brahmmanpara</option>
<option value="193">Burichong</option>
<option value="194">Chaddagram</option>
<option value="195">Chandina</option>
<option value="196">Comilla Sadar</option>
<option value="197">Comilla Sadar Daxin</option>
<option value="198">Comilla Sadar Upazila</option>
<option value="199">Daudkandi</option>
<option value="200">Debidwar</option>
<option value="201">Homna</option>
<option value="202">Laksam</option>
<option value="203">Laksham</option>
<option value="204">Meghna</option>
<option value="205">Monoharganj</option>
<option value="206">Muradnagar</option>
<option value="207">Nangolkot</option>
<option value="208">Sadar Daxin</option>
<option value="209">Titas</option>
<option value="210">Chakaria</option>
<option value="211">Cox&#039;s Bazar Sadar</option>
<option value="212">Cox&#039;s Bazar Sadar Upazila</option>
<option value="213">Kutubdia</option>
<option value="214">Moheshkhali</option>
<option value="215">Pakua</option>
<option value="216">Ramu</option>
<option value="217">Teknaf</option>
<option value="218">Ukhyia</option>
<option value="219">Chhagalnaya</option>
<option value="220">Daganbhuiya</option>
<option value="221">Feni Sadar</option>
<option value="222">Feni Sadar Upazila</option>
<option value="223">Fulgazi</option>
<option value="224">Parsuram</option>
<option value="225">Sonagazi</option>
<option value="226">Dighinala</option>
<option value="227">Khagrachari Sadar</option>
<option value="228">Khagrachari Sadar Upazila</option>
<option value="229">Lakshmichari</option>
<option value="230">Manikchari</option>
<option value="231">Matiranga</option>
<option value="232">Mohalchari</option>
<option value="233">Panchari</option>
<option value="234">Ramgarh</option>
<option value="235">Kamolnagar</option>
<option value="236">Lakshmipur Sadar</option>
<option value="237">Lakshmipur Sadar Upazila</option>
<option value="238">Raipur</option>
<option value="239">Ramganj</option>
<option value="240">Ramgati</option>
<option value="241">Begumganj</option>
<option value="242">Chatkhil</option>
<option value="243">Companiganj</option>
<option value="244">Hatiya</option>
<option value="245">Kabirhat</option>
<option value="246">Noakhali Sadar</option>
<option value="247">Noakhali Sadar Upazila</option>
<option value="248">Senbag</option>
<option value="249">Sonaimuri</option>
<option value="250">Subarnachar</option>
<option value="251">Baghaichari</option>
<option value="252">Barkol</option>
<option value="253">Belaichari</option>
<option value="254">Jhuraichari</option>
<option value="255">Juraichari</option>
<option value="256">Kaptai</option>
<option value="257">Kawkhali</option>
<option value="258">Kowkhali</option>
<option value="259">Langadu</option>
<option value="260">Naniarchar</option>
<option value="261">Rajstali</option>
<option value="262">Rangamati Sadar</option>
<option value="263">Rangamati Sadar Upazila</option>
<option value="264">Adamdighi</option>
<option value="265">Bogra Sadar</option>
<option value="266">Bogra Sadar Upazila</option>
<option value="267">Dhunat</option>
<option value="268">Dhupchachia</option>
<option value="269">Gabtali</option>
<option value="270">Kahaloo</option>
<option value="271">Nandigram</option>
<option value="272">Sariakandi</option>
<option value="273">Shajahanpur</option>
<option value="274">Sherpur</option>
<option value="275">Shibganj</option>
<option value="276">Sonatala</option>
<option value="277">Bholahat</option>
<option value="278">Gomastapur</option>
<option value="279">Nachol</option>
<option value="280">Shibganj</option>
<option value="281">Chapai Nawabganj Sadar</option>
<option value="282">Chapai Nawabganj Sadar Upazila</option>
<option value="283">Nawabganj Sadar</option>
<option value="284">Birampur</option>
<option value="285">Birganj</option>
<option value="286">Birol</option>
<option value="287">Bochaganj</option>
<option value="288">Chirirbandar</option>
<option value="289">Dinajpur Sadar</option>
<option value="290">Dinajpur Sadar Upazila</option>
<option value="291">Fulbari</option>
<option value="292">Ghoraghat</option>
<option value="293">Hakimpur</option>
<option value="294">Kaharol</option>
<option value="295">Khansama</option>
<option value="296">Nawabganj</option>
<option value="297">Parbatipur</option>
<option value="298">Fulchari</option>
<option value="299">Gaibandha Sadar</option>
<option value="300">Gaibandha Sadar Upazila</option>
<option value="301">Gobindaganj</option>
<option value="302">Palashbari</option>
<option value="303">Sadullapur</option>
<option value="304">Shaghatta</option>
<option value="305">Sundarganj</option>
<option value="306">Akkelpur</option>
<option value="307">Joypurhat Sadar</option>
<option value="308">Joypurhat Sadar Upazila</option>
<option value="309">Kalai</option>
<option value="310">Khetlal</option>
<option value="311">Panchbibi</option>
<option value="312">Bhurungamari</option>
<option value="313">Chilmari</option>
<option value="314">Fulbari</option>
<option value="315">Kurigram Sadar</option>
<option value="316">Kurigram Sadar Upazila</option>
<option value="317">Nageswari</option>
<option value="318">Rajarhat</option>
<option value="319">Rajibpur</option>
<option value="320">Rowmari</option>
<option value="321">Ulipur</option>
<option value="322">Ullipur</option>
<option value="323">Aditmari</option>
<option value="324">Hatibandha</option>
<option value="325">Kaliganj</option>
<option value="326">Lalmonirhat Sadar</option>
<option value="327">Lalmonirhat Sadar Upazila</option>
<option value="328">Patgram</option>
<option value="329">Atrai</option>
<option value="330">Badalgachi</option>
<option value="331">Dhamairhat</option>
<option value="332">Manda</option>
<option value="333">Mohadevpur</option>
<option value="334">Naogaon Sadar</option>
<option value="335">Naogaon Sadar Upazila</option>
<option value="336">Niamatpur</option>
<option value="337">Patnitala</option>
<option value="338">Porsha</option>
<option value="339">Raninagar</option>
<option value="340">Sapahar</option>
<option value="341">Bagatipara</option>
<option value="342">Baraigram</option>
<option value="343">Gurudashpur</option>
<option value="344">Lalpur</option>
<option value="345">Natore Sadar</option>
<option value="346">Natore Sadar Upazila</option>
<option value="347">Singra</option>
<option value="348">Dimla</option>
<option value="349">Domar</option>
<option value="350">Jaldhaka</option>
<option value="351">Kishoreganj</option>
<option value="352">Nilphamari Sadar</option>
<option value="353">Nilphamari Sadar Upazila</option>
<option value="354">Saidpur</option>
<option value="355">Atghoria</option>
<option value="356">Bangura</option>
<option value="357">Bera</option>
<option value="358">Chatmohar</option>
<option value="359">Faridpur</option>
<option value="360">Iswardi</option>
<option value="361">Pabna Sadar</option>
<option value="362">Pabna Sadar Upazila</option>
<option value="363">Santhia</option>
<option value="364">Sujanagar</option>
<option value="365">Atwari</option>
<option value="366">Boda</option>
<option value="367">Debiganj</option>
<option value="368">Panchagarh Sadar</option>
<option value="369">Panchagarh Sadar Upazila</option>
<option value="370">Tetulia</option>
<option value="371">Bagmara</option>
<option value="372">Bogha</option>
<option value="373">Charghat</option>
<option value="374">Durgapur</option>
<option value="375">Godagari</option>
<option value="376">Mohanpur</option>
<option value="377">Paba</option>
<option value="378">Puthia</option>
<option value="379">Rajshahi</option>
<option value="380">Rajshahi Metropolitan</option>
<option value="381">Tanore</option>
<option value="382">Baderganj</option>
<option value="383">Gangachara</option>
<option value="384">Kaunia</option>
<option value="385">Kownia</option>
<option value="386">Mithapukur</option>
<option value="387">Pirgacha</option>
<option value="388">Pirganj</option>
<option value="389">Rangpur Sadar</option>
<option value="390">Rangpur Sadar Upazila</option>
<option value="391">Taraganj</option>
<option value="392">Belkuchi</option>
<option value="393">Chowhali</option>
<option value="394">Kamarkanda</option>
<option value="395">Kazipur</option>
<option value="396">Raiganj</option>
<option value="397">Serajganj Sadar</option>
<option value="398">Serajganj Sadar Upazila</option>
<option value="399">Shahzadpur</option>
<option value="400">Tarash</option>
<option value="401">Ullapara</option>
<option value="402">Baliadangi</option>
<option value="403">Haripur</option>
<option value="404">Pirganj</option>
<option value="405">Ranisankhail</option>
<option value="406">Thakurgaon Sadar</option>
<option value="407">Thakurgaon Sadar Upazila</option>
<option value="408">Bagerhat Sadar</option>
<option value="409">Bagerhat Sadar Upazila</option>
<option value="410">Chitalmari</option>
<option value="411">Fakirhat</option>
<option value="412">Kachua</option>
<option value="413">Mollahat</option>
<option value="414">Mongla</option>
<option value="415">Morelganj</option>
<option value="416">Morrelganj</option>
<option value="417">Rampal</option>
<option value="418">Sarankhola</option>
<option value="419">Alamdanga</option>
<option value="420">Chuadanga Sadar</option>
<option value="421">Chuadanga Sadar Upazila</option>
<option value="422">Damurhuda</option>
<option value="423">Jibannagar</option>
<option value="424">Abhoynagar</option>
<option value="425">Bagerpara</option>
<option value="426">Chowgacha</option>
<option value="427">Jessore Sadar</option>
<option value="428">Jessore Sadar Upazila</option>
<option value="429">Jhikargacha</option>
<option value="430">Keshabpur</option>
<option value="431">Monirampur</option>
<option value="432">Sarsa</option>
<option value="433">Harinakunda</option>
<option value="434">Jhenaidah Sadar</option>
<option value="435">Jhenaidah Sadar Upazila</option>
<option value="436">Kaliganj</option>
<option value="437">Kotchandpur</option>
<option value="438">Moheshpur</option>
<option value="439">Sailkupa</option>
<option value="440">Batiaghata</option>
<option value="441">Dacope</option>
<option value="442">Dighalia</option>
<option value="443">Dumuria</option>
<option value="444">Fultala</option>
<option value="445">Khulna</option>
<option value="446">Khulna Metropolitan</option>
<option value="447">Koyra</option>
<option value="448">Paikgacha</option>
<option value="449">Rupsha</option>
<option value="450">Terakhada</option>
<option value="451">Bheramara</option>
<option value="452">Daulatpur</option>
<option value="453">Khoksha</option>
<option value="454">Kumarkhali</option>
<option value="455">Kushtia Sadar</option>
<option value="456">Kushtia Sadar Upazila</option>
<option value="457">Mirpur</option>
<option value="458">Magura Sadar</option>
<option value="459">Magura Sadar Upazila</option>
<option value="460">Mohammadpur</option>
<option value="461">Salika</option>
<option value="462">Sreepur</option>
<option value="463">Gangni</option>
<option value="464">Meherpur Sadar</option>
<option value="465">Meherpur Sadar Upazila</option>
<option value="466">Mujibnagar</option>
<option value="467">Kalia</option>
<option value="468">Lohagara</option>
<option value="469">Narail Sadar</option>
<option value="470">Narail Sadar Upazila</option>
<option value="471">Assasuni</option>
<option value="472">Debhatta</option>
<option value="473">Kalaroa</option>
<option value="474">Kaliganj</option>
<option value="475">Satkhira Sadar</option>
<option value="476">Satkhira Sadar Upazila</option>
<option value="477">Shyamnagar</option>
<option value="478">Tala</option>
<option value="479">Amtali</option>
<option value="480">Bamna</option>
<option value="481">Barguna Sadar</option>
<option value="482">Barguna Sadar Upazila</option>
<option value="483">Betagi</option>
<option value="484">Pathargatha</option>
<option value="485">Agailjhara</option>
<option value="486">Babuganj</option>
<option value="487">Babugonj</option>
<option value="488">Bakerganj</option>
<option value="489">Banaripara</option>
<option value="490">Barisal</option>
<option value="491">Barisal Sadar</option>
<option value="492">Barisal Sadar Upazila</option>
<option value="493">Gournadi</option>
<option value="494">Hijla</option>
<option value="495">Mehendiganj</option>
<option value="496">Muladi</option>
<option value="497">Wazirpur</option>
<option value="498">Bhola Sadar</option>
<option value="499">Bhola Sadar Upazila</option>
<option value="500">Borhanuddin</option>
<option value="501">Charfession</option>
<option value="502">Daulatkhan</option>
<option value="503">Lalmohan</option>
<option value="504">Manpura</option>
<option value="505">Tajumuddin</option>
<option value="506">Jhalokathi</option>
<option value="507">Jhalokathi Sadar</option>
<option value="508">Jhalokathi Sadar Upazila</option>
<option value="509">Kathalia</option>
<option value="510">Nalchithi</option>
<option value="511">Rajapur</option>
<option value="512">Bauphal</option>
<option value="513">Dashmina</option>
<option value="514">Dumki</option>
<option value="515">Galachipa</option>
<option value="516">Kalapara</option>
<option value="517">Mirzaganj</option>
<option value="518">Patuakhali Sadar</option>
<option value="519">Patuakhali Sadar Upazila</option>
<option value="520">Bhandaria</option>
<option value="521">Kaukhali</option>
<option value="522">Mathbaria</option>
<option value="523">Nazirpur</option>
<option value="524">Nesarabad</option>
<option value="525">Perojpur Sadar</option>
<option value="526">Perojpur Sadar Upazila</option>
<option value="527">Zia Nagar</option>
<option value="528">Habiganj Sadar Upazila</option>
<option value="529">Azmiriganj</option>
<option value="530">Bahubal</option>
<option value="531">Baniachong</option>
<option value="532">Chunarughat</option>
<option value="533">Hobiganj Sadar</option>
<option value="534">Lakhai</option>
<option value="535">Madhabpur</option>
<option value="536">Nabiganj</option>
<option value="537">Barlekha</option>
<option value="538">Juri</option>
<option value="539">Kamalganj</option>
<option value="540">Kulaura</option>
<option value="541">Moulvibazar Sadar</option>
<option value="542">Moulvibazar Sadar Upazila</option>
<option value="543">Rajnagar</option>
<option value="544">Sreemangal</option>
<option value="545">Biswambarpur</option>
<option value="546">Chhatak</option>
<option value="547">Daxin Sunamganj</option>
<option value="548">Deerai</option>
<option value="549">Dharmapasha</option>
<option value="550">Doarabazar</option>
<option value="551">Jagannathpur</option>
<option value="552">Jamalganj</option>
<option value="553">Sulla</option>
<option value="554">Sunamganj Sadar</option>
<option value="555">Sunamganj Sadar Upazila</option>
<option value="556">Taherpur</option>
<option value="557">Balaganj</option>
<option value="558">Beanibazar</option>
<option value="559">Biswanath</option>
<option value="560">Companiganj</option>
<option value="561">DHO</option>
<option value="562">Fenchuganj</option>
<option value="563">Golapganj</option>
<option value="564">Gopalganj</option>
<option value="565">Gowainghat</option>
<option value="566">Jointapur</option>
<option value="567">Kanaighat</option>
<option value="568">Sylhet Sadar</option>
<option value="569">Sylhet Sadar Upazila</option>
<option value="570">Zakigang</option>
<option value="571">Zokiganj</option>
<option value="572">kutubdia</option>
<option value="574">Surma</option>
</select></td>
</tr>

<tr>
<td height="30" align="right"><b>Organization Type. :</b>
</td>
<td><select name="data[Organization][contact_no]" id="OrganizationContactNo">
<option value="" selected="selected">Select Org. Type</option>
<option value="1">25-bed hospital</option>
<option value="2">31-bed health complex (not UHC)</option>
<option value="3">50-bed hospital (Tongi &amp; Syedpur)</option>
<option value="4">Airport health office</option>
<option value="5">BSMMU</option>
<option value="6">Cancer Institute</option>
<option value="7">Chest Disease Hospital</option>
<option value="8">Center for Medical Education</option>
<option value="9">CS Office</option>
<option value="10">Dental College &amp; Hospital</option>
<option value="11">DGHS (HQ)</option>
<option value="12">District Hospital</option>
<option value="13">Division Health Office</option>
<option value="14">General Hospital</option>
<option value="15">Homeopathic Medical College</option>
<option value="16">Infectious Disease Hospital</option>
<option value="17">IEDCR</option>
<option value="18">Institute of Health Technology</option>
<option value="19">Institute of Public Health</option>
<option value="20">Institute of Public Health Nutrition</option>
<option value="21">Leprosy Hospital</option>
<option value="22">Medical Assistants&#039; Training School</option>
<option value="23">Medical College</option>
<option value="24">Medical College Hospital</option>
<option value="25">Medical Sub-depot</option>
<option value="26">NICVD</option>
<option value="27">NIDCH</option>
<option value="28">NIKDU</option>
<option value="29">NIO</option>
<option value="30">NIPSOM</option>
<option value="31">NITOR</option>
<option value="32">Port Health Office</option>
<option value="33">Rheumatic Fever Center</option>
<option value="34">Rural Health Center (10-bed)</option>
<option value="35">Sadar Upazila Health Office</option>
<option value="36">School Health Clinic</option>
<option value="37">TB Clinic</option>
<option value="38">TB Hospital</option>
<option value="39">Tibbiya College</option>
<option value="40">Union Health &amp; Family Welfare Center</option>
<option value="41">Unani &amp; Ayurvedic College</option>
<option value="42">Union sub-center</option>
<option value="43">Upazila Health Complex</option>
<option value="44">Urban dispensary</option>
<option value="45">Community Clinic</option>
<option value="46">Trauma Center</option>
<option value="49">20-bed hospital</option>
<option value="52">NIMH&amp;R</option>
<option value="55">Family Welfare Center</option>
<option value="56">10-bed hospital</option>
<option value="57">Other</option>
<option value="58">NTP (MBDC)</option>
<option value="59">BITID</option>
</select></td>
</tr>
<tr>
<td height="30" align="right"><b>Union :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Ward :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Villege/street :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>House No:</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Longitude :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Latitude :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"></form></td>
<td>
<div class="submit"><input type="submit" value="Save" /></div>
</td>
</tr>
</table>				
		
						
      
      
      </div>
    </div>
    <div id="fragment-2" style="height:700px;">
	   <div style="margin-left:10px;float:left;width:400px;">
       
			<form action="/orgregistry/pages/addorg" id="OrganizationAddorgForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST" /></div><table border="0" width="500">

<tr>
<td height="30" align="right"><b>Email 1:</b>
</td>
<td><div class="input text"><input name="data[Organization][email]" type="text" id="OrganizationEmail" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Email 2 :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Email 3 :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Land phone1:</b>
</td>
<td><input type="text" name="data[Organization][photo]" id="OrganizationPhoto" /></td>
</tr>
<tr>
<td height="30" align="right"><b>land phone2 :</b>
</td>
<td><input type="text" name="data[Organization][photo]" id="OrganizationPhoto" /></td>
</tr>
<tr>
<td height="30" align="right"><b>land phone3 :</b>
</td>
<td><input type="text" name="data[Organization][photo]" id="OrganizationPhoto" /></td>
</tr>
<tr>
<td height="30" align="right"><b>Contact No. :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Mobile No1 :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Mobile No2 :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Mobile No3 :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Fax 1 :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Fax_2 :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Fax 3 :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Website 1 :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Website 2 :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Website 3 :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Facebook :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Google+ :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Youtube :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Twitter :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>

</tr>
<tr>
<td height="30" align="right"></td>
<td>
<div class="submit"><input type="submit" value="Save" /></div></form>
</td>
</tr>
</table>				
		
       
       </div>
    </div>
	
	
	<div id="fragment-3" style="height:450px;">
	   <div style="margin-left:10px;float:left;width:400px;">
       
		<form action="/orgregistry/pages/addorg" id="OrganizationAddorgForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST" /></div><table border="0" width="500">

<tr>
<td height="30" align="right"><b>Main Source of Electricity :</b>
</td>
<td><select name="data[Organization][division_code]" id="OrganizationDivisionCode">
<option value="" selected="selected">Select source</option>
<option value="1">Current</option>
<option value="2">genarator</option>
<option value="3">Solar</option>
</select></td>
</tr>
<tr>
<td height="30" align="right"><b>Alternet Source of Electricity :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Fuel Source. :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Main Water Supply. :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Alternet water supply :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Toilet type. :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Toilet Adequency. :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>

<tr>
<td height="30" align="right"><b>Laundry system :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>

<tr>
<td height="30" align="right"><b>Autoclave System :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Waste disposal :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"></td>
<td>
<div class="submit"><input type="submit" value="Save" /></div></form>
</td>
</tr>
</table>
       
       </div>
    </div>
	
	<div id="fragment-4" style="height:450px;">
	   <div style="margin-left:10px;float:left;width:400px;">
			
			<form action="/orgregistry/pages/addorg" id="OrganizationAddorgForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST" /></div><table border="0" width="500">



<tr>
<td height="30" align="right"><b>Organizational functions :</b>
</td>
<td><select name="data[Organization][division_code]" id="OrganizationDivisionCode">
<option value="" selected="selected">Select</option>
<option value="1">Yes</option>
<option value="2">No</option>
</select></td>
</tr>
<tr>
<td height="30" align="right"><b>Sanctioned Vehicles :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Other miscellaneous issues :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Organization type:</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Organization level :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Health care level :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>

<tr>
<td height="30" align="right"><b>Special service / status of the hospital / clinic :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Permission/Approval/License information :</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Land Information:</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>
<tr>
<td height="30" align="right"><b>Other additional Information:</b>
</td>
<td><div class="input text"><input name="data[Organization][contact_no]" type="text" id="OrganizationContactNo" /></div></td>
</tr>

</tr>
<tr>
<td height="30" align="right"></td>
<td>
<div class="submit"><input type="submit" value="Save" /></div>
</form>
</td>
</tr>
</table>
			
			
			
			
			
			
			
			
			
					
       </div>
    </div>
</div>
</td>
</tr>
</table>
<?php 

		//	endforeach; ?>
			
		</table>
</div>