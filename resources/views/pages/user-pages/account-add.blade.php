@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('/assets/plugins/dragula/dragula.min.css') !!}
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Account Infomation</h4>
                    <form action="submit" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="user_id">User ID</label>
                            <input type="text" class="form-control" name="user_id" id="user_id" placeholder="user id"
                                value="{{ $user->user_id ?? '' }}" {{ isset($user) ? 'readonly' : '' }}>
                        </div>
                        <div class="form-group">
                            <label for="user_name">User Name</label>
                            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="user name"
                                value="{{ $user->user_name ?? '' }}">
                        </div>
                        @if (Request::is('user-pages/*/add'))
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="password">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                                    placeholder="confirm password">
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="day_of_birth">Day of Birth</label>
                            <input type="date" class="form-control" name="day_of_birth" id="day_of_birth"
                                value="{{ $user->day_of_birth ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="user_email">Email</label>
                            <input type="email" class="form-control" name="user_email" id="user_email"
                                placeholder="email@email.com" value="{{ $user->user_email ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="user_phone">Phone</label>
                            <input type="tel" class="form-control" name="user_phone" id="user_phone"
                                placeholder="user phone" value="{{ $user->user_phone ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="user_address">Address</label>
                            <input type="text" class="form-control" name="user_address" id="user_address"
                                placeholder="user address" value="{{ $user->user_address ?? '' }}">
                        </div>
                        @if (Request::is('user-pages/teacher/add'))
                            <div class="form-group">
                                <input type="hidden" name="user_role" value="2">
                            </div>
                        @endif
                        @if (Request::is('user-pages/student/add'))
                            <div class="form-group">
                                <input type="hidden" name="user_role" value="3">
                            </div>
                        @endif
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
    {!! Html::script('/assets/plugins/dragula/dragula.min.js') !!}
@endpush

@push('custom-scripts')
    {!! Html::script('/assets/js/dragula.js') !!}
@endpush
