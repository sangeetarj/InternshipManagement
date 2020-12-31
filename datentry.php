<!DOCTYPE html>
<html>
<head>
	<title>Internship Form</title>
</head>
<body>
<form action="connect.php" method="POST">
<table border="1" align="centre">

   <tr>
    <td>name :</td>
    <td><input type="text" placeholder="Name" name="name" required></td>
   </tr>
   
   <tr>
    <td>USN  :</td>
    <td><input type="USN" placeholder="USN" name="USN" required></td>
  </tr>

   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="Gender" value="m"> Male
     <input type="radio" name="Gender" value="f"> Female
     <input type="radio" name="Gender" value="O"> Other
    </td>
   </tr>

   <tr>
    <td>Email :</td>
    <td><input type="email" placeholder="email" name="Email" required></td>
   </tr>

   <tr>
    <td>Phone no :</td>
    <td>
     </select>
     <input type="phone" placeholder="****" name="PhoneNo" required>
    </td>
   </tr>
   

   <tr>
    <td>Internship Status  :</td>
    <td>
      <input type="radio" name="Status" value="completed">Completed
      <input type="radio" name="Status" value="Pending">Pending
    </td>
  </tr>
  

<tr>
  <td>Serial number of internship carried out  :</td>
  <td>
    <select name="SerialNo">
      <option selected hidden value="">Select number</option>
      <option value="1st Internship">1st Internship</option>
      <option value="2nd Internship">2nd Internship</option>
      <option value="3rd Internship">3rd Internship</option>
      <option value="4th Internship">4th Internship</option>
      </select>
    </td>
  </tr>

<tr>
  <td>Year of completion :</td>
    <td>
     <select name="YearOfCompletion">
      <option selected hidden value="">Select Year</option>
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option>
    </select>
    </td>
   </tr>

<tr>
  <td>Name of industry  :</td>
    <td><input type="Company" placeholder="Company" name="NameOfIndustry" required></td>
  </tr>
  

  <tr>
    <td>Full address of industry  :</td>
    <td><input type="address" placeholder="address" name="AddressOfIndustry" required></td>
  </tr>

<tr>
  <td>Internship domain  :</td>
  <td>
    <select name="InternshipDomain">
      <option selected hidden value="">Select domain</option>
     <option value="Internet of Things">Internet of Things</option>
     <option value="VLSI">VLSI</option>
     <option value="Machine Learning">Machine Learning</option>
     <option value="Artificial Intelligence">Artificial Intelligence</option>
     <option value="Embedded Systems">Embedded Systems</option>
     <option value="Web Development">Web Development</option>
     <option value="App development">App development</option>
     <option value="Communication">Communication</option>
     <option value="Networking">Networking</option>
     <option value="Other">Other</option>
   </select>
 </td>
</tr>

<tr>
  <td>Start Date  :</td>
  <td>
    <select name="StartDate">
      <option selected hidden value="">Select Start date</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    <select name="StartDate">
      <option selected hidden value="">Select Start date</option>
      <option value="Jan">Jan</option>
      <option value="Feb">Feb</option>
      <option value="Mar">Mar</option>
      <option value="Apr">Apr</option>
      <option value="May">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="Aug">Aug</option>
      <option value="Sep">Sep</option>
      <option value="Oct">Oct</option>
      <option value="Nov">Nov</option>
      <option value="dec">dec</option>
    </select>
    <select name="StartDate">
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option>
    </select>
  </td>
</tr>

<tr>
  <td>End Date  :</td>
  <td>
    <select name="EndDate">
      <option selected hidden value="">Select End date</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    <select name="EndDate">
      <option selected hidden value="">Select End date</option>
      <option value="Jan">Jan</option>
      <option value="Feb">Feb</option>
      <option value="Mar">Mar</option>
      <option value="Apr">Apr</option>
      <option value="May">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="Aug">Aug</option>
      <option value="Sep">Sep</option>
      <option value="Oct">Oct</option>
      <option value="Nov">Nov</option>
      <option value="dec">dec</option>
    </select>
    <select name="EndDate">
      <option selected hidden value="">Select End date</option>
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option>
    </select>
  </td>
</tr>

<tr>
<td>Number of weeks of internship  :</td>
    <td><input type="number" placeholder="number" name="NumberOfWeeks" required></td> 
  </tr>  

  <tr>
  <td>Name of Industry Guide  :</td>
    <td><input type="guide" placeholder="ExternalGuide" name="ExternalGuide" required></td>
    </tr> 

<tr>
    <td>Email Id of the Industry Guide :</td>
    <td><input type="email" placeholder="email" name="EmailGuide" required></td>
   </tr>

<tr>
  <td>stipend Received  :</td>
  <td>
    <input type="radio" name="StipendReceived" value="Yes"> Yes
     <input type="radio" name="StipendReceived" value="No"> No
   </td>
 </tr>

 <tr>
  <td>Do you want this internship to be evaluated  :</td>
  <td>
    <input type="radio" name="InternshipEvaluation" value="Yes"> Yes
     <input type="radio" name="InternshipEvaluation" value="No"> No
     <input type="radio" name="InternshipEvaluation" value="Already evaluated"> already evaluated in past semester
   </td>
 </tr>

<tr>
  <td>KLS GIT Internal Guide  :</td>
  <td>
    <select name="Internal Guide">
      <option value="Anil Gavade">Anil Gavade</option>
      <option value="Dr. Suresh Kuri">Dr. Suresh Kuri</option>
      <option value="Abhishek Deshmukh">Abhishek Deshmukh</option>
      <option value="Ashish Gadgil">Ashish Gadgil</option>
      <option value="Bhagyashri R Pandurangi">Bhagyashri R Pandurangi</option>
      <option value="Dattaprasad Torse">Dattaprasad Torse</option>
      <option value="Deepak Kulkarni">Deepak Kulkarni</option>
      <option value="Gajanan P Kadam">Gajanan P Kadam</option>
      <option value="Giridhar Sudi">Giridhar Sudi</option>
      <option value="Gopikrisha P.V">Gopikrisha P.V</option>
      <option value="Jyoti B.R">Jyoti B.R</option>
      <option value="Mallikarjun">Mallikarjun</option>
      <option value="Maya Chaugule">Maya Chaugule</option>
      <option value="Nikhil Inamdar">Nikhil Inamdar</option>
      <option value="Pratijnya S Awajan">Pratijnya S Awajan</option>
      <option value="Priyanka D joshi">Priyanka D joshi</option>
      <option value="Ramesh Koti">Ramesh Koti</option>
      <option value="Sagar Santaji">Sagar Santaji</option>
      <option value="Sandhya Sudi">Sandhya Sudi</option>
      <option value="Santosh Saraf">Santosh Saraf</option>
      <option value="Satish Deshpande">Satish Deshpande</option>
      <option value="Saurav Mitra">Saurav Mitra</option>
      <option value="Shailesh Keshkamat">Shailesh Keshkamat</option>
      <option value="Sneha Nargundkar">Sneha Nargundkar</option>
      <option value="Snehal Kangralkar">Snehal Kangralkar</option>
      <option value="Sonal Suryavanshi">Sonal Suryavanshi</option>
      <option value="Sudhakar Hallur">Sudhakar Hallur</option>
      <option value="Supriya Shanbhag">Supriya Shanbhag</option>
      <option value="Uttam U Deshpande">Uttam U Deshpande</option>
      <option value="Vaidehi Deshpande">Vaidehi Deshpande</option>
      <option value="Veena Desai">Veena Desai</option>
      <option value="Veena Deshmukh">Veena Deshmukh</option>
      <option value="Vidyarani M Katigar">Vidyarani M Katigar</option>
      <option value="Vikrant Shinde">Vikrant Shinde</option>
      <option value="Vishweshwar Aithal">Vishweshwar Aithal</option>
    </select>
  </td>
</tr>

<tr>
  <td>Upload Internship Certificate  :</td>
 <td>
    <input type="file" id="myFile" name="filename" required>
  </td>
</tr>

<tr>
  <td>Upload Internship Report :</td>
  <td>
    <input type="file" id="myFile" name="filename" required>
  </td>
</tr>

<tr>
  <td>Upload Internship External Evaluation Sheet  :</td>
  <td>
    <input type="file" id="myFile" name="filename" required>
  </td>
</tr>

<tr>
  <td>Upload Internship External Feedback sheet :</td>
  <td>
    <input type="file" id="myFile" name="filename" required>
  </td>
</tr>

   <tr>
    <td><input type="submit" name="save" value="Submit" /></td>
   </tr>
  </table>
 </form>


</body>
</html>