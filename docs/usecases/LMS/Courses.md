Trong module Courses của Canvas LMS, các Domain Entities chính là các đối tượng hoặc thực thể quản lý dữ liệu liên quan đến khóa học. Đây là các thực thể có vai trò quan trọng trong việc tổ chức và triển khai nội dung học tập. Dưới đây là các Domain Entities chính trong module Courses:

1. Course (Khóa học)

	•	Mô tả: Là thực thể trung tâm đại diện cho một khóa học.
	•	Thuộc tính chính:
	•	ID khóa học (Course ID) 📄
	•	Tên khóa học (Course Name) 📚
	•	Mô tả khóa học (Course Description) ✍️
	•	Thời gian bắt đầu và kết thúc (Start/End Date) 🕒
	•	Trạng thái (Active/Inactive) ⚙️

2. Instructor (Giáo viên)

	•	Mô tả: Người phụ trách hoặc quản lý nội dung và hoạt động trong khóa học.
	•	Thuộc tính chính:
	•	ID người dùng (User ID) 👤
	•	Tên giáo viên (Name) 📛
	•	Email liên lạc (Email) 📧
	•	Vai trò (Role: Teacher) 🏫

3. Student (Sinh viên)

	•	Mô tả: Người học tham gia khóa học.
	•	Thuộc tính chính:
	•	ID người dùng (User ID) 👥
	•	Tên sinh viên (Name) 🧑‍🎓
	•	Email liên lạc (Email) 📩
	•	Trạng thái đăng ký (Enrollment Status: Enrolled/Withdrawn) ✅

4. Module (Mô-đun học tập)

	•	Mô tả: Cấu trúc tổ chức nội dung khóa học thành các phần hoặc chủ đề.
	•	Thuộc tính chính:
	•	ID mô-đun (Module ID) 🆔
	•	Tên mô-đun (Module Name) 📘
	•	Mô tả (Description) ✏️
	•	Thứ tự trong khóa học (Order) 🔢

5. Assignment (Bài tập)

	•	Mô tả: Các bài tập mà sinh viên phải hoàn thành trong khóa học.
	•	Thuộc tính chính:
	•	ID bài tập (Assignment ID) 📝
	•	Tên bài tập (Assignment Name) 📂
	•	Hạn chót (Due Date) ⏳
	•	Điểm tối đa (Max Score) 🏆
	•	Loại bài tập (Assignment Type: Online, File Upload) 💻

6. Discussion (Thảo luận)

	•	Mô tả: Các diễn đàn trao đổi ý kiến giữa giáo viên và sinh viên.
	•	Thuộc tính chính:
	•	ID thảo luận (Discussion ID) 💬
	•	Chủ đề thảo luận (Topic) 📜
	•	Nội dung ban đầu (Initial Post) 📝
	•	Thành viên tham gia (Participants) 👥

7. Quiz (Bài kiểm tra)

	•	Mô tả: Các bài quiz hoặc kiểm tra trong khóa học.
	•	Thuộc tính chính:
	•	ID bài kiểm tra (Quiz ID) 🆔
	•	Tên bài kiểm tra (Quiz Name) 🏷️
	•	Loại bài kiểm tra (Quiz Type: Graded, Practice) 🎯
	•	Thời lượng làm bài (Time Limit) ⏱️

8. File (Tệp)

	•	Mô tả: Tài liệu được tải lên và liên kết với khóa học.
	•	Thuộc tính chính:
	•	ID tệp (File ID) 📁
	•	Tên tệp (File Name) 🗂️
	•	Kích thước (File Size) 📦
	•	Định dạng (File Format: PDF, Word, etc.) 📄

9. Grade (Điểm số)

	•	Mô tả: Thông tin về kết quả học tập của sinh viên trong khóa học.
	•	Thuộc tính chính:
	•	ID điểm số (Grade ID) 🎓
	•	ID sinh viên (Student ID) 🧑‍🎓
	•	Điểm số (Score) 🏅
	•	Bài tập liên quan (Assignment/Quiz ID) 📝

10. Enrollment (Đăng ký khóa học)

	•	Mô tả: Quản lý trạng thái tham gia khóa học của người dùng.
	•	Thuộc tính chính:
	•	ID đăng ký (Enrollment ID) 🔖
	•	ID khóa học (Course ID) 📘
	•	ID người dùng (User ID) 👤
	•	Vai trò (Role: Student/Teacher) 🏫
	•	Trạng thái (Status: Active, Inactive, Withdrawn) ✅

Những thực thể này liên kết với nhau để đảm bảo quản lý dữ liệu hiệu quả và hỗ trợ người dùng trong việc dạy và học trên Canvas LMS. 😊
