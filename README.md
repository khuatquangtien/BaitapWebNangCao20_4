# Social Login Laravel (Google & Facebook)

## Thông tin sinh viên

 Họ tên: Nguyễn Huy Hoàng
 Mã sinh viên: 23810310410
 Lớp: D18CNPM2
 1. Giới thiệu

Dự án xây dựng chức năng đăng nhập bằng tài khoản bên thứ ba (Google và Facebook) sử dụng Laravel và Socialite.
Hệ thống cho phép người dùng đăng nhập nhanh, lưu thông tin và hiển thị dữ liệu cá nhân.
 2. Công nghệ sử dụng

 Laravel Framework
 Laravel Socialite (OAuth 2.0)
 MySQL
 Blade Template
3. Cách cài đặt
 Bước 1: Clone project
`bash
git clone <link-github>
cd project
Bước 2: Cài đặt thư viện
bash
composer install
 Bước 3: Tạo file môi trường
bash
cp .env.example .env
php artisan key:generate
Bước 4: Cấu hình database trong file `.env`

env
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
 Bước 5: Chạy migrate

bash
php artisan migrate
Bước 6: Chạy projects
bash
php artisan serve
4. Cách cấu hình Google OAuth
Bước 1: Truy cập Google Cloud Console

Tạo project mới.
Bước 2: Tạo OAuth Client ID

 Vào: APIs & Services → Credentials
 Chọn: Create Credentials → OAuth Client ID
 Chọn loại: Web Application
Bước 3: Thêm Redirect URI
text
http://localhost:8000/auth/google/callback
Bước 4: Lấy thông tin

Client ID
Client Secret
 Bước 5: Thêm vào `.env`

```env
GOOGLE_CLIENT_ID=your_client_id
GOOGLE_CLIENT_SECRET=your_client_secret
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback
 5. Cách cấu hình Facebook OAuth
Bước 1: Truy cập Facebook Developer

Tạo App mới.
Bước 2: Thêm Facebook Login

Chọn Web Platform.
Bước 3: Thêm Redirect URI
text
http://localhost:8000/auth/facebook/callback
Bước 4: Lấy thông tin

 App ID
 App Secret

 Bước 5: Thêm vào `.env`
env
FACEBOOK_CLIENT_ID=your_app_id
FACEBOOK_CLIENT_SECRET=your_app_secret
FACEBOOK_REDIRECT_URI=http://localhost:8000/auth/facebook/callback
6. Chức năng chính

 Đăng nhập bằng Google
Đăng nhập bằng Facebook
 Lưu thông tin người dùng vào database
 Hiển thị thông tin (tên, email, MSSV, avatar)
 Đăng xuất
7. Ghi chú

Trong trường hợp OAuth không hoạt động do lỗi môi trường, hệ thống có thể sử dụng dữ liệu giả lập để minh họa luồng đăng nhập.
8. Demo
 Video demo: (đính kèm link)
 Nội dung:

   Login Google
   Login Facebook
   Hiển thị dashboard
   Logout

