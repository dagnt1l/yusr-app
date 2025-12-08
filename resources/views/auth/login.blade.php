@extends('layouts.Master')

@section('page_title', 'تسجيل الدخول')

@section('page_content')
    <section class="container py-16">
        <form class="card max-w-[750px]" action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="bg-green-700 p-5 text-white lg:p-8">
                <p class="font-medium">الدخول من خلال النفاذ الوطني الموحد</p>
            </div>
            <div class="card-content space-y-6 lg:p-8!">
                <h1 class="card-title text-3xl!">تسجيل الدخول</h1>
                <div class="grid gap-3 *:last:col-span-full">
                    <input type="text" name="national_id" class="form-input" placeholder="الهوية الوطنية / الإقامة" />
                    <input type="password" name="password" class="form-input" placeholder="كلمة المرور" />
                </div>
                <button class="primary">تسجيل الدخول</button>
            </div>
            <div class="bg-green-700 p-5 text-white lg:p-8">
                <a href="{{ route('register.view') }}" class="text-gray-200 font-medium">انشاء حساب جديد</a>
            </div>
        </form>
    </section>
@endsection
