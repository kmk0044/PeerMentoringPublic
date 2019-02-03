<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Survey</title>

</head>

<body>

<div>
  <?php 
    include "header.php"
  ?>
</div> 
<br>
<div class="container">
            <div class="col-sm-9 col-md-7 col-lg-9 mx-auto">
              
              
             <form action="survey_complete.php" method="post">

             	<h5> Gender </h5> 
             		
             		<input type="radio" name="A1" value="male"> Male
             			<br/>
             		<input type="radio" name="A1" value="female"> Female
             			<br/>
              		<input type="radio" name="A1" value="other"> Prefer not to Respond


              	<h5> Classification </h5>

              		<input type="radio" name="A2" value="freshman"> Freshman
             			<br/>
             		<input type="radio" name="A2" value="sophomore"> Sophomore
             			<br/>
              		<input type="radio" name="A2" value="junior"> Junior
              			<br/>
              		<input type="radio" name="A2" value="senior"> Senior
              			<br/>
              		<input type="radio" name="A2" value="young_alumni"> Young Alumni (graduated in the last 5 years)

              	<h5> What degree/major have you earned or are currently pursuing? </h5>
              		<input type="text" name="A3"> 

              	<h5> Where are you from originally? Geographic Region </h5>
              		<input type="text" name="A4"> 

              	<h5> Where is your current hometown (city and state or country - if outside of the US)? </h5>
              		<input type="text" name="A5"> 

              	<h5> I want to participate as a </h5>
              		<input type="radio" name="A6" value="mentee"> Mentee (must be a current Auburn student)
             		<br/>
             		<input type="radio" name="A6" value="mentor"> Mentor (must be an Auburn graduate or current faculty/staff member
             		<br/>

             	<h5> Why do you want to have a mentor? (choose your primary motivation) </h5>
             		<input type="radio" name="A7"> Help me succedd academically
             			<br/>
             		<input type="radio" name="A7"> Make connections with Auburn alumni
             			<br/>
              		<input type="radio" name="A7"> Get career advice
              			<br/>
              		<input type="radio" name="A7"> Get more involved at Auburn with others in my major
              			<br/>
              		<input type="radio" name="A7"> Get general advice about how to manage the academic demands at Auburn
              			<br/>
              		<input type="radio" name="A7"> Make professional connections for possible career opportunities

              	<h5> Why do you want to be a mentor? (Choose your primary motivation) </h5>
              		<input type="radio" name="A8"> To help Auburn students succeed academically
             			<br/>
             		<input type="radio" name="A8"> Connect with students as an Auburn Alumnus to encourage them to succeed
             			<br/>
              		<input type="radio" name="A8"> Provide career guidance and advice to current Auburn students
              			<br/>
              		<input type="radio" name="A8"> Help Auburn students get more involved and connect with others in their field of study
              			<br/>
              		<input type="radio" name="A8"> Help provide general advice and support for Auburn students
              			<br/>
              		<input type="radio" name="A8"> Help Auburn students better prepare for their career and professional life


              	<h5> What is your preferred communication when participating in this program? </h5>
              		<input type="radio" name="A9"> Email
             			<br/>
             		<input type="radio" name="A9"> Video Chat
             			<br/>
              		<input type="radio" name="A9"> Phone
              			<br/>
              		<input type="radio" name="A9"> In Person

              		
              	<h5> Activities that describe what I like to do </h5>
              		<input type="checkbox" name="A10"> Protect the enivornment
              			<br/>
              		<input type="checkbox" name="A10"> Being active
              			<br/>
              		<input type="checkbox" name="A10"> Reading and researching
              			<br/>
              		<input type="checkbox" name="A10"> Being outdoors in nature
              			<br/>
              		<input type="checkbox" name="A10"> Invent or create
              			<br/>
              		<input type="checkbox" name="A10"> Plan, budget and organize
              			<br/>
              		<input type="checkbox" name="A10"> Serve the community or help others
              			<br/>
              		<input type="checkbox" name="A10"> Work with computers
              			<br/>
              		<input type="checkbox" name="A10"> Create reports and communicate ideas
              			<br/>
              		<input type="checkbox" name="A10"> Analyze numbers and trends
              			<br/>
              		<input type="checkbox" name="A10"> Working in teams

              	<h5> Personal qualities that describe me </h5>
              		<input type="checkbox" name="A11"> Self-reliant
              			<br/>
              		<input type="checkbox" name="A11"> Nature lover
              			<br/>
              		<input type="checkbox" name="A11"> Into health and wellness
              			<br/>
              		<input type="checkbox" name="A11"> Physically active
              			<br/>
              		<input type="checkbox" name="A11"> Planner
              			<br/>
              		<input type="checkbox" name="A11"> Creative Problem Solver
              			<br/>
              		<input type="checkbox" name="A11"> Into computers and technology
              			<br/>
              		<input type="checkbox" name="A11"> Good and visualizing possbilities
              			<br/>
              		<input type="checkbox" name="A11"> Relate well to others
              			<br/>
              		<input type="checkbox" name="A11"> Patient and Persistent

              	<h5> Areas of study or learning interests </h5>
              		<input type="checkbox" name="A12"> Math
              			<br/>
              		<input type="checkbox" name="A12"> Life Sciences
              			<br/>
              		<input type="checkbox" name="A12"> Technology
              			<br/>
              		<input type="checkbox" name="A12"> Physical Science
              			<br/>
              		<input type="checkbox" name="A12"> History
              			<br/>
              		<input type="checkbox" name="A12"> Politics
              			<br/>
              		<input type="checkbox" name="A12"> Art/Graphic Design
              			<br/>
              		<input type="checkbox" name="A12"> Music
              			<br/>
              		<input type="checkbox" name="A12"> Journalism/Literature
              			<br/>
              		<input type="checkbox" name="A12"> Business
              			<br/>
              		<input type="checkbox" name="A12"> Law

              	<h5> What clubs, groups, teams or organizations do you belong to? </h5>
              		<input type="text" name="A13"> 

              	<h5> If people were to come to you for information about something you know a lot about, what would the topic be? </h5>
              		<input type="text" name="A14">

              	<h5> If you could interview an expert on any subject, who would you talk to and on what subject? </h5>
              		<input type="text" name="A15">

              		<br/>
              		<br/>
             		<input type="submit">
             </form>



</div>
</div>
<br>
<br>
  <FOOTER style="background-color:#03244d;border-top-width:5px;border-top-color:#dd550c;border-top-style:solid;padding:10px;">  
  <?php
    include "footer.php";
  ?>
  </FOOTER>
</body>
</html>