Module “Modules” trong Canvas LMS chủ yếu liên quan đến việc tổ chức và quản lý nội dung học tập theo chủ đề hoặc tuần. Dưới đây là các Domain Entities chính trong module này, kèm theo mô tả:

1. Module

	•	Mô tả: Đơn vị tổ chức chính của module.
	•	Thuộc tính:
	•	id: Mã định danh duy nhất của module.
	•	name: Tên của module (ví dụ: “Tuần 1: Giới thiệu”).
	•	position: Thứ tự của module trong danh sách.
	•	state: Trạng thái của module (published, unpublished, locked).
	•	unlock_at: Thời gian module được mở khóa (nếu có).
	•	completed_at: Thời gian module được hoàn thành.

2. Module Item

	•	Mô tả: Các nội dung hoặc hoạt động trong một module.
	•	Thuộc tính:
	•	id: Mã định danh duy nhất của item.
	•	title: Tiêu đề của item (ví dụ: “Bài giảng 1”).
	•	type: Loại item, bao gồm:
	•	Assignment (Bài tập)
	•	Quiz (Câu đố/kiểm tra)
	•	File (Tệp)
	•	Discussion (Thảo luận)
	•	Page (Trang thông tin)
	•	ExternalTool (Công cụ bên ngoài, ví dụ: Zoom)
	•	content_id: Mã định danh của nội dung liên kết (ví dụ: ID của bài tập hoặc quiz).
	•	completion_requirement: Yêu cầu để hoàn thành item (ví dụ: must_submit, must_view).
	•	url: Liên kết để truy cập item.

3. Requirement

	•	Mô tả: Các điều kiện cần thiết để hoàn thành module.
	•	Thuộc tính:
	•	id: Mã định danh của requirement.
	•	type: Loại yêu cầu (ví dụ: must_complete, must_submit).
	•	min_score: Điểm số tối thiểu (nếu áp dụng).

4. User Progress

	•	Mô tả: Tiến độ của người dùng trong module.
	•	Thuộc tính:
	•	module_id: ID của module đang theo dõi.
	•	user_id: ID của người dùng.
	•	completed: Trạng thái hoàn thành (true/false).
	•	items_completed_count: Số lượng item đã hoàn thành.
	•	required_items_count: Tổng số item cần hoàn thành.

5. Lock Info

	•	Mô tả: Thông tin khóa của module.
	•	Thuộc tính:
	•	module_id: ID của module bị khóa.
	•	locked_for_user: Xác định xem module có bị khóa đối với người dùng không (true/false).
	•	lock_at: Thời gian khóa.
	•	unlock_at: Thời gian mở khóa.
	•	manual_unlock: Cho phép giáo viên mở khóa thủ công.

6. Module Metadata

	•	Mô tả: Thông tin chung về module phục vụ mục đích quản lý.
	•	Thuộc tính:
	•	created_at: Thời gian module được tạo.
	•	updated_at: Thời gian module được cập nhật lần cuối.
	•	last_modified_by: ID của người dùng đã chỉnh sửa module cuối cùng.

7. Prerequisite

	•	Mô tả: Các điều kiện tiên quyết cần hoàn thành trước khi truy cập module.
	•	Thuộc tính:
	•	module_id: ID của module yêu cầu điều kiện tiên quyết.
	•	prerequisite_module_ids: Danh sách các ID module cần hoàn thành trước.

Các domain entities này được thiết kế để hỗ trợ quản lý nội dung và theo dõi tiến độ học tập, giúp module “Modules” linh hoạt và hiệu quả trong quản lý khóa học.
