@extends('layout')

@section('content')
<h1 class="text-2xl font-bold mb-6 text-white">PROJECTS</h1>

<div class="grid gap-4">

    <div class="bg-white hover:bg-red-50 w-full p-7 mt-5 rounded-lg shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 ">
        <h1 class="font-bold text-lg text-red-600">🌟 REPOTA (Repositori Tugas Akhir)</h1>
        <p class="text-sm text-gray-600 mb-2">
          Docker, Laravel, PHP, MySQL, Tailwind CSS.
        </p>
        <div class="font-bold"> Project Description</div>
        <p class="mb-2">
        A web-based thesis repository system designed for Informatics students at Universitas Diponegoro.
        This system implements a Knowledge Management System concept to help students access and explore thesis resources effectively.
        </p>
        <div class="font-bold"> Key Features:
        </div>
        <div class="mb-2">
            <ul>
                <li class="mb-1">
                   ✅ Online thesis repository</li>
                <li class="mb-1">
                    ✅ Advanced search using Information Retrieval</li>
                <li class="mb-1">
                    ✅ Discussion forum for academic topics</li>
                <li class="mb-1">Knowledge sharing platform</li>
            </ul>
        </div>
        <div class="font-bold">Methods</div>
        <p class="mb-2">TF-IDF, Cosine Similarity</p>

        <div class="font-bold">💡Highlights</div>
        <p class="mb-5">Implemented search optimization using TF-IDF and cosine similarity for more relevant results</p>
        
        <a href="#" class="text-blue-500 hover:underline hover:bg-blue-200 bg-blue-100 p-2 rounded">GitHub</a>
        
    </div>

    <div class="bg-white hover:bg-orange-50 w-full p-7 mt-5 rounded-lg shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 ">
        <h1 class="font-bold text-lg text-orange-600">🌟 SIGMA (Sistem Informasi Manajemen Akademik)</h1>
        <p class="text-sm text-gray-600 mb-2">
          Docker, Laravel, PHP, MySQL, Tailwind CSS.
        </p>
        <div class="font-bold"> Project Description</div>
        <p class="mb-2">
           Web-based academic information system designed to support students, lecturers, and academic staff in managing academic activities efficiently.
        </p>
        <div class="font-bold"> Key Features:
        </div>
        <div class="mb-2">
            <ul>
                <li class="mb-1">
                   ✅ Course registration (IRS) for students
                </li>
                <li class="mb-1">
                    ✅ Schedule approval by lecturers
                </li>
                <li class="mb-1">
                    ✅ Student grade monitoring
                </li>
                <li class="mb-1">✅ Classroom and schedule management for academic staff</li>
            </ul>
        </div>
        <div class="font-bold">💡Highlights</div>
        <p class="mb-5">Role-based system with different access levels (student, lecturer, staff)</p>
        
        <a href="#" class="text-blue-500 hover:underline hover:bg-blue-200 bg-blue-100 p-2 rounded">GitHub</a>
        
    </div>

    <div class="bg-white hover:bg-yellow-50  w-full p-7 mt-5 rounded-lg shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 ">
        <h1 class="font-bold text-lg text-yellow-600">🌟 SILADIN(Sistem Layanan dan dan Informasi)</h1>
        <p class="text-sm text-gray-600 mb-2">
          Docker, Laravel, PHP, MySQL, Tailwind CSS.
        </p>
        <div class="font-bold"> Project Description</div>
        <p class="mb-2">
          Information service system developed for BMKG Stasiun Klimatologi Jawa Tengah to manage public data services in a more integrated and structured way.
        </p>
        <div class="font-bold"> Key Features:
        </div>
        <div class="mb-2">
            <ul>
                <li class="mb-1">
                   ✅ Public service request management
                </li>
                <li class="mb-1">
                    ✅ Data weather provider management
                </li>
                <li class="mb-1">
                    ✅ Employee management system
                </li>
            </ul>
        </div>
        <div class="font-bold">💡Highlights</div>
        <p class="mb-5">Built to improve data service efficiency and system integration</p>
        
        <a href="#" class="text-blue-500 hover:underline hover:bg-blue-200 bg-blue-100 p-2 rounded">GitHub</a>
        
    </div>

    

</div>
@endsection