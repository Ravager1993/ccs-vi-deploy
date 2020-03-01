@extends('layouts.app')

@section('content')
<div class="container counter-page">
    <h2>Counter</h2>

    <div class="row">
        <div class="col-md-5">
            <form action="#" method="get">
                <label for="grade1" class="mb-4 grade-1 btn-grade w-100">
                    <div class="some">
                        <input type="radio" name="radio-grade" id="grade1">
                        <i class="icon-grade"></i>
                        <div class="label p-4">Grade 1</div>
                    </div>
                </label>

                <label for="grade2" class="mb-4 grade-2 btn-grade w-100">
                    <div class="some">
                        <input type="radio" name="radio-grade" id="grade2">
                        <i class="icon-grade"></i>
                        <div class="label p-4">Grade 2</div>
                    </div>
                </label>

                <label for="grade3" class="mb-4 grade-3 btn-grade w-100">
                    <div class="some">
                        <input type="radio" name="radio-grade" id="grade3">
                        <i class="icon-grade"></i>
                        <div class="label p-4">Grade 3</div>
                    </div>
                </label>
                <label for="grade4" class="mb-4 grade-4 btn-grade w-100">
                    <div class="some">
                        <input type="radio" name="radio-grade" id="grade4">
                        <i class="icon-grade"></i>
                        <div class="label p-4">Grade 4</div>
                    </div>
                </label>
                <label for="grade5" class="mb-4 grade-5 btn-grade w-100">
                    <div class="some">
                        <input type="radio" name="radio-grade" id="grade5">
                        <i class="icon-grade"></i>
                        <div class="label p-4">Grade 5</div>
                    </div>
                </label>
                <label for="grade6" class="mb-4 grade-6 btn-grade w-100">
                    <div class="some">
                        <input type="radio" name="radio-grade" id="grade6">
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
                        <option value="Section A">Section A</option>
                        <option value="Section A">Section B</option>
                        <option value="Section A">Section C</option>
                        <option value="Section A">Section D</option>
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
@endsection