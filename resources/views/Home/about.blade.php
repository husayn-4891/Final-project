@extends('layouts.user')

@section('content')
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-lg-6">
            <h1 class="display-4 fw-bold mb-4">About Our University</h1>
            <p class="lead text-muted mb-4">We are dedicated to providing world-class education and empowering the next generation of leaders.</p>
            <p>Founded in 1990, our institution has a rich history of academic excellence and innovation. We offer a diverse range of programs designed to meet the evolving needs of the global job market. Our campus is a vibrant community where students from all backgrounds come together to learn, grow, and succeed.</p>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('images/Me in LIMU library.jpeg') }}" class="img-fluid rounded shadow" alt="University Campus">
        </div>
    </div>

    <div class="row text-center mb-5">
        <div class="col-md-4 mb-4">
            <div class="p-4 bg-light rounded shadow-sm h-100">
                <div class="h1 text-primary mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                        <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"/>
                    </svg>
                </div>
                <h3 class="h4 mb-3">Innovation</h3>
                <p class="text-muted">Fostering creativity and critical thinking to solve real-world problems.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 bg-light rounded shadow-sm h-100">
                <div class="h1 text-primary mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.176.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                    </svg>
                </div>
                <h3 class="h4 mb-3">Community</h3>
                <p class="text-muted">Building a supportive and inclusive environment for all students and staff.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 bg-light rounded shadow-sm h-100">
                <div class="h1 text-primary mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                        <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68-1.858-.282zM12 6c0 3.314-2.686 6-6 6S0 9.314 0 6s2.686-6 6-6 6 2.686 6 6z"/>
                    </svg>
                </div>
                <h3 class="h4 mb-3">Excellence</h3>
                <p class="text-muted">Striving for the highest standards in teaching, research, and service.</p>
            </div>
        </div>
    </div>
</div>
@endsection
