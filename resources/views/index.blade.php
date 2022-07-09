@extends('layouts.main')
@section('content')
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                {{$prive->nama_depan}}
                <span class="text-primary">{{$prive->nama_belakang}}</span>
            </h1>
            <div class="subheading mb-5">
                {{$prive->alamat}}, {{$prive->post_code}} <br> {{$prive->telp}} · WA: {{$prive->wa}}
                <a href="mailto:{{$prive->email}}"> · {{$prive->email}}</a>
            </div>
            <p class="lead mb-5">{{$prive->intro}}</p>
            <div class="social-icons">
                @foreach($medsos as $medsos)
                    @if(!isset($medos->nama))
                        <a class="social-icon" href="{{$medsos->link}}"><i class="{{$medsos->image}}"></i></a>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Experience-->
    <section class="resume-section" id="experience">
        <div class="resume-section-content">
            <h2 class="mb-5">Experience</h2>
            @foreach($exp as $exp)
                @php
                    $akhir = $exp->tanggal_akhir;
                    if($exp->tanggal_akhir == $today){
                        $akhir = "sekarang";
                    }
                @endphp

                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">{{$exp->title}}</h3>
                        <div class="subheading mb-3">{{$exp->source}}</div>
                        <p>{{$exp->detail}}</p>
                    </div>
                    
                    <div class="flex-shrink-0"><span class="text-primary"> 
                        {{$exp->tanggal_mulai}} - {{$akhir}}</span>
                    </div>
                </div>
            @endforeach
       </div>
    </section>
    <hr class="m-0" />
    <!-- Education-->
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Education</h2>
            @foreach($edu as $edu)
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">{{$edu->edukasi}}</h3>
                        <div class="subheading mb-3">{{$edu->title}}</div>
                        <div>{{$edu->detail}}</div>
                        <p>{{$edu->GPA}}</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">
                        @php
                            $akhir = $edu->tanggal_akhir;
                            if($edu->tanggal_akhir == $today){
                                $akhir = "sekarang";
                            }
                        @endphp
                        {{$edu->tanggal_mulai}} - {{$akhir}}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <hr class="m-0" />
    <!-- Skills-->
    <section class="resume-section" id="skills">
        <div class="resume-section-content">
            <h2 class="mb-5">Skills</h2>
            <div class="subheading mb-3">Programming Languages & Tools</div>
            <ul class="list-inline dev-icons">
                @foreach($skill as $skill)
                <li class="list-inline-item"><i class="{{$skill->logo}}"></i></li>
                @endforeach
            </ul>
            <div class="subheading mb-3">Workflow</div>
            <ul class="fa-ul mb-0">
                @foreach($work as $work)
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>
                    {{$work->nama}}
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Interests-->
    <section class="resume-section" id="interests">
        <div class="resume-section-content">
            <h2 class="mb-5">Interests</h2>
            @foreach($interest as $interest)
            <p class="mb-0">{{$interest->text}}</p>
            @endforeach
        </div>
    </section>
    <hr class="m-0" />
    <!-- Awards-->
    <section class="resume-section" id="awards">
        <div class="resume-section-content">
            <h2 class="mb-5">Awards & Certifications</h2>
            <ul class="fa-ul mb-0">
                @foreach($awards as $awards)
                <li>
                    <a href= "{{$awards->link}}"><span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                    {{$awards->text}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Result-->
    <section class="resume-section" id="result">
        <div class="resume-section-content">
            <h2 class="mb-5">My works</h2>
            <ul class="fa-ul mb-0">
                @foreach($hasil as $hasil)
                <li>
                    <a href= "{{$hasil->link}}"> {{$hasil->nama}}, dikerjakan oleh {{$hasil->party}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>
@endsection