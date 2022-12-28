<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include("admin.admincss") 
</head>

<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        @include("admin.navbar")
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">PROJECT FORM</h4>
                    </div>

                </div>
            </div>
    
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <form action="/add" method="post" class="form-horizontal mt-4">
                                @csrf

                                <div class="form-group">
                                    <label>Project Type</label>
                                    <select name="projecttype" class="form-select shadow-none col-12" id="inlineFormCustomSelect" required>
                                        <option value="">choose one project type</option>
                                        <option value="Development Project">Development</option>
                                        <option value="Research Project">Reseacrh Project</option>
                                    </select>
                                    
                                </div>

                                <div class="form-group">
                                    <label>Project Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Student Name</label>
                                    <input type="text" name="student" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Supervisor Name</label>
                                    <select name="supervisor" class="form-select shadow-none col-12" id="inlineFormCustomSelect" required>
                                        <option value="">choose one sv name</option>
                                        <option value="Azhana Ahmad">Azhana Ahmad</option>
                                        <option value="Sufyian">Sufyian</option>
                                        <option value="Lim Kok Cheng">Lim Kok Cheng</option>
                                        <option value="Badariah">Badariah</option>
                                        <option value="Ramona">Ramona</option>
                                        <option value="Yunus">Yunus</option>
                                        <option value="Raja Fenin">Raja Fenin</option>
                                        <option value="Azlan">Azlan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Examiner 1 Name</label>
                                    <select name="examiner1" class="form-select shadow-none col-12" id="inlineFormCustomSelect" required>
                                        <option value="">choose one sv name</option>
                                        <option value="Azhana Ahmad">Azhana Ahmad</option>
                                        <option value="Sufyian">Sufyian</option>
                                        <option value="Lim Kok Cheng">Lim Kok Cheng</option>
                                        <option value="Badariah">Badariah</option>
                                        <option value="Ramona">Ramona</option>
                                        <option value="Yunus">Yunus</option>
                                        <option value="Raja Fenin">Raja Fenin</option>
                                        <option value="Azlan">Azlan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Examiner 2 Name</label>
                                    <select name="examiner2" class="form-select shadow-none col-12" id="inlineFormCustomSelect" required>
                                        <option value="">choose one sv name</option>
                                        <option value="Azhana Ahmad">Azhana Ahmad</option>
                                        <option value="Sufyian">Sufyian</option>
                                        <option value="Lim Kok Cheng">Lim Kok Cheng</option>
                                        <option value="Badariah">Badariah</option>
                                        <option value="Ramona">Ramona</option>
                                        <option value="Yunus">Yunus</option>
                                        <option value="Raja Fenin">Raja Fenin</option>
                                        <option value="Azlan">Azlan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="date" name="startdate" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="date" name="enddate" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Duration(Month)</label>
                                    <input type="int" name="duration" class="form-control" required>
                                </div>
                            
                                <div class="form-group">
                                    <label>Progress</label>
                                    <select name="progress" class="form-select shadow-none col-12" id="inlineFormCustomSelect"required>
                                        <option value="">choose one progress</option>
                                        <option value="Milestone 1">Milestone 1</option>
                                        <option value="Milestone 2">Milestone 2</option>
                                        <option value="Final Report">Final Report</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-select shadow-none col-12" id="inlineFormCustomSelect" required>
                                        <option value="">choose one status</option>
                                        <option value="On Track">On track</option>
                                        <option value="Delayed">Delayed</option>
                                        <option value="Extended">Extended</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success text-white">Assign Project</button>
                                        </div>
                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
            <!-- footer -->
            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- End footer -->
        </div>
    </div>

    @include("admin.adminscript")
</body>
</html>
