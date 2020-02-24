@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Input Student') }}</div>
                <div class="card-body">
                    <form action="/studentSubmit" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="studentID" class="col-md-4 col-form-label text-md-right">{{ __('Student ID') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="studentID" id="studentID" class="form-control @error('studentID') is-invalid @enderror" required>

                                {{-- @error('studentID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="firstName" id="firstName" class="form-control @error('firstName') is-invalid @enderror" required>

                                {{-- @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="middleName" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="middleName" id="middleName" class="form-control @error('middleName') is-invalid @enderror">

                                {{-- @error('middleName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="lastName" id="lastName" class="form-control @error('lastName') is-invalid @enderror" required>

                                {{-- @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="college" class="col-md-4 col-form-label text-md-right">{{ __('College') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="college" id="college" class="form-control @error('college') is-invalid @enderror" required>

                                {{-- @error('college')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="course" id="course" class="form-control @error('course') is-invalid @enderror" required>

                                {{-- @error('course')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="yearLevel" class="col-md-4 col-form-label text-md-right">{{ __('Year Level') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="yearLevel" id="yearLevel" class="form-control @error('yearLevel') is-invalid @enderror" required>

                                {{-- @error('yearLevel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection