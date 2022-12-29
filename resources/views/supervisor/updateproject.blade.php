<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include("supervisor.supervisorcss") 
</head>

<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        @include("supervisor.navbar")
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">UPDATE PROJECT</h4>
                    </div>

                </div>
            </div>
    
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <form action="/edit" method="post" class="form-horizontal mt-4">
                                @csrf

                                <input type="hidden" name="id" value="{{$disp['id']}}">

                                <div class="form-group" style="display:none">
                                    <label>Project Type</label>
                                <div class="form-check">
                                    <input type="hidden" name="projecttype" class="form-check-input" value="{{$disp['projecttype']}}">
                                    <label class="form-check-label mb-0">Development Project</label>
                                        </div>
                                <div class="form-check">
                                    <input type="hidden" name="projecttype" class="form-check-input" value="{{$disp['projecttype']}}">
                                    <label class="form-check-label mb-0">Research Project</label>
                                        </div>
                                </div>

                            <div class="form-group">
                                    <label>Project Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$disp['title']}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Student Name</label>
                                    <input type="text" name="student" class="form-control" value="{{$disp['student']}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Supervisor Name</label>
                                    <input type="text" name="supervisor" class="form-control" value="{{$disp['supervisor']}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Examiner 1 Name</label>
                                    <input type="text" name="examiner1" class="form-control" value="{{$disp['examiner1']}}" readonly>
                                </div>

                                <div class="form-group">
                                    <label>Examiner 2 Name</label>
                                    <input type="text" name="examiner2" class="form-control" value="{{$disp['examiner2']}}" readonly>
                                </div>

                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="date" name="startdate" class="form-control" value="{{$disp['startdate']}}" required>
                                </div>
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="date" name="enddate" class="form-control" value="{{$disp['enddate']}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Duration(Month)</label>
                                    <input type="int" name="duration" class="form-control" value="{{$disp['duration']}}" required>
                                </div>
                               
                            
                                <div class="form-group">
                                    <label>Progress</label>
                                    <select name="progress" class="form-select shadow-none col-12"  id="inlineFormCustomSelect" required>
                                        <option value="">Choose...</option>
                                        <option value="Milestone 1">Milestone 1</option>
                                        <option value="Milestone 2">Milestone 2</option>
                                        <option value="Final Report">Final Report</option>
                                    </select>
                                </div>

                                <!-- <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-select shadow-none col-12"  id="inlineFormCustomSelect" required>
                                        <option value="">Choose...</option>
                                        <option value="On Track">On track</option>
                                        <option value="Delayed">Delayed</option>
                                        <option value="Extended">Extended</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div> -->

                                <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success text-white">Update Project</button>
                                        </div>
                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>

        </div>

    </div>

    @include("supervisor.supervisorscript")
</body>
</html>
