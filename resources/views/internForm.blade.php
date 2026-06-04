@extends('layouts.app')
@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2>Intern Form</h2>
                </div>

                <div class="card-body">
                    <form action="{{ route('intern.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" name="dob" class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">College Name</label>
                                    <input type="text" name="college_name" class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">University</label>
                                    <input type="text" name="university" class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Qualification</label>
                                    <select name="qualification" class="form-select">
                                        <option value="" disabled selected>Select Qualification</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Graduation">Graduation</option>
                                        <option value="Post Graduation">Post Graduation</option>
                                        <option value="B.Tech">B.Tech</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Branch / Stream</label>
                                    <input type="text" name="branch" class="form-control"
                                        placeholder="Computer Science">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Passing Year</label>
                                    <input type="number" name="passing_year"
                                        class="form-control" min="2000" max="2100">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">CGPA</label>
                                    <input type="text" name="cgpa" class="form-control"
                                        placeholder="8.5">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">LinkedIn Profile</label>
                                    <input type="url" name="linkedin" class="form-control"
                                        placeholder="https://linkedin.com/in/username">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Skills</label>
                                    <input type="text" name="skills" class="form-control"
                                        placeholder="Laravel, PHP, MySQL, React">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Projects</label>
                                    <textarea name="projects" rows="3"
                                        class="form-control"></textarea>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea name="address" rows="3"
                                        class="form-control"></textarea>
                                </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Designation</label>
                                <input type="text" name="designation" class="form-control">
                             
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Joining Date</label>
                                <input type="date" name="joining_date" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label">Notes</label>
                                <textarea name="notes" rows="4" class="form-control"></textarea>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Submit Application
                                </button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection