<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Permit Application Form</title>
    <link rel="stylesheet" href="{{ url('CSS/workpermitstyle.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Work Permit Application Form</h1>
        <h2>Welcome, {{ auth()->user()->name }}</h2>
        <form action="{{ route('submit-work-permit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="step step-1 active">
                
            <!-- Full Name -->
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required placeholder="Enter your full name" value="{{ old('name') }}">
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        
            <!-- Email Address -->
            <label for="email">Email Address <span class="required">*</span></label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required value="{{old('email')}}">
            @error('email')
            <p style="color: red;">{{ $message }}</p>
             @enderror
    
        
            <!-- Phone Number -->
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
        
            <!-- Date of Birth -->
            <label for="dob">Date of Birth <span class="required">*</span></label>
            <input type="date" id="dob" name="dob" required >
        
            <!-- Nationality -->
            <label for="nationality">Nationality <span class="required">*</span></label>
            <input type="text" id="nationality" name="nationality" placeholder="Enter your nationality" required>
        
            <!-- Identification Number -->
            <label for="passport_number">Passport Number<span class="required">*</span></label>
            <input type="text" id="passport_number" name="passport_number" placeholder="Enter your ID number or passport number" required>
        
           <!-- Job Title -->
            <label for="job_title">Job Title <span class="required">*</span></label>
            <input type="text" id="job_title" name="job_title" placeholder="Enter your job title" required>

            <!-- Employer Name -->
            <label for="employer">Employer Name <span class="required">*</span></label>
            <input type="text" id="employer" name="employer" placeholder="Enter the name of your employer" required>

            <!-- Workplace Address -->
            <label for="workplace_address">Workplace Address <span class="required">*</span></label>
            <input type="text" id="workplace_address" name="workplace_address" placeholder="Enter your workplace address" required>

            <!-- Employment Duration -->
            <label for="employment_duration">Employment Duration <span class="required">*</span></label>
            <input type="text" id="employment_duration" name="employment_duration" placeholder="Enter the duration of your employment (e.g., 2 years)" required>

            <!-- Next Button -->
            <button type="button" class="next-btn">Next</button>
        </div>
        <div class="step step-2">
            <h2>Submit Documents</h2>
            <!-- Approval Letter -->
            <label for="app_letter">Signed application letter<span class="required">*</span></label>
            <input type="file" id="app_letter" name="app_letter" placeholder="Submit your application letter" required>
            <!-- Passport photo -->
            <label for="passport_photo">Passport Photo <span class="required">*</span></label>
            <input type="file" id="passport_photo" name="passport_photo" placeholder="Upload passport photo" required>
            <!-- Birth certificate -->
            <label for="employment_contract">Employment contract<span class="required">*</span></label>
            <input type="file" id="employment_contract" name="employment_contract" placeholder="Upload employment contract" required>
            <!-- CV -->
            <label for="cv">CV<span class="required">*</span></label>
            <input type="file" id="cv" name="cv" placeholder="Upload CV" required>
            <!-- Professional Clearance Upload -->
            <label for="professional_clearance">Professional Clearance (from regulatory body) <span>*</span></label>
            <input type="file" id="professional_clearance" name="professional_clearance" accept=".pdf,.jpg,.png,.doc,.docx" required>
            <small>Upload a clearance certificate from the relevant regulatory body (PDF, JPG, PNG, DOC, DOCX).</small>
            <!-- Next Button -->
            <button type="button" class="prev-btn">Previous</button>
            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Submit</button>
        </div>
        </form>
    
    </div>
    <script src="{{ url('JS/studentpermit.js') }}"></script>
</body>
</html>
