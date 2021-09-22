@extends('layouts.app')
@section('content')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


    <section class="pb-0">
        <div class="container pt-5 ">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                    @include('layouts.alert')
                    <form method="POST" action="{{ action('AdminController@addWorkshop') }}" files="true"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card card-body">
                            <h3 class="pb-2">Personal Info</h3>
                            <div class="form-group">
                                <label for="username" class="">CourseId</label>
                                <input type="number" name="courseId" class="form-control" placeholder="Date of Delivery">
                            </div>
                            <div class="form-group">
                                <label for="username" class="">Batch name</label>
                                <input type="text" name="name" class="form-control" placeholder="Date of Delivery">
                            </div>
                            <div class="form-group">
                                <label for="username" class="">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Date of Delivery">
                            </div>


                            <div class="form-group">
                                <label for="username" class="">Seat Limit</label>
                                <input type="number" name="limit" class="form-control" placeholder="Date of Delivery">
                            </div>

                            <div class="form-group">
                                <label for="username" class="">Start Date</label>
                                <input type="date" name="startDate" class="form-control" placeholder="Date of Delivery">
                            </div>
                            <div class="form-group">
                                <label for="username" class="">End Date</label>
                                <input type="date" name="endDate" class="form-control" placeholder="Date of Delivery">
                            </div>
                            <div class="form-group">
                                <label for="username" class="">Schedule</label>
                                <input type="text" name="schedule" class="form-control" placeholder="Date of Delivery">
                            </div>

                            <div class="form-group">
                                <label for="username" class="">About</label>
                                <div id="quillAbout"></div>
                                <input type="hidden" id="qeAbout" name="about">
                            </div>


                            <div class="form-group">
                                <label for="username" class="">Group Link 1</label>
                                <input type="text" name="groupLink" class="form-control" placeholder="Date of Delivery">
                            </div>
                            <div class="form-group">
                                <label for="username" class="">Group Link 2</label>
                                <input type="text" name="groupLink1" class="form-control" placeholder="Date of Delivery">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Teacher</label>
                                <select class="form-control" name="teacherId" id="exampleFormControlSelect1">

                                    <option value="" selected="selected" disabled="disabled">Select teacher</option>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="username" class="">Topic</label>
                                <input type="text" name="topic" class="form-control" placeholder="Date of Delivery">
                            </div>
                            <div class="form-group">
                                <label for="username" class="">Next Class</label>
                                <input type="datetime-local" name="nextClass" class="form-control" placeholder="Date of Delivery">
                            </div>
                            <div class="form-group">
                                <label for="username" class="">Meeting Link</label>
                                <input type="text" name="meetingLink" class="form-control" placeholder="Date of Delivery">
                            </div>

                            <input type="file" name="img" value="upload" class="b">

                            <button type="submit" value="upload" class="btn btn-outline-primary mt-3">Create Batch</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#quillAbout', {
            theme: 'snow'
        });



        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById("qeAbout").value = quill.root.innerHTML;

        });

    </script>

@endsection
