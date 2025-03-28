@extends('layouts.app')

@section('title', 'Liên hệ')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Liên Hệ Với Chúng Tôi</h1>

    <p class="text-center">Nếu bạn có bất kỳ câu hỏi nào, vui lòng liên hệ với chúng tôi qua biểu mẫu dưới đây hoặc thông tin liên hệ chi tiết.</p>

    <div class="row">
        <!-- Biểu mẫu liên hệ -->
        <div class="col-md-6">
            <div class="card p-4">
                <h3>Gửi tin nhắn</h3>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nhập họ và tên" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Nhập email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Nội dung</label>
                        <textarea name="message" id="message" rows="4" class="form-control" placeholder="Nhập nội dung liên hệ" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi tin nhắn</button>
                </form>
            </div>
        </div>

        <!-- Thông tin liên hệ -->
        <div class="col-md-6">
            <div class="card p-4">
                <h3>Thông tin liên hệ</h3>
                <ul class="list-unstyled">
                    <li><strong>📍 Địa chỉ:</strong> 123 Đường ABC, Quận X, Thành phố Y</li>
                    <li><strong>📧 Email:</strong> <a href="gtv03394@gmail.com">gtv03394@gmail.com</a></li>
                    <li><strong>📞 Điện thoại:</strong> 0123 456 789</li>
                </ul>
            </div>
            
            <!-- Google Maps -->
            <div class="card mt-4">
                <iframe 
                    width="100%" 
                    height="300" 
                    style="border:0;" 
                    loading="lazy" 
                    allowfullscreen 
                    referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4820771702723!2d106.78273457482432!3d10.852568157870804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175275d5e47662f%3A0x26f15e41f9dc3ac6!2zSG9DIE1pbmggSGFuIFRodXQ!5e0!3m2!1sen!2s!4v1710933333107!5m2!1sen!2s">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection
