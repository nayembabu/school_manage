<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Add Teacher Official Information</h4>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="employeeId" class="form-label">Employee ID</label>
                        <input type="text" class="form-control" id="employeeId" name="employeeId" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="joinDate" class="form-label">Joining Date</label>
                        <input type="date" class="form-control" id="joinDate" name="joinDate" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        <select class="form-select" id="designation" name="designation" required>
                            <option value="">Select Designation</option>
                            <option value="Assistant Teacher">Assistant Teacher</option>
                            <option value="Senior Teacher">Senior Teacher</option>
                            <option value="Head Teacher">Head Teacher</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="department" class="form-label">Department</label>
                        <select class="form-select" id="department" name="department" required>
                            <option value="">Select Department</option>
                            <option value="Science">Science</option>
                            <option value="Arts">Arts</option>
                            <option value="Commerce">Commerce</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="qualification" class="form-label">Qualification</label>
                        <input type="text" class="form-control" id="qualification" name="qualification" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="experience" class="form-label">Experience (Years)</label>
                        <input type="number" class="form-control" id="experience" name="experience" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="number" class="form-control" id="salary" name="salary" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status" class="form-label">Employment Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="">Select Status</option>
                            <option value="Permanent">Permanent</option>
                            <option value="Temporary">Temporary</option>
                            <option value="Contract">Contract</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="remarks" class="form-label">Remarks</label>
                    <textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea>
                </div>

                <div class="text-end">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>