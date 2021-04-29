@extends('layouts.app')
@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


<section class="pb-0">
    <div class="container pt-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                @include('layouts.alert')
                <form method="POST" action="{{ action('BatchController@store') }}" files="true"
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
                            <label for="username" class="">Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Date of Delivery">
                        </div>
                        <div class="form-group">
                            <label for="username" class="">Amount Payable</label>
                            <input type="number" name="payable" class="form-control" placeholder="Date of Delivery">
                        </div>
                        <div class="form-group">
                            <label for="username" class="">Offer Id if any</label>
                            <input type="text" name="offerId" class="form-control" placeholder="Date of Delivery">
                        </div>
                        <div class="form-group">
                            <label for="username" class="">Seat Limit</label>
                            <input type="number" name="limit" class="form-control" placeholder="Date of Delivery">
                        </div>
                        <div class="form-group">
                            <label for="username" class="">Class Type</label>
                            <p>1 for course 2 for workshops</p>
                            <input type="number" name="type" class="form-control" placeholder="Date of Delivery">
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
                            <label for="username" class="">timing</label>
                            <input type="text" name="timing" class="form-control" placeholder="Date of Delivery">
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
                            <input type="text" name="groupLink2" class="form-control" placeholder="Date of Delivery">
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
    


    quill.on('text-change', function (delta, oldDelta, source) {
        document.getElementById("qeAbout").value = quill.root.innerHTML;
        
    });
    
</script>

@endsection