@extends('admin.master')

@section('content')


    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">مدیریت کاربران</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">مدیریت کاربران</li>
            </ol>
        </nav>
    </div>

    <!-- Users Table -->
    <div class="content-card">
        <div class="content-card-header">
            <h5 class="content-card-title">لیست کاربران</h5>
        </div>
        <div class="content-card-body">
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                    <tr>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>نام کاربری</th>
                        <th>ایمیل</th>
                        <th>نقش</th>
                        <th>عکس پروفایل</th>
                        <th>تاریخ عضویت</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            @if(@$user->isActive == 1)
                                <tr>
                                    <td>{{ $user->firstName }}</td>
                                    <td>{{ $user->lastName }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                    <span class="role-badge role-admin">
                                        @if(@$user->role_id == 1)
                                            ادمین
                                        @endif

                                        @if(@$user->role_id == 2)
                                            کاربر
                                        @endif
                                    </span>
                                    </td>
                                    <td><img src="{{ asset('storage/' . $user->profile_image) }}" class="profile-img" alt="{{$user->firstName}}"></td>
                                    <td>{{$user->created_at}}</td>

                                    <form action="{{ route('ban.user') }}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">

                                        @if(@$user->role_id == 1)
                                            <td>
                                                <button type="button" class="btn btn-delete" onclick="return confirm('ادمین سیستم را نمیتوان غیرفعال کرد')">
                                                    <i class="fa-solid fa-trash"></i> غیرفعال کردن
                                                </button>
                                            </td>
                                        @endif

                                        @if(@$user->role_id == 2)
                                            <td>
                                                <button type="submit" class="btn btn-delete" onclick="return confirm('آیا مطمعنی ؟')">
                                                    <i class="fa-solid fa-trash"></i>غیرفعال کردن
                                                </button>
                                            </td>
                                        @endif


                                    </form>
                                </tr>
                            @endif
                            @if(@$user->isActive == 0)
                                <tr>
                                    <td>{{ $user->firstName }}</td>
                                    <td>{{ $user->lastName }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                    <span class="role-badge role-admin">
                                        @if(@$user->role_id == 1)
                                            ادمین
                                        @endif

                                        @if(@$user->role_id == 2)
                                            کاربر
                                        @endif
                                    </span>
                                    </td>
                                    <td><img src="{{ asset('storage/' . $user->profile_image) }}" class="profile-img" alt="{{$user->firstName}}"></td>
                                    <td>{{$user->created_at}}</td>

                                    <form action="{{ route('ban.user') }}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">

                                        <td>
                                            <button type="submit" class="btn btn-secondary" onclick="return confirm('آیا فعال شود ؟')">
                                                <i class="fa-solid fa-trash"></i>غیرفعال شده
                                            </button>
                                        </td>
                                    </form>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
