@extends('layouts.Master')

@section('page_title', 'الرئيسية')

@section('page_content')
    <section class="hero" style="background-image: url({{ asset('images/hero-hall.jpg') }})">
        <span class="from-primary/90 via-primary/70 absolute inset-0 -z-10 bg-linear-to-r to-transparent mix-blend-multiply"></span>
        <div class="text-white">
            <h1 class="text-5xl leading-tight font-bold lg:text-7xl">
                بداية حياة كريمة
                <span class="text-secondary">بكل يُسر</span>
            </h1>
            <p class="mt-4 max-w-xl text-lg leading-relaxed text-white/90 lg:text-xl">منصة رقمية تمكنك من حجز قاعات أفراح حكومية مجهزة بالكامل، مع تحقق فوري من الأهلية عبر نفاذ لدعم استقرارك الأسري.</p>
            <div class="mt-7 flex items-center gap-4">
                <button class="focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-secondary hover:bg-secondary/90 inline-flex h-14 shrink-0 items-center justify-center gap-2 rounded-md px-8 text-lg font-bold whitespace-nowrap text-white shadow-xl transition-all duration-300 outline-none hover:-translate-y-1 hover:shadow-2xl focus-visible:ring-[3px] disabled:pointer-events-none disabled:opacity-50 has-[>svg]:px-4 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*='size-'])]:size-4">
                    تحقق من استحقاقك الآن
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left mr-2 h-5 w-5" data-loc="client/src/pages/Home.tsx:42">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>
                </button>
                <button class="focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:border-input dark:hover:bg-input/50 inline-flex h-14 shrink-0 items-center justify-center gap-2 rounded-md border border-white/30 bg-white/5 px-8 text-lg font-medium whitespace-nowrap text-white shadow-xs backdrop-blur-sm transition-all outline-none hover:bg-white/20 focus-visible:ring-[3px] disabled:pointer-events-none disabled:opacity-50 has-[>svg]:px-4 dark:bg-transparent [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*='size-'])]:size-4">تعرف على المزيد</button>
            </div>
        </div>
    </section>

    <section class="container space-y-16 py-24">
        <div class="mx-auto max-w-3xl space-y-4 text-center">
            <h1 class="text-primary text-4xl font-bold">لماذا منصة {{ config('app.name') }}؟</h1>
            <p class="text-muted-foreground text-xl">صممنا المنصة لتكون رحلة سهلة وميسرة تبدأ من التحقق وتنتهي بليلة العمر، مع مراعاة أعلى معايير الخصوصية والكرامة.</p>
        </div>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <div class="text-card-foreground group relative flex flex-col gap-6 overflow-hidden rounded-xl border border-none bg-white py-6 shadow-md transition-all duration-300 hover:shadow-xl">
                <div class="card-content">
                    <span class="bg-primary/5 absolute top-0 right-0 -mt-10 -mr-10 h-32 w-32 rounded-bl-full transition-transform duration-500 group-hover:scale-150"></span>
                    <span class="bg-primary/10 text-primary group-hover:bg-primary mb-6 flex h-16 w-16 items-center justify-center rounded-2xl transition-colors duration-300 group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check h-8 w-8" data-loc="client/src/pages/Home.tsx:149">
                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                    </span>
                    <div class="space-y-3">
                        <p class="text-foreground text-2xl font-bold">تحقق فوري وموثوق</p>
                        <p class="text-muted-foreground leading-relaxed">ربط مباشر مع نفاذ والضمان الاجتماعي للتحقق من الأهلية في ثوانٍ معدودة دون الحاجة لرفع مستندات ورقية.</p>
                    </div>
                </div>
            </div>
            <div class="text-card-foreground group relative flex flex-col gap-6 overflow-hidden rounded-xl border border-none bg-white py-6 shadow-md transition-all duration-300 hover:shadow-xl">
                <div class="card-content">
                    <span class="bg-primary/5 absolute top-0 right-0 -mt-10 -mr-10 h-32 w-32 rounded-bl-full transition-transform duration-500 group-hover:scale-150"></span>
                    <span class="bg-primary/10 text-primary group-hover:bg-primary mb-6 flex h-16 w-16 items-center justify-center rounded-2xl transition-colors duration-300 group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 h-8 w-8" data-loc="client/src/pages/Home.tsx:149">
                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                            <path d="M10 6h4"></path>
                            <path d="M10 10h4"></path>
                            <path d="M10 14h4"></path>
                            <path d="M10 18h4"></path>
                        </svg>
                    </span>
                    <div class="space-y-3">
                        <p class="text-foreground text-2xl font-bold">قاعات حكومية مجهزة</p>
                        <p class="text-muted-foreground leading-relaxed">قاعات حديثة ومجهزة بالكامل في مختلف مناطق المملكة، تضمن لك ولضيوفك تجربة مميزة تليق بمناسبتكم.</p>
                    </div>
                </div>
            </div>
            <div class="text-card-foreground group relative flex flex-col gap-6 overflow-hidden rounded-xl border border-none bg-white py-6 shadow-md transition-all duration-300 hover:shadow-xl">
                <div class="card-content">
                    <span class="bg-primary/5 absolute top-0 right-0 -mt-10 -mr-10 h-32 w-32 rounded-bl-full transition-transform duration-500 group-hover:scale-150"></span>
                    <span class="bg-primary/10 text-primary group-hover:bg-primary mb-6 flex h-16 w-16 items-center justify-center rounded-2xl transition-colors duration-300 group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-handshake h-8 w-8" data-loc="client/src/pages/Home.tsx:149">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                            <path d="M12 5 9.04 7.96a2.17 2.17 0 0 0 0 3.08c.82.82 2.13.85 3 .07l2.07-1.9a2.82 2.82 0 0 1 3.79 0l2.96 2.66"></path>
                            <path d="m18 15-2-2"></path>
                            <path d="m15 18-2-2"></path>
                        </svg>
                    </span>
                    <div class="space-y-3">
                        <p class="text-foreground text-2xl font-bold">دعم الاستقرار الأسري</p>
                        <p class="text-muted-foreground leading-relaxed">نساهم في تخفيف الأعباء المالية لبداية حياة زوجية مستقرة وكريمة، مع حفظ كامل لخصوصية المستفيد.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container space-y-16 py-24">
        <div class="mx-auto max-w-3xl space-y-4 text-center">
            <h1 class="text-primary text-4xl font-bold">رحلة المستفيد في خطوات بسيطة</h1>
        </div>
        <div class="grid grid-cols-1 gap-8 text-right md:grid-cols-2">
            <div class="mx-auto flex gap-6">
                <span class="border-secondary text-secondary flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 text-xl font-bold">01</span>
                <div class="text-foreground mb-2 text-xl font-bold">
                    <p class="text-foreground mb-2 text-xl font-bold">تسجيل الدخول</p>
                    <p class="text-muted-foreground">سجل دخولك بسهولة باستخدام رقم الهوية ورقم عقد النكاح.</p>
                </div>
            </div>
            <div class="mx-auto flex gap-6">
                <span class="border-secondary text-secondary flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 text-xl font-bold">02</span>
                <div class="text-foreground mb-2 text-xl font-bold">
                    <p class="text-foreground mb-2 text-xl font-bold">تسجيل الدخول</p>
                    <p class="text-muted-foreground">سجل دخولك بسهولة باستخدام رقم الهوية ورقم عقد النكاح.</p>
                </div>
            </div>
            <div class="mx-auto flex gap-6">
                <span class="border-secondary text-secondary flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 text-xl font-bold">03</span>
                <div class="text-foreground mb-2 text-xl font-bold">
                    <p class="text-foreground mb-2 text-xl font-bold">تسجيل الدخول</p>
                    <p class="text-muted-foreground">سجل دخولك بسهولة باستخدام رقم الهوية ورقم عقد النكاح.</p>
                </div>
            </div>
            <div class="mx-auto flex gap-6">
                <span class="border-secondary text-secondary flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 text-xl font-bold">04</span>
                <div class="text-foreground mb-2 text-xl font-bold">
                    <p class="text-foreground mb-2 text-xl font-bold">تسجيل الدخول</p>
                    <p class="text-muted-foreground">سجل دخولك بسهولة باستخدام رقم الهوية ورقم عقد النكاح.</p>
                </div>
            </div>
            <div class="col-span-full mt-12 text-center">
                <button class="focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-primary/90 bg-primary inline-flex h-12 shrink-0 items-center justify-center gap-2 rounded-md px-8 text-sm font-bold whitespace-nowrap text-white shadow-lg transition-all outline-none hover:-translate-y-1 hover:shadow-xl focus-visible:ring-[3px] disabled:pointer-events-none disabled:opacity-50 has-[>svg]:px-4 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*='size-'])]:size-4">ابدأ رحلتك الآن</button>
            </div>
        </div>
    </section>
@endsection
