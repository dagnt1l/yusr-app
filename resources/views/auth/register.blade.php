@extends('layouts.Master')

@section('page_title', 'انشاء حساب جديد')

@section('page_content')

    <section class="container py-16">
        <form class="card max-w-[750px]" action="{{ route('register.submit') }}" method="POST">
            @csrf
            <div class="card-content space-y-6 lg:p-8!">
                <h1 class="card-title text-3xl!">نموذج انشاء الحساب</h1>
                <div class="grid grid-cols-1 gap-3 lg:grid-cols-2">
                    <input type="text" name="first_name" placeholder="الإسم الأول باللغة العربية" value="{{ old('first_name') }}" class="form-input" />
                    <input type="text" name="father_name" placeholder="اسم الأب باللغة العربية" value="{{ old('father_name') }}" class="form-input" />
                    <input type="text" name="grand_father_name" placeholder="اسم الجد باللغة العربية" value="{{ old('grand_father_name') }}" class="form-input" />
                    <input type="text" name="last_name" placeholder="اسم العائلة باللغة العربية" value="{{ old('last_name') }}" class="form-input" />
                    <input type="text" name="national_id" placeholder="الهوية الوطنية / الإقامة" max="10" value="{{ old('national_id') }}" class="form-input" />
                    <input type="email" name="email" placeholder="البريد الالكتروني" value="{{ old('email') }}" class="form-input" />
                    <div class="col-span-full grid gap-3">
                        <input type="text" name="phone_number" placeholder="رقم الجوال" value="{{ old('phone_number') }}" class="form-input" />
                        <input type="password" name="password" placeholder="كلمة المرور" value="{{ old('password') }}" class="form-input" />
                        <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" value="{{ old('password_confirmation') }}" class="form-input" />
                    </div>
                </div>
                <button class="primary">انشاء الحساب</button>
            </div>
        </form>
    </section>
@endsection
