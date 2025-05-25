<div class="container">
    <div class='d-flex justify-content-between align-items-center mb-3'>
        <h1>Section</h1>
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addClassModal">
                    <i class="fa-solid fa-plus"></i> Add Class
                </button>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Class</th>
                            <th scope="col">Sections</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>One</td>
                            <td>
                                <ul>
                                    <li>A</li>
                                    <li>B</li>
                                    <li>C</li>
                                </ul>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning section_edit" data-bs-toggle="modal"
                                    data-bs-target="#editSectionModal">
                                    <i class="fa-solid fa-pen-to-square"></i> edit Section
                                </button>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Add Class Modal -->
    <div class="modal fade" id="addClassModal" tabindex="-1" aria-labelledby="addClassModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addClassModalLabel">Add Class</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form id="addClassForm">
                        <div class="mb-3">
                            <label for="className" class="form-label">Class Name</label>
                            <select class="form-select" id="className" name="className">
                                <option value="One">One</option>
                                <option value="Two">Two</option>
                                <option value="Three">Three</option>
                                <option value="Four">Four</option>
                                <option value="Five">Five</option>
                                <option value="Six">Six</option>
                                <option value="Seven">Seven</option>
                                <option value="Eight">Eight</option>
                                <option value="Nine">Nine</option>
                                <option value="Ten">Ten</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="classSelect" class="form-label">Add section</label><br>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxA"
                                    name="sectionCheckbox" value="A">
                                <label class="form-check-label" for="sectionCheckboxA">A</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxB"
                                    name="sectionCheckbox" value="B">
                                <label class="form-check-label" for="sectionCheckboxB">B</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxC"
                                    name="sectionCheckbox" value="C">
                                <label class="form-check-label" for="sectionCheckboxC">C</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxD"
                                    name="sectionCheckbox" value="D">
                                <label class="form-check-label" for="sectionCheckboxD">D</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxE"
                                    name="sectionCheckbox" value="E">
                                <label class="form-check-label" for="sectionCheckboxE">E</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxF"
                                    name="sectionCheckbox" value="F">
                                <label class="form-check-label" for="sectionCheckboxF">F</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxG"
                                    name="sectionCheckbox" value="G">
                                <label class="form-check-label" for="sectionCheckboxG">G</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxH"
                                    name="sectionCheckbox" value="H">
                                <label class="form-check-label" for="sectionCheckboxH">H</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxI"
                                    name="sectionCheckbox" value="I">
                                <label class="form-check-label" for="sectionCheckboxI">I</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxJ"
                                    name="sectionCheckbox" value="J">
                                <label class="form-check-label" for="sectionCheckboxJ">J</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxK"
                                    name="sectionCheckbox" value="K">
                                <label class="form-check-label" for="sectionCheckboxK">K</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxL"
                                    name="sectionCheckbox" value="L">
                                <label class="form-check-label" for="sectionCheckboxL">L</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxM"
                                    name="sectionCheckbox" value="M">
                                <label class="form-check-label" for="sectionCheckboxM">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxN"
                                    name="sectionCheckbox" value="N">
                                <label class="form-check-label" for="sectionCheckboxN">N</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxO"
                                    name="sectionCheckbox" value="O">
                                <label class="form-check-label" for="sectionCheckboxO">O</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxP"
                                    name="sectionCheckbox" value="P">
                                <label class="form-check-label" for="sectionCheckboxP">P</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxQ"
                                    name="sectionCheckbox" value="Q">
                                <label class="form-check-label" for="sectionCheckboxQ">Q</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Class</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit section Modal -->
    <div class="modal fade" id="editSectionModal" tabindex="-1" aria-labelledby="editSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSectionModalLabel">Edit Section</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editSectionForm">
                        <div class="mb-3">
                            <label for="sectionName" class="form-label">Class Name</label>
                            <input type="text" class="form-control" id="className" name="className" value="One"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label for="classSelect" class="form-label">Add section</label><br>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxA"
                                    name="sectionCheckbox" value="A">
                                <label class="form-check-label" for="sectionCheckboxA">A</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxB"
                                    name="sectionCheckbox" value="B">
                                <label class="form-check-label" for="sectionCheckboxB">B</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxC"
                                    name="sectionCheckbox" value="C">
                                <label class="form-check-label" for="sectionCheckboxC">C</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxD"
                                    name="sectionCheckbox" value="D">
                                <label class="form-check-label" for="sectionCheckboxD">D</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxE"
                                    name="sectionCheckbox" value="E">
                                <label class="form-check-label" for="sectionCheckboxE">E</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxF"
                                    name="sectionCheckbox" value="F">
                                <label class="form-check-label" for="sectionCheckboxF">F</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxG"
                                    name="sectionCheckbox" value="G">
                                <label class="form-check-label" for="sectionCheckboxG">G</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxH"
                                    name="sectionCheckbox" value="H">
                                <label class="form-check-label" for="sectionCheckboxH">H</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxI"
                                    name="sectionCheckbox" value="I">
                                <label class="form-check-label" for="sectionCheckboxI">I</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxJ"
                                    name="sectionCheckbox" value="J">
                                <label class="form-check-label" for="sectionCheckboxJ">J</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxK"
                                    name="sectionCheckbox" value="K">
                                <label class="form-check-label" for="sectionCheckboxK">K</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxL"
                                    name="sectionCheckbox" value="L">
                                <label class="form-check-label" for="sectionCheckboxL">L</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxM"
                                    name="sectionCheckbox" value="M">
                                <label class="form-check-label" for="sectionCheckboxM">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxN"
                                    name="sectionCheckbox" value="N">
                                <label class="form-check-label" for="sectionCheckboxN">N</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxO"
                                    name="sectionCheckbox" value="O">
                                <label class="form-check-label" for="sectionCheckboxO">O</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxP"
                                    name="sectionCheckbox" value="P">
                                <label class="form-check-label" for="sectionCheckboxP">P</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="sectionCheckboxQ"
                                    name="sectionCheckbox" value="Q">
                                <label class="form-check-label" for="sectionCheckboxQ">Q</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Section</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>