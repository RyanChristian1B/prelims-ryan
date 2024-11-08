<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment and Grade Processing</title>
</head>
<body>
<h1>Student Enrollment And Grade Processing System</h1>

<!-- Enrollment Form -->
<div id="enrollmentForm">
    <form onsubmit="showGradeForm(event)">
        <h2>Student Enrollment Form</h2>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required> Male
        <input type="radio" id="female" name="gender" value="Female" required> Female

        <label for="course">Course:</label>
        <select id="course" name="course" required>
            <option value="">Select a course</option>
            <option value="BSIT">BSIT</option>
            <option value="BSBA">BSBA</option>
            <option value="BSHM">BSHM</option>
        </select>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Submit Student Information">
    </form>
</div>
<!-- Grade Entry Form -->
<div id="gradeForm" class="hidden">
    <form onsubmit="submitGrades(event)">
        <h2>Enter Grades</h2>
        <label for="prelim">Prelim Grade:</label>
        <input type="number" id="prelim" name="prelim" min="0" max="100" required>

        <label for="midterm">Midterm Grade:</label>
        <input type="number" id="midterm" name="midterm" min="0" max="100" required>

        <label for="finals">Final Grade:</label>
        <input type="number" id="finals" name="finals" min="0" max="100" required>

        <input type="submit" value="Submit Grades">
    </form>
</div>

</body>
</html>