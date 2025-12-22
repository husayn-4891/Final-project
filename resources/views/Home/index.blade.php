@extends('layouts.user')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center g-5 py-5">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Welcome to Course Management System</h1>
                <p class="lead">Manage your academic journey with ease. Access courses, grades, and connect with professors and students all in one place.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="/" class="btn btn-primary btn-lg px-4 me-md-2">Browse Courses</a>
                    <a href="/" class="btn btn-outline-secondary btn-lg px-4">Student Portal</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/2025 Eid.jpeg') }}" class="d-block mx-lg-auto img-fluid rounded shadow-lg" alt="Education" width="700" height="500" loading="lazy">
            </div>
        </div>

        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3 rounded p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                    </svg>
                </div>
                <div>
                    <h2>Diverse Courses</h2>
                    <p>Explore a wide range of courses tailored to your interests and career goals. From engineering to arts, we have it all.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3 rounded p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.176.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                    </svg>
                </div>
                <div>
                    <h2>Expert Professors</h2>
                    <p>Learn from experienced professors who are leaders in their respective fields. Get mentorship and guidance.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3 rounded p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
                        <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.845-1.91 3.16-3.022 3.712A5.5 5.5 0 0 1 9.825 11H6.175a5.5 5.5 0 0 1-3.51-1.362C1.543 9.097.423 7.782-.367 5.936a3 3 0 1 1-1.133-5.89C1.488 1.55 1.477 1.038 1.477.5H2.5zm1.15 2.125c.1.935.266 1.997.538 3.048.28 1.08.75 2.028 1.348 2.688.592.653 1.313 1.047 2.116 1.178a4.5 4.5 0 0 0 2.7-.43c.64-.322 1.19-.824 1.574-1.427.384-.604.596-1.316.596-2.122 0-.806-.212-1.518-.596-2.122-.384-.603-.934-1.105-1.574-1.427a4.5 4.5 0 0 0-2.7-.43c-.803.13-1.524.525-2.116 1.178-.598.66-1.068 1.608-1.348 2.688-.272 1.051-.438 2.113-.538 3.048zM3.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0v-1zm9 0a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0v-1z"/>
                        <path d="M6 15a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2H6z"/>
                    </svg>
                </div>
                <div>
                    <h2>Achieve Excellence</h2>
                    <p>Track your progress and achieve your academic goals with our comprehensive tools and resources.</p>
                </div>
            </div>
        </div>
    </div>
@endsection