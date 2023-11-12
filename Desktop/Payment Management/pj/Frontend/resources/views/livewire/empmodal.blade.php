 <!--Popup Form-->

 <div class="dark_bg" id="createemp" >
    <div class="popup" style="background-color: #f2f2f2">
         <header>
            <h2 class="modalTitle">Fill the Form</h2>
            <button class="closeBtn">&times;</button>
         </header>
         <div class="body">
            <form action="{{url('create_employee')}}" id="myForm" method="POST">
                @csrf
                <div>
                    <label>
                        <div type="file" name="" id="uploadimg">
                        <i class="fa-solid fa-plus"></i>
                    </label>
                </div>
                <div class="inputFieldContainer">
                    <div class="nameField">
                        <div class="form_control">
                            <label for="fName">First Name</label>
                            <input type="text" name="firstname" id="fName" >
                        </div>
                        <div class="form_control">
                            <label for="lName">Last Name</label>
                            <input type="text" name="lastname" id="lName" >
                        </div>
                    </div>
                    <div class="nameField">
                        <div class="form_control">
                            <label for="gender">Gender</label>
                            <input type="text" id="gender" name="gender">
                            {{-- <select name="gender" id="gender" >
                                <option value="none"></option>
                                <option value="none">F</option>
                                <option value="none">M</option>
                            </select> --}}
                        </div>
                        <div class="form_control">
                            <label for="academic_year">Academic Year</label>
                            <select name="academic_year" id="academic_year" >
                                <option value=""></option>
                                @foreach($academic_year as $ay)
                                <option value="{{ $ay['id'] }}">{{ $ay['academic_year']}} {{ $ay['name'] }}</option>
                                 @endforeach
                                {{-- <option value="none">2022-2023</option>
                                <option value="none">2023-2024</option>
                                <option value="none">2024-2025</option> --}}
                            </select>

                        </div>
                        
                    </div>
                    <div class="nameField">
                        <div class="form_control">
                            <label for="degree">Degree</label>
                            <select name="degree" id="degree" >
                                <option value=""></option>
                                @foreach($degree as $dg)
                                    <option value="{{ $dg['id'] }}">{{ $dg['degree']}}</option>
                                @endforeach
                                {{-- <option value="none">Technician</option>
                                <option value="none">Engineering</option>
                                <option value="none">Master</option>
                                <option value="none">PHD</option> --}}
                            </select>                                                                                    </div>
                        <div class="form_control">
                                <label for="department">Department:</label>
                                <select name="department" id="department" >
                                    <option value=""></option>
                                    @foreach($department as $dp)
                                    <option value="{{ $dp['id'] }}">{{ $dp['name']}}</option>
                                    @endforeach
                                    {{-- <option value="none">GIC</option>
                                    <option value="none">GCI</option>
                                    <option value="none">GTR</option>
                                    <option value="none">GAR</option>
                                    <option value="none">GIM</option>
                                    <option value="none">GGG</option>
                                    <option value="none">GRU</option>
                                    <option value="none">GCA</option>
                                    <option value="none">GEE</option>
                                    <option value="none">GTI</option>
                                    <option value="none">AMS</option> --}}
                                    
                                </select>
                            </div>


                    </div>

                <div class="nameField">
                    <div class="form_control ">
                        <label for="course">Course:</label>
                        <select name="course" id="course" >
                            <option value=""></option>
                            @foreach($course as $cs)
                                <option value="{{ $cs['id'] }}">{{ $cs['name']}}</option>
                             @endforeach
                            {{-- <option value="none">Network I</option>
                            <option value="none">Network II</option> --}}
                            {{-- <option value="none">Internet Programming I</option>
                            <option value="none">Internet Programming II</option>
                            <option value="none">Sotfware Engineering I</option>
                            <option value="none">Sotfware Engineering II</option>
                            <option value="none">Advanced Database and DBMS</option>
                            <option value="none">Advanced Computer Architecture</option>
                            <option value="none">Operating Systems I</option>
                            <option value="none">Operating Systems II</option>
                            <option value="none">Telecommunications</option>
                            <option value="none">Human Computer Interaction</option>
                            <option value="none">Systems and Networks Administration</option>
                            <option value="none">Distributed Systems</option>
                            <option value="none">Compliation</option> --}}
                        </select>
                        
                    </div>
                    <div class="form_control">
                        <label for="position">Position:</label>
                        <select name="position" id="position" >
                            <option value=""></option>
                            @foreach($position as $pst)
                            <option value="{{ $pst['id'] }}">{{ $pst['status']}} {{ $pst['type'] }}</option>
                            @endforeach
                            {{-- <option value="none">Head department</option>
                            <option value="none">Vice department</option>
                            <option value="none">Professor</option>
                            <option value="none">Lecturer</option>
                            <option value="none">Secretary</option> --}}
                        </select>
                            
                    </div>
                </div>

                    <div class="nameField">
                        <div class="form_control">
                            <label for="main_salary">Main salary:</label>
                            <select name="main_salary" id="main_salary">
                                <option value=""></option>
                                @foreach($main_salary as $ms)
                                <option value="{{ $ms['id'] }}"> {{ $ms['amount'] }}</option>
                                @endforeach    
                                {{-- <option value=""></option>
                                <option value=""></option> --}}
                            </select>
                        </div>
                        <div class="form_control">
                            <label for="hour_salary">Hour salary:</label>
                            <select name="hour_salary" id="hour_salary">
                                <option value=""></option>
                                @foreach($hour_salary as $hs)
                                <option value="{{ $hs['id'] }}"> {{ $hs['amount'] }}</option>
                                @endforeach    
                                {{-- <option value=""></option>
                                <option value=""></option> --}}
                            </select>
                        </div>
                    </div>
                    <div class="nameField">
                        <div class="form_control">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" >
                        </div>
                        <div class="form_control">
                            <label for="phone">Phone:</label>
                            <input type="number" name="phone" id="phone" >
                        </div>
                    </div>

                    <div class="form_control">
                        <label for="sDate">Start Date:</label>
                        <input type="date" name="start_date" id="sDate" required>
                    </div>
                <footer class="popupFooter">
                    <button form="myForm" type="submit" class="submitBtn">Submit</button>
                 </footer>

            </form>
         </div>
    </div>

</div>

 <!--Popup Form-->
{{-- EDIT --}}
 <div class="dark_bg" id="editemp" >
    <div class="popup" style="background-color: #f2f2f2">
         <header>
            <h2 class="modalTitle">Update Employee</h2>
            <button class="closeBtn">&times;</button>
         </header>
         <div class="body">
            <form action="{{url('update_employee')}}" id="myForm" method="POST">
                @csrf
                <div>
                    <label>
                        <div type="file" name="" id="uploadimg">
                        <i class="fa-solid fa-plus"></i>
                    </label>
                </div>
                <div class="inputFieldContainer">
                    <div class="nameField">
                        <div class="form_control">
                            <label for="fName">First Name</label>
                            <input type="text" name="firstname" id="fName" >
                        </div>
                        <div class="form_control">
                            <label for="lName">Last Name</label>
                            <input type="text" name="lastname" id="lName" >
                        </div>
                    </div>
                    <div class="nameField">
                        <div class="form_control">
                            <label for="gender">Gender</label>
                            <input type="text" id="gender" name="gender">
                            {{-- <select name="gender" id="gender" >
                                <option value="none"></option>
                                <option value="none">F</option>
                                <option value="none">M</option>
                            </select> --}}
                        </div>
                        <div class="form_control">
                            <label for="academic_year">Academic Year</label>
                            <select name="academic_year" id="academic_year" >
                                <option value=""></option>
                                @foreach($academic_year as $ay)
                                <option value="{{ $ay['id'] }}">{{ $ay['academic_year']}} {{ $ay['name'] }}</option>
                                 @endforeach
                                {{-- <option value="none">2022-2023</option>
                                <option value="none">2023-2024</option>
                                <option value="none">2024-2025</option> --}}
                            </select>

                        </div>
                        
                    </div>
                    <div class="nameField">
                        <div class="form_control">
                            <label for="degree">Degree</label>
                            <select name="degree" id="degree" >
                                <option value=""></option>
                                @foreach($degree as $dg)
                                    <option value="{{ $dg['id'] }}">{{ $dg['degree']}}</option>
                                @endforeach
                                {{-- <option value="none">Technician</option>
                                <option value="none">Engineering</option>
                                <option value="none">Master</option>
                                <option value="none">PHD</option> --}}
                            </select>                                                                                    </div>
                        <div class="form_control">
                                <label for="department">Department:</label>
                                <select name="department" id="department" >
                                    <option value=""></option>
                                    @foreach($department as $dp)
                                    <option value="{{ $dp['id'] }}">{{ $dp['name']}}</option>
                                    @endforeach
                                    {{-- <option value="none">GIC</option>
                                    <option value="none">GCI</option>
                                    <option value="none">GTR</option>
                                    <option value="none">GAR</option>
                                    <option value="none">GIM</option>
                                    <option value="none">GGG</option>
                                    <option value="none">GRU</option>
                                    <option value="none">GCA</option>
                                    <option value="none">GEE</option>
                                    <option value="none">GTI</option>
                                    <option value="none">AMS</option> --}}
                                    
                                </select>
                            </div>


                    </div>

                <div class="nameField">
                    <div class="form_control ">
                        <label for="course">Course:</label>
                        <select name="course" id="course" >
                            <option value=""></option>
                            @foreach($course as $cs)
                                <option value="{{ $cs['id'] }}">{{ $cs['name']}}</option>
                             @endforeach
                            {{-- <option value="none">Network I</option>
                            <option value="none">Network II</option> --}}
                            {{-- <option value="none">Internet Programming I</option>
                            <option value="none">Internet Programming II</option>
                            <option value="none">Sotfware Engineering I</option>
                            <option value="none">Sotfware Engineering II</option>
                            <option value="none">Advanced Database and DBMS</option>
                            <option value="none">Advanced Computer Architecture</option>
                            <option value="none">Operating Systems I</option>
                            <option value="none">Operating Systems II</option>
                            <option value="none">Telecommunications</option>
                            <option value="none">Human Computer Interaction</option>
                            <option value="none">Systems and Networks Administration</option>
                            <option value="none">Distributed Systems</option>
                            <option value="none">Compliation</option> --}}
                        </select>
                        
                    </div>
                    <div class="form_control">
                        <label for="position">Position:</label>
                        <select name="position" id="position" >
                            <option value=""></option>
                            @foreach($position as $pst)
                            <option value="{{ $pst['id'] }}">{{ $pst['status']}} {{ $pst['type'] }}</option>
                            @endforeach
                            {{-- <option value="none">Head department</option>
                            <option value="none">Vice department</option>
                            <option value="none">Professor</option>
                            <option value="none">Lecturer</option>
                            <option value="none">Secretary</option> --}}
                        </select>
                            
                    </div>
                </div>

                    <div class="nameField">
                        <div class="form_control">
                            <label for="main_salary">Main salary:</label>
                            <select name="main_salary" id="main_salary">
                                <option value=""></option>
                                @foreach($main_salary as $ms)
                                <option value="{{ $ms['id'] }}"> {{ $ms['amount'] }}</option>
                                @endforeach    
                                {{-- <option value=""></option>
                                <option value=""></option> --}}
                            </select>
                        </div>
                        <div class="form_control">
                            <label for="hour_salary">Hour salary:</label>
                            <select name="hour_salary" id="hour_salary">
                                <option value=""></option>
                                @foreach($hour_salary as $hs)
                                <option value="{{ $hs['id'] }}"> {{ $hs['amount'] }}</option>
                                @endforeach    
                                {{-- <option value=""></option>
                                <option value=""></option> --}}
                            </select>
                        </div>
                    </div>
                    <div class="nameField">
                        <div class="form_control">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" >
                        </div>
                        <div class="form_control">
                            <label for="phone">Phone:</label>
                            <input type="number" name="phone" id="phone" >
                        </div>
                    </div>

                    <div class="form_control">
                        <label for="sDate">Start Date:</label>
                        <input type="date" name="start_date" id="sDate" required>
                    </div>
                <footer class="popupFooter">
                    <button form="myForm" type="submit" class="submitBtn">Update</button>
                 </footer>

            </form>
         </div>
    </div>

</div>