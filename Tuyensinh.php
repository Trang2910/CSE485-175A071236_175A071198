<?php
        $conn = mysqli_connect('localhost','root','','web') or die('Kết nối thất bại!'.mysqli_connect_error());
        mysqli_query($conn, 'SET NAMES UTF8');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Đại học Nguyễn Tất Thành</title>
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" href="css/Tuyensinh.css">
	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<?php
    include "top.php";
?>
        <div id="main">
        	<div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <div class="head">
                            <h3 style="">ĐẠI HỌC NGUYỄN TẤT THÀNH</h3>
                            <p style="color: #aa914d"><b>“Đoàn kết - Hội nhập - Năng Động - Trí tuệ - Trách nhiệm”</b></p>
                        </div>
                        <div class="body">
                            <img src="http://ntt.edu.vn/web/upload/images/phong%20Bac%20Ho.png" alt="">
                            <br><br>
                            <h3>QUY MÔ ĐÀO TẠO</h3>
                            <ul><li>Hơn 20.000 sinh viên</li></ul>
                            <h3>ĐỘI NGŨ GIẢNG VIÊN</h3>
                            <ul>
                                <li>924 giảng viên</li>
                                <li>90% có bằng TS, ThS  </li>
                            </ul>
                            <h3>CƠ SỞ VẬT CHẤT</h3>
                            <ul>
                                <li>4 cơ sở đào tạo</li>
                                <li>100.000 m² sàn xây dựng</li>
                                <li>3.000 máy tính</li>
                                <li>50.000 bản sách</li>
                                <li>Thư viện đạt chuẩn Quốc gia</li>
                            </ul>
                            <h3>CHẤT LƯỢNG</h3>
                            <ul>
                                <li>Đạt chuẩn kiểm định chất lượng của Bộ GD&ĐT</li>
                                <li>Đạt chuẩn QS-Stars 3 sao (Anh Quốc)</li>
                            </ul>
                            <h3>KHOA</h3>
                            <ul>
                                <li>Y</li>
                                <li>Dược</li>
                                <li>Quản trị kinh doanh</li>
                                <li>Khoa luật</li>
                                <li>Tài chính-Kế toán</li>
                                <li>Cơ khí-Điện tử-Ô tô</li>
                                <li>Kỹ thuật Thực phẩm và Môi trường</li>
                                <li>Công nghệ Sinh học</li>
                                <li>Công nghệ thông tin</li>
                                <li>Kiến trúc-Xây dựng-Mỹ thuật ứng dụng</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="img">
                            <img src="http://ntt.edu.vn/web/upload/images/Tuyen_sinh/banner_enquiry.jpg" alt="">
                            <article>
                                <h4>Tuyển sinh</h4>
                                <p>Đây là chuyên mục cung cấp một cách nhanh chóng, chính xác toàn cảnh thông tin về: • Tuyển sinh của Trường ĐH Nguyễn Tất Thành qua các năm • Thông tin tuyển sinh mới nhất của Bộ GD&ĐT • Chính sách học bổng tại Trường • Thông tin hướng nghiệp • Tư vấn Để biết thêm thông tin chi tiết, vui lòng truy cập tại địa chỉ:</p>
                                <b><a href=""><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>http://tuyensinh.ntt.edu.vn/</a></b>
                            </article>
                        </div>
                        <hr>
                        <?php
                            $sql = mysqli_query($conn,"SELECT * FROM posts order by id DESC limit 5") or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($sql)) :
                         ?>
                        <div class="main">
                            <?php echo "<img src=".$row['image'].">"; ?>
                            <div>
                                <h5><a href=""><?php echo $row['title']; ?></a></h5>
                                <p><?php echo $row['content']; ?></p>
                                <br>
                                <small><?php echo $row['author']; ?> - <?php echo $row['dateEdit']; ?></small>
                            </div>
                        </div> 
                        <hr>
                        <?php endwhile; ?>
                        <!-- <div class="main">
                            <img src="http://ntt.edu.vn/web/upload/images/Tuyen_sinh/Admission_Procedure.jpg" alt="">
                            <div>
                                <h5><a href="">Thông tin tuyển sinh</a></h5>
                                <p>NTTU - Đây là bức tranh toàn cảnh về thông tin tuyển sinh Đại học của Trường ĐH Nguyễn Tất Thành. Chuyên mục này luôn cập nhật các thông tin về quy chế tuyển sinh, phương thức xét tuyển của Trường ĐH Nguyễn Tất Thành và Bộ Giáo dục & Đào tạo một cách nhanh chóng và chính xác nhất.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="main">
                            <img src="http://ntt.edu.vn/web/upload/images/Tuyen_sinh/ScholarshipApplication-720x350.jpg" alt="">
                            <div>
                                <h5><a href="">Chính sách học bổng</a></h5>
                                <p>NTTU – Nhằm động viên, khích lệ tinh thần học sinh – sinh viên vượt qua khó khăn để tiếp tục con đường học tập, hàng năm nhà trường đã trích ngân sách hơn 20 tỷ đồng hỗ trợ học sinh – sinh viên đang theo học tại trường.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="main">
                            <img src="http://ntt.edu.vn/web/upload/images/Tuyen_sinh/admission.png" alt="">
                            <div>
                                <h5><a href="">Hướng nghiệp</a></h5>
                                <p>NTTU - Nhằm hỗ trợ cho các bạn thí sinh có thể chọn lựa nghề nghiệp phù hợp nhất với khả năng và nguyện vọng của bản thân. Trường ĐH Nguyễn Tất Thành tự hào là ngôi trường đào tạo với đa ngành và đa bậc học, ở đây các bạn thí sinh sẽ có nhiều sự lựa chọn tốt nhất cho nghề nghiệp ổn định trong tương lai của mình.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="main">
                            <img src="http://ntt.edu.vn/web/upload/images/Tuyen_sinh/NTTU_dktructuyen.gif" alt="">
                            <div>
                                <h5><a href="">Xét tuyển trực tuyến</a></h5>
                                <p>NTTU - Tránh tình trạng thí sinh chờ đợi, chen chúc, cũng như vượt đường xa đến tận trường để nộp hồ sơ, nhiều năm qua trường ĐH Nguyễn Tất Thành đã cho phép thí sinh được nộp hồ sơ trực tuyến với hình thức đơn giản và dễ dàng. Thí sinh tham gia xét tuyển có thể đăng ký xét tuyển trực tuyến tại đây</p>
                            </div>
                        </div> -->
                    </div>
                </div>   
            </div>
        </div>
        <br><br>
<?php 
    include 'bottom.php';
?>