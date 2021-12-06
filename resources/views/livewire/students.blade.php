<div>
    <div class="d-flex justify-content-between align-content-center mb-2">
        <div class="d-flex">
            <div>
                <div class="d-flex align-items-center ml-4">
                    <label for="paginate" class="text-nowrap mr-2 mb-0">Per Page</label>
                    <select  name="paginate" id="paginate" class="form-control form-control-sm">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                    </select>
                </div>
            </div>
            <div>
                <div class="d-flex align-items-center ml-4">
                    <label for="paginate" class="text-nowrap mr-2 mb-0">FilterBy Class</label>
                    <select class="form-control form-control-sm">
                        <option value="">All Class</option>
                     
                         <option value="class1">class 1</option>
                         <option value="class1">class 2</option>
                         <option value="class1">class 3</option>
                    </select>
                </div>
            </div>

          
            <div>
                <div class="d-flex align-items-center ml-4">
                    <label for="paginate" class="text-nowrap mr-2 mb-0">Section</label>
                    <select class="form-control form-control-sm" >
                        <option value="">Select a Section</option>
                       
                        <option value="section1">section 1</option>
                        <option value="section1">section 2</option>
                        <option value="section1">section 3</option>                     
                    </select>
                </div>
            </div>
          
            <div>
               
                <div class="dropdown ml-4">
                    <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">With Checked
                        4234</button>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item" type="button"
                            onclick="confirm('Are you sure you want to delete these Records?') || event.stopImmediatePropagation()"
                            wire:click="deleteRecords()">
                            Delete
                        </a>
                        <a href="#" class="dropdown-item" type="button"
                            onclick="confirm('Are you sure you want to export these Records?') || event.stopImmediatePropagation()"
                           >
                            Export
                        </a>

                    </div>
                </div>
               
            </div>
        </div>
        <div class=" col-md-4">
            <input type="search" class="form-control"
                placeholder="Search by name,email,phone,or address...">
        </div>
    </div>

    <div class="col-md-10 mt-3">
        @include('backend.includes.livewire_flash_messages')
    </div>
    <br>

 
    <div class="col-md-10 mb-2">
       
        <div>
            You have selected all <strong>500</strong> items.
        </div>
       
        <div>
            You have selected <strong>4</strong> items, Do you want to Select All
            <strong>434</strong>
            <a href="#" class="ml-2" wire:click="selectAll">Select All</a>
        </div>
       

    </div>



    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <th><input type="checkbox" wire:model="selectPage"></th>
                    <th>Student's Name</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>
               
                <tr class="">
                    <td><input type="checkbox" value="1" ></td>
                    <td>name</td>
                    <td>class</td>
                    <td>section</td>
                    <td>email</td>
                    <td style="max-width: 250px">address</td>
                    <td>phone number</td>
                    <td>
                        <button class="btn btn-danger btn-sm"
                            onclick="confirm('Are you sure you want to delete this record?') || event.stopImmediatePropagation()"
                            ><i class="fa fa-trash"
                                aria-hidden="true"></i></button>
                    </td>
                </tr>
              
            </tbody>
        </table>

    </div>
    <div class="row mt-4">
        <div class="col-sm-6 offset-5">
            links
        </div>
    </div>
</div>
