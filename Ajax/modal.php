<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" id="uploadForm">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control form-control-sm">

                            </div>

                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control form-control-sm">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="Male" class='form-check-input'> Male
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="Female" class='form-check-input'> Female
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Hobby</label>
                                <div class="form-check">
                                    <input type="checkbox" name="hobby[]" value="Cricket" class='form-check-input '> Cricket
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="hobby[]" value="Football" class='form-check-input '> Football
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="hobby[]" value="Baseball" class='form-check-input '> Baseball
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <select name="city" id="city" class="form-control form-control-sm">
                            <option value="">Select</option>
                            <option value="Vadodara">Vadodara</option>
                            <option value="Surat">Surat</option>
                            <option value="Anand">Anand</option>
                            <option value="Bharuch">Bharuch</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label>Profile Pic</label>
                        <input type="file" name="profile_pic" id="profile_pic" class="form-control-file form-control-sm">


                    </div>
                    <input type="submit" name="submit" class="btn btn-primary addUser">
                </form>
            </div>

        </div>
    </div>
</div>