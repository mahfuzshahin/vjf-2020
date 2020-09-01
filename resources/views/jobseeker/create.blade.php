@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Job Seeker Registration Form</div>

                <div class="card-body">
                @if(session()->get('success'))
                        <div class="alert alert-success">
                        {{ session()->get('success') }}  
                        </div><br />
                    @endif
                    <form method="POST" action="{{ route('jobseeker.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required autocomplete="address">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('City/State/Zip') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" required autocomplete="city">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cell Phone') }}</label>

                            <div class="col-md-6">
                                <input id="cell" type="number" class="form-control @error('cell') is-invalid @enderror" name="cell" value="{{ old('cell') }}" required autocomplete="cell" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Which Category you are interested ') }}</label>

                            <div class="col-md-6">
                            
                                <select id="category" class="form-control @error('category') is-invalid @enderror" name="category" required autocomplete="category" autofocus>
                                    <option>Select Category</option>
                                    <option value="Virtual Executives Associate">Virtual Executives Associate</option>
                                    <option value="Virtual Marketing/Sales Associate">Virtual Marketing/Sales Associate</option>
                                    <option value="Virtual Health Advisor">Virtual Health Advisor</option>
                                    <option value="Virtual Digital Marketer">Virtual Digital Marketer</option>
                                    <option value="Virtual Content/Script/Feature Writer">Virtual Content/Script/Feature Writer</option>
                                    <option value="Virtual Digital Content Developer">Virtual Digital Content Developer</option>
                                    <option value="Virtual Admission Consultant">Virtual Admission Consultant</option>
                                    <option value="Virtual Customer Support Executive">Virtual Customer Support Executive</option>
                                    <option value="Video Editor">Video Editor</option>
                                    <option value="SEO Executive">SEO Executive</option>
                                    <option value="Virtual Accounts Associates">Virtual Accounts Associates</option>
                                    <option value="Virtual Research Associates">Virtual Research Associates</option>
                                    <option value="Virtual Graphics Designer">Virtual Graphics Designer</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Number of Years of Experience') }}</label>

                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required autocomplete="experience" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Are you ready to work from Home ') }}</label>

                            <div class="col-md-6">

                                <select id="work_home" type="text" class="form-control @error('work_home') is-invalid @enderror" name="work_home" required autocomplete="work_home" autofocus>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Do you have device?') }}</label>

                            <div class="col-md-6">

                                <select id="device" type="text" class="form-control @error('device') is-invalid @enderror" name="device" required autocomplete="device" autofocus>
                                    <option value="Laptop">Laptop</option>
                                    <option value="Desktop">Desktop</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Do you have Internet at Home?') }}</label>

                            <div class="col-md-6">

                                <select id="internet" type="text" class="form-control @error('internet') is-invalid @enderror" name="internet" required autocomplete="internet" autofocus>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Will Manage">Will Manage</option>
                                </select>
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('What Skills Do you have?') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" class="form-check-input" name="skill[]" value="MS Office">MS Office<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Adobe Photoshop">Adobe Photoshop<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Adobe Illustrator">Adobe Illustrator<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="SEO">SEO<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Social Media Optimization">Social Media Optimization<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Website Development">Website Development<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Web Programing">Web Programing<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Content Development">Content Development<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Report Writing">Report Writing<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Data Entry (English/Bangla)">Data Entry (English/Bangla)<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Translator (English to Bangla or Bangla to English">Translator (English to Bangla or Bangla to English<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Adobe Premier for Video Editing">Adobe Premier for Video Editing<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Accounting">Accounting<br>
                                <input type="checkbox" class="form-check-input">Online Surveying <input type="text" class="form-control" name="skill[]"><br>
                                <input type="checkbox" class="form-check-input">Other <input type="text" class="form-control" name="skill[]"><br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Submit Resume') }}</label>

                            <div class="col-md-6">
                                <input id="resume" type="file" class="form-control" name="resume" required autocomplete="resume">
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
