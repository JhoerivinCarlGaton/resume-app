<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $resume->name }} - Resume</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $resume->name }}</h1>
        <h2>Contact Information</h2>
        <p>Email: {{ $resume->email }}</p>
        <p>Phone: {{ $resume->phone }}</p>
        
        <h2>Summary</h2>
        <p>{{ $resume->summary }}</p>

        <h2>Education</h2>
        <p>{{ $resume->education }}</p>

        <h2>Experience</h2>
        <h3>{{ $resume->experience_title }}</h3>
        <p>{{ $resume->experience_date }}</p>
        <ul>
            <li>{{ $resume->experience_details }}</li>
        </ul>

        <h2>Skills</h2>
        <ul>
            <li>{{ $resume->skills }}</li>
        </ul>

        <h2>Projects</h2>
        <p>{{ $resume->projects }}</p>
    </div>
</body>
</html>
