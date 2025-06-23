<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Work Permit Application</title>
    <link rel="stylesheet" href="{{ url('CSS/dashboard.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="{{ url('/landing') }}">Home</a></li>
                <li><a href="{{ route('workpermit.edit', $workpermit->id) }}">Application Status</a></li>
                <li><a href="#">Documents</a></li>
                <li><a href="#">Profile</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="logout-btn">Logout</button>
                    </form>
                </li>
            </ul>
        </aside>
        
        <main class="content">
            <h1>Edit Your Work Permit Application</h1>
            <form action="{{ route('workpermit.update', $workpermit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
                <div>
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone', $workpermit->phone) }}" required>
                    @error('phone')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
            
                <div>
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="{{ old('dob', $workpermit->dob) }}" required>
                    @error('dob')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
            
                <div>
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $workpermit->name) }}" required>
                    @error('name')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
            
                <div>
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $workpermit->email) }}" required>
                    @error('email')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
            
                <div>
                    <label for="nationality">Nationality</label>
                    <input type="text" id="nationality" name="nationality" value="{{ old('nationality', $workpermit->nationality) }}" required>
                    @error('nationality')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
            
                <div>
                    <label for="passport_number">Passport Number</label>
                    <input type="text" id="passport_number" name="passport_number" value="{{ old('passport_number', $workpermit->passport_number) }}" required>
                    @error('passport_number')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
            
                <div>
                    <label for="job_title">Job Title</label>
                    <input type="text" id="job_title" name="job_title" value="{{ old('job_title', $workpermit->job_title) }}" required>
                    @error('job_title')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
            
                <div>
                    <label for="employer">Employer Name</label>
                    <input type="text" id="employer" name="employer" value="{{ old('employer', $workpermit->employer) }}" required>
                    @error('employer')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
            
                <div>
                    <label for="workplace_address">Workplace Address</label>
                    <input type="text" id="workplace_address" name="workplace_address" value="{{ old('workplace_address', $workpermit->workplace_address) }}" required>
                    @error('workplace_address')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
            
                <div>
                    <label for="employment_duration">Employment Duration</label>
                    <input type="text" id="employment_duration" name="employment_duration" value="{{ old('employment_duration', $workpermit->employment_duration) }}" required>
                    @error('employment_duration')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
            
                <!-- Approval Letter -->
                <div>
                    <label for="app_letter">Signed Appplication Letter</label>
                    <input type="file" id="app_letter" name="app_letter" required>
                    @error('app_letter')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Passport Photo -->
                <div>
                    <label for="passport_photo">Passport Photo</label>
                    <input type="file" id="passport_photo" name="passport_photo" required>
                    @error('passport_photo')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Employment Contract -->
                <div>
                    <label for="employment_contract">Employment Contract</label>
                    <input type="file" id="employment_contract" name="employment_contract" required>
                    @error('employment_contract')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>

                <!-- CV -->
                <div>
                    <label for="cv">CV</label>
                    <input type="file" id="cv" name="cv" required>
                    @error('cv')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Professional Clearance -->
                <div>
                    <label for="professional_clearance">Professional Clearance</label>
                    <input type="file" id="professional_clearance" name="professional_clearance" required>
                    @error('professional_clearance')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="submit-btn">Update Work Permit Application</button>
            </form>
            
        </main>
    </div>
</body>
</html>
