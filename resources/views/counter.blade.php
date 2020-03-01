@extends('layouts.app')

@section('content')
<div class="container counter-page">
    <h2>Counter</h2>

    <div class="row">
        <div class="col-md-5">
            <form action="#" method="get">
                <label for="grade1" class="mb-4 grade-1 btn-grade w-100">
                    <div class="some">
                        <input type="radio" name="radio-grade" id="grade1" onclick="getSections(1);">
                        <i class="icon-grade"></i>
                        <div class="label p-4">Grade 1</div>
                    </div>
                </label>

                <label for="grade2" class="mb-4 grade-2 btn-grade w-100">
                    <div class="some">
                        <input type="radio" name="radio-grade" id="grade2" onclick="getSections(2);">
                        <i class="icon-grade"></i>
                        <div class="label p-4">Grade 2</div>
                    </div>
                </label>

                <label for="grade3" class="mb-4 grade-3 btn-grade w-100">
                    <div class="some">
                        <input type="radio" name="radio-grade" id="grade3" onclick="getSections(3);">
                        <i class="icon-grade"></i>
                        <div class="label p-4">Grade 3</div>
                    </div>
                </label>
                <label for="grade4" class="mb-4 grade-4 btn-grade w-100">
                    <div class="some">
                        <input type="radio" name="radio-grade" id="grade4" onclick="getSections(4);">
                        <i class="icon-grade"></i>
                        <div class="label p-4">Grade 4</div>
                    </div>
                </label>
                <label for="grade5" class="mb-4 grade-5 btn-grade w-100">
                    <div class="some">
                        <input type="radio" name="radio-grade" id="grade5" onclick="getSections(5);">
                        <i class="icon-grade"></i>
                        <div class="label p-4">Grade 5</div>
                    </div>
                </label>
                <label for="grade6" class="mb-4 grade-6 btn-grade w-100">
                    <div class="some">
                        <input type="radio" name="radio-grade" id="grade6" onclick="getSections(6);">
                        <i class="icon-grade"></i>
                        <div class="label p-4">Grade 6</div>
                    </div>
                </label>

            {{-- <div class="form-control my-4">
                <label for="grade2">Grade 2</label>
                <input type="radio" name="radio-grade" id="grade2">
            </div>

            <div class="form-control my-4">
                <label for="grade3">Grade 3</label>
                <input type="radio" name="radio-grade" id="grade3">
            </div>

            <div class="form-control my-4">
                <label for="grade4">Grade 4</label>
                <input type="radio" name="radio-grade" id="grade4">
            </div>

            <div class="form-control my-4">
                <label for="grade5">Grade 5</label>
                <input type="radio" name="radio-grade" id="grade5">
            </div>

            <div class="form-control my-4">
                <label for="grade6">Grade 6</label>
                <input type="radio" name="radio-grade" id="grade6">
            </div> --}}
        </form>
        </div>

        <div class="col-md-7">
            <div class="container">
                <div class="row">
                    <select name="" id="selectSection" class="mb-4 p-4 w-100">
                        <option value="Section A">Select Section</option>
                    </select>
                </div>
                <div class="row">
                    <div class="w-100 text-center">
                        <input type="submit" value="Submit" class="py-4 btn btn-success">
                    </div>

                </div>
            </div>

        </div>
        
    </div>
</div>

<script>
    function getSections(g){
        if(g==1){
            document.getElementById("selectSection").innerHTML="<option value='Section A'>Select Section</option>"+
                            "@foreach ($teachers as $teacher)"+
                                "@if($teacher['grade_level']==1)"+
                                    "<option value='Section A'>{{ $teacher['section'] }}</option>"+
                                "@endif"+
                            "@endforeach";
        }
        else if(g==2){
            document.getElementById("selectSection").innerHTML="<option value='Section A'>Select Section</option>"+
                            "@foreach ($teachers as $teacher)"+
                                "@if($teacher['grade_level']==2)"+
                                    "<option value='Section A'>{{ $teacher['section'] }}</option>"+
                                "@endif"+
                            "@endforeach";
        }
        else if(g==3){
            document.getElementById("selectSection").innerHTML="<option value='Section A'>Select Section</option>"+
                            "@foreach ($teachers as $teacher)"+
                                "@if($teacher['grade_level']==3)"+
                                    "<option value='Section A'>{{ $teacher['section'] }}</option>"+
                                "@endif"+
                            "@endforeach";
        }
        else if(g==4){
            document.getElementById("selectSection").innerHTML="<option value='Section A'>Select Section</option>"+
                            "@foreach ($teachers as $teacher)"+
                                "@if($teacher['grade_level']==4)"+
                                    "<option value='Section A'>{{ $teacher['section'] }}</option>"+
                                "@endif"+
                            "@endforeach";
        }
        else if(g==5){
            document.getElementById("selectSection").innerHTML="<option value='Section A'>Select Section</option>"+
                            "@foreach ($teachers as $teacher)"+
                                "@if($teacher['grade_level']==5)"+
                                    "<option value='Section A'>{{ $teacher['section'] }}</option>"+
                                "@endif"+
                            "@endforeach";
        }
        else if(g==6){
            document.getElementById("selectSection").innerHTML="<option value='Section A'>Select Section</option>"+
                            "@foreach ($teachers as $teacher)"+
                                "@if($teacher['grade_level']==6)"+
                                    "<option value='Section A'>{{ $teacher['section'] }}</option>"+
                                "@endif"+
                            "@endforeach";
        }
    }
</script>

<table class="table table-border">
    @foreach($count as $row)
    <tr>
        <td>{{ $row['grade_level'] }}</td>
        <td>{{ $row['section'] }}</td>
    </tr>
    @endforeach
@endsection