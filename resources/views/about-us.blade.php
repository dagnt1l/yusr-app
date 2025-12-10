@extends('layouts.Master')

@section('page_title', 'عنا')

@section('page_content')
    <section class="container mx-auto max-w-4xl py-16">
        <div class="text-center">
            <h1 class="text-primary mb-6 text-4xl font-bold lg:text-5xl">
                عن منصة
                {{ config('app.name') }}
            </h1>
            <p class="text-muted-foreground text-xl leading-relaxed">مبادرة وطنية طموحة تهدف إلى تيسير الزواج ودعم الاستقرار الأسري من خلال حلول رقمية مبتكرة وخدمات حكومية متكاملة.</p>
        </div>

        <section class="mt-16 mb-16 grid grid-cols-1 gap-8 md:grid-cols-2">
            <div class="text-card-foreground flex flex-col gap-6 overflow-hidden rounded-xl border border-none bg-white py-6 pt-0! shadow-lg">
                <span class="bg-primary h-2"></span>
                <div class="card-content">
                    <span class="bg-primary/10 text-primary mb-6 flex h-12 w-12 items-center justify-center rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target h-6 w-6" data-loc="client/src/pages/About.tsx:20">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                        </svg>
                    </span>
                    <p class="mb-4 text-2xl font-bold">رؤيتنا</p>
                    <p class="text-muted-foreground leading-relaxed">أن نكون النموذج الرائد عالمياً في تقديم الخدمات الاجتماعية الرقمية التي تعزز جودة الحياة وتدعم بناء أسر مستقرة ومزدهرة.</p>
                </div>
            </div>
            <div class="text-card-foreground flex flex-col gap-6 overflow-hidden rounded-xl border border-none bg-white py-6 pt-0! shadow-lg">
                <span class="bg-secondary h-2"></span>
                <div class="card-content">
                    <span class="bg-secondary/10 text-secondary mb-6 flex h-12 w-12 items-center justify-center rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb h-6 w-6" data-loc="client/src/pages/About.tsx:33">
                            <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path>
                            <path d="M9 18h6"></path>
                            <path d="M10 22h4"></path>
                        </svg>
                    </span>
                    <p class="mb-4 text-2xl font-bold">رسالتنا</p>
                    <p class="text-muted-foreground leading-relaxed">توفير حلول ذكية ومستدامة لتكاليف الزواج من خلال استغلال الموارد الحكومية المتاحة وتقديمها للمستفيدين بكل يسر وشفافية.</p>
                </div>
            </div>
        </section>
    </section>
@endsection
