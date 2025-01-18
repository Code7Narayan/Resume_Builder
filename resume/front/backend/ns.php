<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    h1, h2 {
      margin-bottom: 5px;
    }
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    li {
      margin-bottom: 5px;
    }
  </style>
</head>
<body>

    <?php
    require "backend/dbcon.php";
    $sql="select *from prosnalinfo";
   $res= mysqli_query($con,$sql);
   while ($r=mysqli_fetch_array($res)) {



   

  <h1><?php  echo   $r;  ?></h1>
  <p>[Your Contact Information: Phone Number, Email Address, LinkedIn Profile (if applicable)]</p>

  <h2>Summary</h2>
  <p>[Write a brief summary highlighting your professional experience, skills, and career objectives.]</p>

  <h2>Education</h2>
  <ul>
    <li><strong>[Degree Earned]</strong></li>
    <li>[Institution Name], [Location]</li>
    <li>[Month, Year] - [Month, Year]</li>
    <li>[Relevant coursework, honors, or achievements]</li>
  </ul>

  <h2>Experience</h2>
  <ul>
    <li>
      <strong>[Job Title]</strong><br>
      [Company Name], [Location]<br>
      [Month, Year] - [Month, Year]<br>
      <ul>
        <li>[Responsibility/Accomplishment 1]</li>
        <li>[Responsibility/Accomplishment 2]</li>
        <li>[Responsibility/Accomplishment 3]</li>
      </ul>
    </li>
    <!-- Add more experience sections as needed -->
  </ul>

  <h2>Skills</h2>
  <ul>
    <li>[Skill 1]</li>
    <li>[Skill 2]</li>
    <li>[Skill 3]</li>
    <li>[Skill 4]</li>
    <li>[Skill 5]</li>
  </ul>

  <h2>Certifications</h2>
  <ul>
    <li>[Certification Name], [Issuing Organization], [Year]</li>
    <li>[Certification Name], [Issuing Organization], [Year]</li>
  </ul>

  <h2>Projects</h2>
  <ul>
    <li>
      <strong>[Project Title]</strong><br>
      [Description of the project, including your role and contributions]
    </li>
  }
  mysqli_close($con);
  ?>
    <!-- Add more project sections as needed -->
  </ul>

  <!-- Repeat the same structure for Volunteer Experience, Awards and Honors, Languages, and Interests if applicable -->

</body>
</html>
