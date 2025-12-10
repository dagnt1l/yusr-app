@extends('layouts.Master')

@section('page_title', 'تسجيل الدخول')

@section('page_content')
    <section class="container py-16">

        <form class="bg-card text-card-foreground glass-card mx-auto flex max-w-md flex-col gap-6 overflow-hidden rounded-xl border-0 py-6 pt-0! shadow-2xl" action="{{ route('login.submit') }}" method="POST">
            <span class="from-primary via-secondary to-primary h-2 bg-linear-to-r"></span>
            <div class="card-content space-y-8">
                <div class="text-center">
                    <span class="bg-primary/10 text-primary mx-auto mb-4 flex size-16 items-center justify-center rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check h-8 w-8" data-loc="client/src/pages/Register.tsx:101">
                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                    </span>
                    <h1 class="text-primary text-2xl font-bold mt-4">التحقق من الهوية</h1>
                    <p class="text-muted-foreground text-sm mt-2">أدخل بياناتك للتحقق عبر بوابة نفاذ الموحد</p>
                </div>
                <div class="space-y-4">
                    <div class="form-group">
                        <label for="national-id">رقم الهوية الوطنية / الإقامة</label>
                        <input type="text" id="national-id" class="form-input" placeholder="1xxxxxxxxx" value="{{ old('national_id') }}" min="10" max="10" />
                    </div>
                    <div class="form-group">
                        <label for="password">كلمة المرور</label>
                        <input type="password" id="password" class="form-input" placeholder="••••••••" value="{{ old('password') }}" />
                    </div>
                </div>
                <button class="primary w-full py-4! text-lg">تسجيل الدخول</button>
            </div>
        </form>
    </section>
@endsection
