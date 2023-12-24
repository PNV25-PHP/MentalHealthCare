CREATE DATABASE MVC_Project;
USE MVC_Project;

CREATE TABLE users (
  Id INT PRIMARY KEY AUTO_INCREMENT,
  Role ENUM('admin', 'doctor', 'patient') NOT NULL,
  Email VARCHAR(255) UNIQUE NOT NULL,
  Password VARCHAR(255) NOT NULL,
  FirstName VARCHAR(255),
  LastName VARCHAR(255),
  Phone VARCHAR(20),
  Address varchar(255),
  Url_Image VARCHAR(255)
);

CREATE TABLE doctors (
  Id INT PRIMARY KEY AUTO_INCREMENT,
  UserId INT NOT NULL,
  Specialization VARCHAR(200),
  Hospital VARCHAR(255),
  FOREIGN KEY (UserId) REFERENCES users(Id)
);

CREATE TABLE patients (
  Id INT PRIMARY KEY AUTO_INCREMENT,
  UserId INT NOT NULL,
  FOREIGN KEY (UserId) REFERENCES users(Id)
);

CREATE TABLE admins (
  Id INT PRIMARY KEY AUTO_INCREMENT,
  UserId INT NOT NULL,
  FOREIGN KEY (UserId) REFERENCES users(Id)
);

CREATE TABLE booking (
  Id INT PRIMARY KEY AUTO_INCREMENT,
  PatientId INT NOT NULL,
  DoctorId INT NOT NULL,
  Options ENUM('Tructiep', 'Zalo') NOT NULL,
  StartAt DATETIME NOT NULL,
  EndTimeOption ENUM('0.5', '1', '1.5') NOT NULL,
  FOREIGN KEY (PatientId) REFERENCES patients(Id),
  FOREIGN KEY (DoctorId) REFERENCES doctors(Id)
);

CREATE TABLE Messages (
  Id INT PRIMARY KEY AUTO_INCREMENT,
  SenderId INT NOT NULL,
  ReceiverId INT NOT NULL,
  MessageType VARCHAR(255) NOT NULL,
  FOREIGN KEY (SenderId) REFERENCES Users(Id),
  FOREIGN KEY (ReceiverId) REFERENCES Users(Id)
);

-- Chèn dữ liệu cho bác sĩ (doctors)
INSERT INTO users (Role, Email, Password, FirstName, LastName, Phone, Address, Url_Image)
VALUES
  ('doctor', 'doctor1@mental.health.care.hospital', 'password1', 'Nguyễn', 'Văn A', '0921-123-456', '123 Đường A, Quận 1, TP.HCM', 'image1.jpg'),
  ('doctor', 'doctor2@mental.health.care.hospital', 'password2', 'Trần', 'Thị B', '0921-234-567', '456 Đường B, Quận 2, TP.HCM', 'image2.jpg'),
  ('doctor', 'doctor3@mental.health.care.hospital', 'password3', 'Phạm', 'Văn C', '0921-345-678', '789 Đường C, Quận 3, TP.HCM', 'image3.jpg'),
  ('doctor', 'doctor4@mental.health.care.hospital', 'password4', 'Lê', 'Thị D', '0921-456-789', '012 Đường D, Quận 4, TP.HCM', 'image4.jpg'),
  ('doctor', 'doctor5@mental.health.care.hospital', 'password5', 'Nguyễn', 'Văn E', '0921-567-890', '345 Đường E, Quận 5, TP.HCM', 'image5.jpg'),
  ('doctor', 'doctor16@mental.health.care.hospital', 'password6', 'Lê', 'Thị Q', '0921-890-123', '678 Đường Q, Quận 16, TP.HCM', 'image16.jpg'),
  ('doctor', 'doctor17@mental.health.care.hospital', 'password7', 'Nguyễn', 'Văn R', '0921-901-234', '901 Đường R, Quận 17, TP.HCM', 'image17.jpg'),
  ('doctor', 'doctor18@mental.health.care.hospital', 'password8', 'Trần', 'Thị S', '0921-012-345', '234 Đường S, Quận 18, TP.HCM', 'image18.jpg'),
  ('doctor', 'doctor19@mental.health.care.hospital', 'password9', 'Phạm', 'Văn T', '0921-123-456', '567 Đường T, Quận 19, TP.HCM', 'image19.jpg'),
  ('doctor', 'doctor20@mental.health.care.hospital', 'password10', 'Lê', 'Thị U', '0921-234-567', '890 Đường U, Quận 20, TP.HCM', 'image20.jpg');



INSERT INTO doctors (UserId, Specialization, Hospital)
VALUES
  (1, 'Tâm lý học', 'Bệnh viện Tâm thần Trung ương'),
  (2, 'Tâm thần học lâm sàng', 'Bệnh viện Tâm thần Huế'),
  (3, 'Tâm lý trị liệu', 'Bệnh viện Tâm thần Hà Nội'),
  (4, 'Tâm thần trẻ em và thanh thiếu niên', 'Bệnh viện Tâm thần TP.HCM'),
  (5, 'Tâm thần não', 'Bệnh viện Tâm thần Đà Nẵng'),
  (6, 'Tâm thần nghiện', 'Bệnh viện Tâm thần Cần Thơ'),
  (7, 'Tâm thần lão khoa', 'Bệnh viện Tâm thần Đồng Nai'),
  (8, 'Tâm thần pháp y', 'Bệnh viện Tâm thần Bắc Giang'),
  (9, 'Y học giấc ngủ', 'Bệnh viện Tâm thần Bình Dương'),
  (10, 'Tâm thần liên hệ', 'Bệnh viện Tâm thần Vũng Tàu');


-- Chèn dữ liệu cho bệnh nhân (patients)
INSERT INTO users (Role, Email, Password, FirstName, LastName, Phone, Address, Url_Image)
VALUES
  ('patient', 'benh_nhan1@example.com', 'password1', 'Nguyễn', 'Thị Hương', '1111111111', '123 Đường A, Quận 1, TP.HCM', 'image1.jpg'),
  ('patient', 'benh_nhan2@example.com', 'password2', 'Trần', 'Văn Hải', '2222222222', '456 Đường B, Quận 2, TP.HCM', 'image2.jpg'),
  ('patient', 'benh_nhan3@example.com', 'password3', 'Phạm', 'Thị Trang', '3333333333', '789 Đường C, Quận 3, TP.HCM', 'image3.jpg'),
  ('patient', 'benh_nhan4@example.com', 'password4', 'Lê', 'Văn Tùng', '4444444444', '012 Đường D, Quận 4, TP.HCM', 'image4.jpg'),
  ('patient', 'benh_nhan5@example.com', 'password5', 'Nguyễn', 'Thị Mỹ', '5555555555', '345 Đường E, Quận 5, TP.HCM', 'image5.jpg');


INSERT INTO patients (UserId)
VALUES
  (11),
  (12),
   (13),
   (14),
   (15);


-- Chèn dữ liệu cho quản trị viên (admins)
INSERT INTO users (Role, Email, Password, FirstName, LastName, Phone, Url_Image)
VALUES
  ('admin', 'admin1@mentalheath.management', 'admin1', 'Nguyễn', 'Công', '0921-234-567', 'image5.jpg'),
  ('admin', 'admin2@mentalheath.management', 'admin2', 'Hospital', 'Management', '0921-234-567', 'image6.jpg');

INSERT INTO admins (UserId)
VALUES
  (16),
  (17);
