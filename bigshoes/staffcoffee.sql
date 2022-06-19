-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2021 lúc 12:36 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `staffcoffee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_kh` varchar(50) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `noi_dung` varchar(50) NOT NULL,
  `ngay_bl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `mo_ta` varchar(500) NOT NULL,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `hinh`, `don_gia`, `giam_gia`, `mo_ta`, `ma_loai`) VALUES

(64, 'Thịt nặc dăm heo', 'thitnacdamheo.jpg', 154000, 0, 'Thịt nạc dăm là lớp thịt mềm, có các lớp mỡ mỏng xen kẽ với thịt, có dạng miếng to gần giống như phần mỡ trong miếng thịt bò bít tết. Đây là lựa chọn hoàn hảo cho các bạn thích ăn thịt nạc nhưng lại có tí mỡ béo béo.', '1'),
(65, 'Thịt ba chỉ heo', 'thitbachiheo.jpg', 150000, 0, 'Thịt ba chỉ heo là một trong những món ăn không thể tiếu trên bàn ăn hằng ngày của mỗi gia đình. Nó có thể chế biến được rất nhiều món ngon và có thể ăn mọi lúc mà không chán.', '1'),
(66, 'Thịt giò móng heo', 'thitgiomongheo.jpg', 55000 , 0, 'Móng giò là khúc thịt được tính từ khớp gối đến phần móng lợn. Móng giò có nhiều da và nhiều gân, ít thịt nhưng thịt rất sệt, da giòn. Thịt mỡ ở móng giò khi ăn không quá béo. Móng giò khi hầm, kho, hấp hay nấu đông…đều có mùi vị thơm ngon và có nhiều lợi ích rất tốt cho sức khỏe.', '1'),
(67, 'Thịt nạc vai heo', 'thitnacvaiheo.jpg', 129000, 0, 'Thịt nạc vai là phần thịt nằm ở vị trí vai heo nên có độ dai và giòn, chứa cả phần nạc lẫn mỡ. Chúng thường được xay nhuyễn để chế biến nhiều món ăn như thịt viên, cháo thịt heo, thịt bằm xào,….', '1'),
(68, 'Thịt ức gà', 'thitucga.jpg', 50000, 0, 'Ức gà được xác định là phần thịt màu trắng nằm phía trước và xung quanh ngực của con gà, thường có rất nhiều thịt, ít da và ít mỡ. Ức gà là một loại thực phẩm giàu chất dinh dưỡng, chúng rất dễ tìm mua và chế biến thành nhiều món ăn hấp dẫn.', '1'),
(69, 'Thịt đùi gà tỏi', 'thitduitoiga.jpg', 48000, 0, 'Đùi gà tỏi là phần thịt được xác định trên đầu gối và dưới mông của con gà, đây là phần thịt to, chắc thịt và ngon vì nó nằm ở khớp thường xuyên được con gà chạy nhảy hoạt động.', '1'),
(70, 'Cánh tỏi gà', 'canhtoiga.jpg', 60000, 0, 'Cánh tỏi gà hay cánh nách gà là phần có nhiều thịt trắng nhất của cánh gà và bởi nó có nhiều thịt nhất và có màu trắng giống như củ tỏi nên gọi là cánh tỏi gà. Bộ phận này ít xương, giàu đạm nhất và không có cholesterol, ăn ngon mà không ngán được nhiều người ưa thích.', '1'),
(71, 'Thịt vai bò', 'thitvaibo.jpg', 215000, 0, 'Đây là phần thịt được lọc từ thịt cổ và vai con bò. Phần thịt này mềm, béo nhẹ nhờ những vân mỡ xen kẽ phần nạc. Thịt mềm nên cảm giác như tan ngay trong miệng khi thưởng thức, vị ngọt thanh.','1'),
(72, 'Thịt ba chỉ bò', 'thitbachibo.jpg', 165000, 1, 'Thịt ba chỉ bò là phần đặc biệt thơm ngon và bổ dưỡng nhất trên cơ thể của con bò. Ở bộ phận này, thịt của nó có thể chế biến thành nhiều món đa dạng khác nhau nhưng vẫn giữ đúng hương vị riêng biệt.', '1'),
(73, 'Thịt sườn bò', 'thitsuonbo.jpg', 125000, 0, 'Sườn bò là phần thịt nằm ở phần ức của con bò, đặc trưng của thịt là có độ béo ngậy bởi lớp mỡ chạy dọc dẻ sườn cùng phần thịt nạc chắc nên khá phù hợp để bạn chế biến những món ăn trong gia đình như sốt vang, hầm… .', '1'),

(74, 'Đầu cá thu', 'daucathu.jpg', 170000, 1, 'Đầu cá thu bao gồm 2 mắt cá, má cá thu, phần ức cá và xương ở đỉnh đầu đây là phần được đánh giá là hấp dẫn với nhiều sụn giòn giòn và béo nên ăn không bị ngán. Đặc biệt 2 bên má cá thu có rất nhiều thịt săn chắc thích hợp dùng cho các món như nướng, bỏ lẩu hay nấu canh chua rất ngon.', '2'),
(75, 'Cá thu nguyên con', 'cathunguyencon.jpg', 149000, 0, 'Cá thu, loại cá rất quen thuộc được nhiều người thích ăn bởi nguồn đạm, chất béo… trong cá thu rất bổ dưỡng đối với sức khỏe của mọi người, từ người già, trẻ em, phụ nữ mang thai và phụ nữ trong thời gian sau khi sinh.', '2'),
(76, 'Cá thu đông lạnh', 'cathudonglanh.jpg', 230000, 0, 'Sản phẩm này là cá thu được cấp đông nguyên con, giúp cá giữ được nguyên vẹn độ tươi ngon và dưỡng chất bên trong.', '2'),
(77, 'Cá ngừ nguyên con', 'cangunguyencon.jpg', 140000, 1, 'Cá ngừ đại dương nguyên con chứa nhiều dinh dưỡng, ít chất béo (các chị em có thể ăn thoải mái mà vẫn giảm cân), nhiều Omega. Vì vậy cá ngừ có nhiều chất dinh dưỡng hơn thịt bò.', '2'),
(78, 'Đầu cá ngừ', 'daucangu.jpg', 130000, 0, 'Đầu cá ngừ đại dương là món ăn khoái khẩu nhất, đặc biệt khi kho thơm để ăn kèm có bún.', '2'),
(79, 'Đầu cá hồi', 'daucahoi.jpg', 64000, 0, 'Đầu cá hồi có xương mềm, béo có thể nấu canh chua, nấu lẩu,... đầu cá mua về có thể dùng muối và chanh để khử mùi tanh. Đầu cá hồi tươi đông lạnh có thể kéo dài thời gian bảo quản, thích hợp cho nhu cầu gia đình trong việc chế biến và mang đến những món ăn bổ dưỡng.', '2'),
(80, 'Cá hồi cắt khúc', 'cahoicatkhuc.jpg', 99000, 0, 'Cá hồi cắt khúc đông lạnh vẫn giữ được độ tươi ngon, màu sắc bắt mắt, được sơ chế sạch sẽ an toàn, đặt mua giao hàng trong ngày tại Bách hoá XANH. Cá hồi xuất xứ Chi Lê, chứa nhiều chất dinh dưỡng, được nhiều chọn mua cung cấp cho bữa ăn gia đình', '2'),
(81, 'Chả cá basa viên', 'chacabasavien.jpg', 48800, 0, 'Chả cá Nhất Tâm luôn mang đến những loại cá viên tươi ngon và giàu chất dinh dưỡng. Cá viên basa nhân trứng cút Nhất Tâm gói 500g làm từ nguyên liệu cá tươi ngon kết hợp với trứng cút, có thể đa dạng sử dụng chế biến: nướng, chiên hoặc nấu lẩu mang đến hương vị mới cho bữa ăn gia đình', '2'),
(82, 'Chả ốc nhồi', 'chaocnhoi.jpg', 40000 ,0, 'Chả cá basa tươi ngon cùng phần thịt ốc bươu giòn ngon sừn sựt đến từ thương hiệu chả cá Nhất Tâm. Chả ốc nhồi basa Nhất Tâm gói 500g là sự lựa chọn không thể bỏ qua của các bà nội trợ trong những ngày bận rộn, mang lại bữa ăn ngon miệng và giàu dinh dưỡng.', '2'),
(83, 'Chả cá thác lác', 'chacathaclac.jpg', 42000, 1, 'Chả cá được làm với nguyên liệu chính là thịt cá Thát Lát cùng với các loại gia vị khác cho sản phẩm vừa ăn, thơm ngon, mùi hương cá chân thật. Thích hợp để sử dụng cho các bữa ăn vặt, đặc biệt là các em nhỏ ăn kèm với tương ớt thật tuyệt vời.', '2'),

(84, 'Xà lách', 'xalach.jpg', 32000, 0, 'Rau xà lách là một loại rau lá màu xanh đôi khi là màu tía do vậy chúng rất giàu dinh dưỡng và tốt cho sức khỏe. Đặc biệt là rau này khi về già lá có xu hướng sậm màu và vị càng ngăm đắng đồng thời cung cấp cho người sử dụng nhiều giá trị dinh dưỡng hơn.', '3'),
(85, 'Rau dền', 'rauden.jpg', 21000,0, 'Rau dền là loại rau mùa hè phổ biến trong các bữa ăn của mọi gia đình,  ngoài công dụng làm mát gan, thanh nhiệt, loại rau này còn được biết đến như một vị thuốc chữa được rất nhiều bệnh.', '3'),
(86, 'Rau muống', 'raumuong.jpg', 15000, 1, 'Tác dụng của rau muống được đánh giá cao trong việc ngăn ngừa và điều trị bệnh mãn tính. Các chất dinh dưỡng trong rau muống cũng có lợi cho việc chống lão hóa da và giúp mái tóc thêm chắc khỏe.', '3'),
(87, 'Rau cần tây', 'raucantay.jpg', 35100 ,0, 'Cần tây là một loại rau có thể ăn sống hoặc nấu chín. Một số người sử dụng chiết xuất từ rau cần tây để thoa lên da, giúp xua đuổi muỗi. Ngoài ra, người ta cũng uống nước ép cần tây để điều trị cho các bệnh như tiền tiểu đường hoặc viêm khớp dạng thấp.', '3'),
(88, 'Rau diếp cá', 'raudiepca.jpg', 20000, 0, 'Rau diếp cá thường được sử dụng cùng với các loại rau thơm khác. Đây là thói quen có lợi cho sức khỏe và các tác dụng phụ của rau diếp cá rất hiếm gặp', '3'),
(89, 'Rau quế', 'rauque.jpg', 12700, 0,'Quế (húng quế) là một loại thảo dược thuộc họ bạc hà có vị cay, tính nóng được dùng làm gia vị cho các món ăn và cũng mang lại nhiều lợi ích về sức khỏe', '3'),
(90, 'Bắp cải', 'bapcai.jpg', 25000, 0, 'Bắp cải là loại rau rất quen thuộc và phát triển mạnh vào mùa đông. Thế nhưng, đây lại là loại rau bổ dưỡng, vừa dùng để ăn, chữa bệnh, vừa dùng để làm đẹp....', '3'),
(91, 'Mồng tơi', 'mongtoi.jpg', 14000, 0, 'Mồng tơi mát và mùa nè nóng nực nó được xem như thứ rau vua. Trong Đông y, mồng tơi có tính hàn, vị chua, không độc, đi vào 5 kinh tâm, tì, can, đại trường, tá tràng, giúp lợi tiểu, tán nhiệt, giải độc, làm đẹp da, trị rôm sảy, mụn nhọt.', '3'),
(92, 'Cà rốt', 'carot.jpg', 25000, 1, 'Với hàm lượng chất chống oxy hóa, beta carotene, các vitamin và khoáng chất dồi dào, cà rốt được xem là một trong những thực phẩm cực tốt cho sức khỏe chúng ta.', '3'),
(93, 'Khoai lang', 'khoailang.jpg', 15000,0, 'Củ khoai lang là nguồn cung cấp rất nhiều vitamin, khoáng chất, riboflavin, thiamine, niacin và carotenoid. Chính nhờ những thành phần dinh dưỡng này mà củ khoai lang có thể hỗ trợ bạn phòng và chữa nhiều bệnh mãn tính, tăng cường giảm cân, cải thiện làn da và mái tóc.', '3'),
(94, 'Khoai tây', 'khoaitay.jpg', 55000, 1,  'Khoai tây thuộc họ cà, là một loại củ đa năng có hàm lượng chất dinh dưỡng cao', '3'),
(95, 'Súp lơ', 'suplo.jpg', 17000 , 0, 'súp lơ xanh đặc biệt bổ dưỡng vì chúng giàu vitamin và chất dinh dưỡng giúp cải thiện sức khỏe tim mạch, chống ung thư và cân bằng lại lượng đường trong máu', '3'),
(96, 'Khoai mỡ', 'khoaimo.jpg', 42500, 0, 'Khoai mỡ là loại thực phẩm chứa nhiều vitamin, khoáng chất cũng như chất chống oxi hóa. Tất cả khiến chúng trở thành một loại thực phẩm lành mạnh để bổ sung vào chế độ ăn hàng ngày. Ngoài ra, khi nấu chín, khoai trở nên mềm hơn, ngọt và hấp dẫn.', '3'),
(97, 'Cải xoong', 'caixoong.jpg', 20000, 0, 'Loại rau này thuộc họ nhà Cải (Brassicaceae) và rất được con người ưa chuộng do nó có hương vị rất ngon, dễ ăn, dễ chế biến và đặc biệt, cải xoong có rất nhiều công dụng tốt cho sức khỏe.', '3'),

(98, 'Cam sành Hà Giang', 'camsanh.jpg', 25000, 0, 'Cam sành là loại trái cây vốn được nhiều người yêu thích, đặc biệt là trẻ nhỏ và chị em phụ nữ, bởi cam rất bổ dưỡng và cao cấp.', '4'),
(99, 'Bưởi Năm Roi', 'buoi.jpg',32000 , 0, 'Bưởi năm roi là một trong những đặc sản nổi tiếng tại Vĩnh Long, có nguồn gốc từ xã Mỹ Hòa, huyện Bình Minh.', '4'),
(100, 'Đào Sa Pa',  'dao.jpg', 40000, 0, 'Đào SaPa không giống như các loại đào khác, đào trồng ở độ cao hơn 3000m cao ngang với đỉnh phan si păng, mát mẻ vào mùa hè mùa đông thì lạnh giá, sương mù bao phủ. Vượt qua những thời tiết lạnh giá như thế nên trái đào đào SaPa cho hương vị thơm ngon đặc biệt chỉ riêng đào Sa Pa mới có.', '4'),
(101, 'Xoài cát Hòa Lộc', 'xoai.jpg', 65000, 0, 'Là loại trái cây giàu chất xơ, vitamin, khoáng chất thiết yếu giúp cung cấp chất dinh dưỡng cho cơ thể con người và mang lại nhiều lợi ích tuyệt vời cho hệ tiêu hóa, tim mạch, giúp mắt sáng, làm đẹp da, Xoài cát Hòa Lộc có vị ngọt thanh dễ chịu, thịt dày, ít xơ và có độ dẻo lý tưởng', '4'),
(102, 'Vải thiều Lục Ngạn', 'vai.jpg' , 50000, 1, 'Vải thiều được trồng tại Lục Ngạn, Bắc Giang có thể nói là một trong những giống vải ngon nhất của Việt Nam.', '4'),
(103, 'Nhãn lồng Hưng Yên', 'nhanlong.jpg', 49500, 0, 'Nhãn lồng Hưng Yên là món đặc sản ngon nức tiếng và là sản vật tiến vua của người dân Hưng Yên bởi loại nhãn nơi đây sai trĩu quả, khi chín hương thơm lan tỏa khắp đất trời.', '4'),
(104, 'Chôm Chôm', 'chomchom.jpg', 35000, 0, 'Quả chôm chôm chứa nhiều vitamin C, giàu chất đạm, chất béo và các nguyên tố vi lượng có tác dụng dinh dưỡng và làm thuốc chữa bệnh.', '4'),
(105, 'Mít', 'mit.jpg', 30000, 0, 'Quả mít (hay trái mít) là loại trái cây nhiệt đới quen thuộc với người Việt. Không chỉ hấp dẫn với hương vị ngọt ngào, quả mít còn mang lại nhiều lợi ích cho sức khỏe như kiểm soát đường huyết và ngăn ngừa nhiều bệnh tật.', '4'),
(106, 'Sầu riêng', 'saurieng.jpg', 60000, 0, 'Sầu riêng là một loại trái cây lớn, có mùi khá nồng và nặng, nhưng cực kỳ giàu các chất dinh dưỡng, chẳng hạn như vitamin C, vitamin B, khoáng chất, chất béo lành mạnh, chất xơ và một số hợp chất thực vật có lợi khác.', '4'),
(107, 'Mãng cầu', 'mangcau.jpg', 45000, 0, 'Mãng cầu xiêm (mãng cầu gai) là một loại quả vô cùng quen thuộc đối với mọi người. Loại quả này có ít calo, chứa nhiều chất xơ và vitamin C. Đặc biệt, mãng cầu là loại quả có chứa hàm lượng chất chống oxy hóa cực kỳ cao.', '4'),
(108, 'Ổi', 'oi.jpg', 40000, 0, 'Ổi là một trong những loại trái cây chứa nhiều vitamin và các khoáng chất có lợi cho sức khoẻ.','4'),
(109, 'Dưa hấu', 'duahau.jpg', 20000, 0, 'Dưa hấu là một loại trái cây tươi, ngon, mát và rất tốt cho sức khỏe. Một cốc nước dưa hấu chỉ chứa 46 calo nhưng cung cấp rất nhiều vitamin C, vitamin A và những hợp chất thực vật tốt cho sức khỏe', '4'),
(110, 'Chanh dây', 'chanhday.jpg', 15000, 1, 'Chanh dây hay còn gọi là chanh leo, khi chín có màu mận tươi, ruột màu vàng có vị chua thanh, hương thơm khá hấp dẫn.', '4');


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hd` int(11) NOT NULL,
  `ngay_mua` varchar(20) NOT NULL,
  `ghi_chu` varchar(50) NOT NULL,
  `tinh_trang` varchar(20) NOT NULL DEFAULT '0',
  `ma_kh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hd`, `ngay_mua`, `ghi_chu`, `tinh_trang`, `ma_kh`) VALUES
(110, '23-10-2021', '', '1', 'admin'),
(111, '11-11-2021', '', '0', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hd` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`ma_hd`, `so_luong`, `don_gia`, `ma_hh`) VALUES
(110, 1, 35000, 65),
(111, 1, 336000, 106);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `vai_tro` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ho_ten`, `mat_khau`, `email`, `dia_chi`, `vai_tro`) VALUES
('admin', 'Duy', '123123', 'truongduy0412bku@gmail.com', 'Hồ Chí Minh', 1),
('pikachu', 'Piiiiiiiiiiii', '123123', 'pi@gmail.com', 'Đà Nẵng', 0),
('thy', 'Trương Anh Thy', '123123', 'thy@gmail.com', 'Vũng Tàu', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(1, 'Thịt'),
(2, 'Cá'),
(3, 'Rau củ'),
(4, 'Trái cây');


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `thanh_vien` varchar(100) NOT NULL COMMENT 'thành viên thanh toán',
  `money` float NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `thanh_vien`, `money`, `note`, `vnp_response_code`, `code_vnpay`, `code_bank`, `time`) VALUES
(1, '742874161', 'abc', 100000, 'chinh chuyển khoản', '00', '13401455', 'NCB', '2020-10-10 01:00:00'),
(2, '608324672', 'abc', 1000000, 'test chuyển khoản', '00', '13401811', 'NCB', '2020-10-11 21:00:00'),
(3, '1134065293', 'CT2', 150000, 'học phí', '00', '13407163', 'NCB', '2020-10-22 23:00:00'),
(4, '596509313', 'CT2', 5000000, 'học phí', '00', '13407176', 'NCB', '2020-10-23 00:00:00'),
(5, '70267166', 'CT2', 5000000, 'học phí', '00', '13407178', 'NCB', '2020-10-23 00:00:00'),
(6, '1672349048', 'CT1', 150000, 'học phí', '00', '13407729', 'NCB', '2020-10-23 21:00:00'),
(7, '106', '', 2070000, 'Noi dung thanh toan', '00', '13563934', 'NCB', '2021-08-13 21:00:00'),
(8, '110', '', 35000, 'Noi dung thanh toan', '00', '13610095', 'NCB', '2021-10-23 21:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hd`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_hd` (`ma_hd`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai_hang` (`ma_loai`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_3` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
