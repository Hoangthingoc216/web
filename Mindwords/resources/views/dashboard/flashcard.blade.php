@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <h2 class="logo">Mindwords</h2>
        <nav>
            <a href="{{ route('dashboard') }}">
                <i class="bi bi-house"></i> Trang chủ
            </a>
            <a href="{{ route('dashboard.study') }}">
                <i class="bi bi-book"></i> Học tập
            </a>
            <a href="{{ route('dashboard.flashcard') }}" class="active">
                <i class="bi bi-layers"></i> Flashcards
            </a>
            <a href="#">
                <i class="bi bi-star"></i> Thành tích
            </a>
            <a href="#">
                <i class="bi bi-gear"></i> Cài đặt
            </a>
            <a href="{{ route('logout') }}">
                <i class="bi bi-box-arrow-right"></i> Đăng xuất
            </a>
        </nav>
    </aside>

    <!-- Nội dung chính -->
    <main class="content">
        <header class="header">
            <h1><i class="bi bi-layers"></i> Bộ Flashcard của bạn</h1>
        </header>

        <section class="study-section">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4><i class="bi bi-card-text"></i> Danh sách từ vựng</h4>
                <button class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Thêm Flashcard
                </button>
            </div>

            <!-- Danh sách flashcard -->
            <div class="flashcard-list">
                <div class="flashcard-item">
                    <h5><i class="bi bi-lightbulb"></i> Example</h5>
                    <p><strong><i class="bi bi-translate"></i> Nghĩa:</strong> Ví dụ</p>
                    <button class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-volume-up"></i> Nghe phát âm
                    </button>
                    <audio class="mt-2" controls 
                        src="https://api.dictionaryapi.dev/media/pronunciations/en/example-us.mp3"></audio>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection
