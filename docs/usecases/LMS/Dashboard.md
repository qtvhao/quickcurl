Module “Dashboard” trong Canvas LMS cung cấp cái nhìn tổng quan về các hoạt động học tập, và các Domain Entities chính liên quan đến module này có thể được phân loại như sau:

1. User (Người dùng)

	•	Định nghĩa: Người dùng truy cập và sử dụng hệ thống.
	•	Thuộc tính chính:
	•	ID người dùng
	•	Tên (First Name, Last Name)
	•	Email
	•	Vai trò (sinh viên, giáo viên, quản trị viên)
	•	Avatar

2. Course (Khóa học)

	•	Định nghĩa: Các khóa học mà người dùng tham gia.
	•	Thuộc tính chính:
	•	ID khóa học
	•	Tên khóa học
	•	Mô tả ngắn (Short Description)
	•	Trạng thái (Active/Archived)
	•	Ngày bắt đầu và kết thúc (Start Date, End Date)
	•	Hình ảnh đại diện (Course Thumbnail)

3. Card (Thẻ khóa học)

	•	Định nghĩa: Thẻ đại diện cho từng khóa học trên Dashboard.
	•	Thuộc tính chính:
	•	Liên kết đến khóa học
	•	Tiêu đề khóa học
	•	Màu sắc hiển thị (Card Color)
	•	Trạng thái hoàn thành (Completion Status)

4. Announcement (Thông báo)

	•	Định nghĩa: Các thông báo quan trọng liên quan đến khóa học hoặc hệ thống.
	•	Thuộc tính chính:
	•	ID thông báo
	•	Tiêu đề (Title)
	•	Nội dung (Content)
	•	Người tạo thông báo (Author)
	•	Thời gian đăng (Timestamp)

5. To-Do Item (Công việc cần làm)

	•	Định nghĩa: Danh sách nhiệm vụ, bài tập hoặc bài kiểm tra cần hoàn thành.
	•	Thuộc tính chính:
	•	Loại công việc (Assignment, Quiz, Discussion)
	•	Thời hạn (Due Date)
	•	Trạng thái (Completed/In Progress)
	•	Liên kết trực tiếp đến bài tập

6. Calendar Event (Sự kiện lịch)

	•	Định nghĩa: Các sự kiện liên quan đến khóa học, chẳng hạn buổi học trực tuyến hoặc deadline.
	•	Thuộc tính chính:
	•	Tiêu đề sự kiện
	•	Thời gian bắt đầu và kết thúc
	•	Liên kết đến sự kiện chi tiết
	•	Loại sự kiện (Buổi học, Deadline)

7. Activity Feed (Luồng hoạt động)

	•	Định nghĩa: Bản tóm tắt các hoạt động gần đây, chẳng hạn:
	•	Nộp bài tập
	•	Cập nhật điểm số
	•	Bài viết mới trên diễn đàn
	•	Thuộc tính chính:
	•	Nội dung hoạt động
	•	Người thực hiện
	•	Thời gian hoạt động

8. Notification (Thông báo hệ thống)

	•	Định nghĩa: Cảnh báo hoặc thông báo từ hệ thống, chẳng hạn bảo trì hoặc cập nhật mới.
	•	Thuộc tính chính:
	•	Nội dung thông báo
	•	Thời gian hiển thị
	•	Trạng thái đã đọc/chưa đọc

9. Preference (Tùy chỉnh cá nhân)

	•	Định nghĩa: Cài đặt hiển thị Dashboard theo sở thích của người dùng.
	•	Thuộc tính chính:
	•	Chế độ hiển thị (Card View, List View, Recent Activity)
	•	Thứ tự sắp xếp các thẻ khóa học
	•	Màu sắc hoặc biểu tượng cá nhân hóa

Tóm lại

Các Domain Entities của module “Dashboard” chủ yếu xoay quanh việc cung cấp thông tin tổng quan và tạo điều kiện để người dùng nhanh chóng truy cập vào các khóa học và hoạt động quan trọng. Các entity chính như User, Course, Card, và To-Do Item là những thành phần cốt lõi trong module này. 😊
