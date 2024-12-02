Trong module “Assignments” của Canvas LMS, các Domain Entities đại diện cho các thực thể dữ liệu quan trọng mà hệ thống quản lý. Dưới đây là các Domain Entities chính và chức năng của chúng:

1. Assignment (Bài tập)

Mô tả: Là thực thể chính, đại diện cho một bài tập mà sinh viên cần hoàn thành.
Thuộc tính:
	•	ID: Định danh duy nhất của bài tập.
	•	Title: Tiêu đề bài tập (ví dụ: “Essay về biến đổi khí hậu”).
	•	Description: Mô tả hoặc hướng dẫn chi tiết.
	•	Due Date: Hạn nộp bài tập.
	•	Points Possible: Điểm tối đa cho bài tập.
	•	Submission Type: Loại bài nộp (tệp, văn bản trực tuyến, quiz, bài tập nhóm).
	•	Grading Type: Phương thức chấm điểm (thang điểm, tỷ lệ %).
	•	Created By: Giáo viên tạo bài tập.
	•	Assigned To: Danh sách sinh viên hoặc nhóm được giao bài.

2. Submission (Bài nộp)

Mô tả: Đại diện cho bài làm mà sinh viên nộp cho bài tập.
Thuộc tính:
	•	Submission ID: Định danh duy nhất của bài nộp.
	•	Assignment ID: Liên kết tới bài tập liên quan.
	•	Student ID: Sinh viên nộp bài.
	•	File Uploads: Tệp được nộp (nếu có).
	•	Submission Text: Nội dung văn bản (nếu nộp trực tuyến).
	•	Submission Time: Thời điểm nộp bài.
	•	Status: Trạng thái bài nộp (đã nộp, đang chấm điểm).

3. Rubric (Tiêu chí chấm điểm)

Mô tả: Cung cấp các tiêu chí đánh giá bài tập.
Thuộc tính:
	•	Rubric ID: Định danh duy nhất của tiêu chí.
	•	Assignment ID: Liên kết tới bài tập được áp dụng.
	•	Criteria: Các tiêu chí chấm điểm (ví dụ: Nội dung, cấu trúc, ngữ pháp).
	•	Points per Criterion: Điểm tối đa cho từng tiêu chí.
	•	Comments: Nhận xét đi kèm từng tiêu chí.

4. Grade (Điểm số)

Mô tả: Lưu trữ điểm số của từng sinh viên cho bài tập.
Thuộc tính:
	•	Grade ID: Định danh duy nhất của điểm số.
	•	Assignment ID: Liên kết tới bài tập tương ứng.
	•	Student ID: Sinh viên nhận điểm.
	•	Score: Điểm số đạt được.
	•	Feedback: Phản hồi từ giáo viên (nếu có).
	•	Graded By: Người chấm bài.

5. Group (Nhóm)

Mô tả: Đại diện cho các nhóm làm bài tập nhóm.
Thuộc tính:
	•	Group ID: Định danh duy nhất của nhóm.
	•	Assignment ID: Liên kết tới bài tập được giao cho nhóm.
	•	Group Members: Danh sách các thành viên trong nhóm.
	•	Group Submission: Bài nộp của nhóm (nếu có).

6. Attachment (Tệp đính kèm)

Mô tả: Các tài liệu hoặc tài nguyên đính kèm bài tập.
Thuộc tính:
	•	Attachment ID: Định danh duy nhất của tệp.
	•	Assignment ID: Liên kết tới bài tập tương ứng.
	•	File Name: Tên tệp.
	•	File Type: Loại tệp (PDF, Word, v.v.).
	•	File URL: Đường dẫn tải tệp.

7. Assignment Settings (Cài đặt bài tập)

Mô tả: Quản lý các cấu hình liên quan đến bài tập.
Thuộc tính:
	•	ID: Định danh duy nhất.
	•	Assignment ID: Liên kết tới bài tập.
	•	Allow Late Submissions: Cho phép nộp muộn hay không.
	•	Attempt Limit: Số lần nộp tối đa.
	•	Plagiarism Check: Có kiểm tra đạo văn không.

8. Comment (Bình luận)

Mô tả: Đại diện cho các bình luận hoặc phản hồi trên bài tập.
Thuộc tính:
	•	Comment ID: Định danh duy nhất của bình luận.
	•	Assignment ID: Liên kết tới bài tập.
	•	Author ID: Người tạo bình luận (giáo viên/sinh viên).
	•	Content: Nội dung bình luận.
	•	Timestamp: Thời điểm bình luận.

Các thực thể này kết hợp với nhau để quản lý toàn diện quá trình giao, thực hiện, nộp và chấm điểm bài tập trong Canvas LMS. 😊
